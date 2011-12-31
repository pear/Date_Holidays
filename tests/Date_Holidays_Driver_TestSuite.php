<?php
/**
 * Test class for running driver related unit tests.
 *
 * PHP Versions 4 and 5
 * 
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running driver related unit tests.
 * 
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_TestSuite extends PHPUnit_Framework_TestCase
{
    var $driver;
    protected $lang_dir;

    /**
     * setup 
     * 
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->lang_dir = helper_get_lang_dir('Date_Holidays');

        $this->driver = Date_Holidays::factory('Germany', 2005, 'de_DE');
        if (Date_Holidays::isError($this->driver)) {
            $this->fail(helper_get_error_message($this->driver));
        }

        $ret = $this->driver->addCompiledTranslationFile(
                $this->lang_dir . '/Christian/de_DE.ser', 'de_DE');
        if (Date_Holidays::isError($ret)) {
            $this->fail(helper_get_error_message($ret));
        }

        $ret = $this->driver->addCompiledTranslationFile(
                $this->lang_dir . '/Germany/de_DE.ser', 'de_DE');
        if (Date_Holidays::isError($ret)) {
            $this->fail(helper_get_error_message($ret));
        }
    }

    /**
     * test AddCompiledTranslationFile method
     * 
     * @access public
     * @return void
     */
    function testAddCompiledTranslationFile()
    {
        $result = $this->driver->addCompiledTranslationFile(
                $this->lang_dir . '/Christian/de_DE.ser', 'de_DE');
        if (Date_Holidays::isError($result)) {
            $this->fail(helper_get_error_message($result));
        }
        $this->assertTrue($result);

        $result = $this->driver->addCompiledTranslationFile(
                $this->lang_dir . '/Germany/de_DE.ser', 'de_DE');
        if (Date_Holidays::isError($result)) {
            $this->fail(helper_get_error_message($result));
        }
        $this->assertTrue($result);
    }
    /**
     * test the AddTranslationFile method
     * 
     * @access public
     * @return void
     */
    function testAddTranslationFile()
    {               
        $result = $this->driver->addTranslationFile(
                $this->lang_dir . '/Germany/de_DE.xml', 'de_DE');
        if (Date_Holidays::isError($result)) {
            $this->fail(helper_get_error_message($result));
        }
        $this->assertTrue($result);
    }

    /**
     * test IsHoliday method
     * 
     * @access public
     * @return void
     */
    function testIsHoliday()
    {
        $this->assertTrue($this->driver->isHoliday('2005-05-05'));

        // ascension day
        $date = new Date('2005-05-05 12:03:10');
        $this->assertTrue($this->driver->isHoliday($date));

        $filter = new Date_Holidays_Filter_Whitelist(array('ascensionDay'));
        $this->assertTrue($this->driver->isHoliday('2005-05-05', $filter));
    }

    /**
     * test GetHolidays method
     * 
     * @access public
     * @return void
     */
    function testGetHolidays()
    {
        $holidays = $this->driver->getHolidays();
        foreach ($holidays as $holiday) {
            $this->assertInstanceOf('Date_Holidays_Holiday', $holiday);
        }

        $filter   = new Date_Holidays_Filter_Whitelist(array('ascensionDay', 
                                                             'easter'));
        $holidays = $this->driver->getHolidays($filter);
        $this->assertEquals(2, count($holidays));

        $filter   = new Date_Holidays_Filter_Blacklist(array('ascensionDay', 
                                                             'easter'));
        $holidays = $this->driver->getHolidays($filter);
        $this->assertNotContains('ascensionDay', array_keys($holidays));
        $this->assertNotContains('easter', array_keys($holidays));
    }

    /**
     * testGetHoliday 
     * 
     * @access public
     * @return void
     */
    function testGetHoliday()
    {
        $holiday = $this->driver->getHoliday('ascensionDay');
        $this->assertInstanceOf('Date_Holidays_Holiday', $holiday);
        $this->assertEquals('ascensionDay', $holiday->getInternalName());

        $result = $this->driver->addCompiledTranslationFile(
                $this->lang_dir . '/Germany/de_DE.ser', 'de_DE');
        if (Date_Holidays::isError($result)) {
            $this->fail(helper_get_error_message($result));
        }
        $this->assertTrue($result, 'Adding compiled translation file');

        $holiday = $this->driver->getHoliday('ascensionDay', 'de_DE');
        $this->assertEquals('Christi Himmelfahrt', $holiday->getTitle());
    }

    /**
     * testGetHolidayDate 
     * 
     * @access public
     * @return void
     */
    function testGetHolidayDate()
    {
        $date = $this->driver->getHolidayDate('ascensionDay');
        $this->assertInstanceOf('Date', $date);
        $this->assertTrue($date->equals(new Date('2005-05-05')));
    }

    /**
     * testGetHolidayDates 
     * 
     * @access public
     * @return void
     */
    function testGetHolidayDates()
    {
        $dates = $this->driver->getHolidayDates();
        foreach ($dates as $date) {
            $this->assertInstanceOf('Date', $date);
        }

        $restrict = array('ascensionDay', 'easter');
        $filter   = new Date_Holidays_Filter_Whitelist($restrict);
        $dates    = $this->driver->getHolidayDates($filter);
        $this->assertEquals(2, count($dates));
        foreach ($dates as $internalName => $_tmp) {
            $this->assertContains($internalName, $restrict);
        }

        $filter   = new Date_Holidays_Filter_Blacklist($restrict);
        $holidays = $this->driver->getHolidayDates($filter);
        foreach ($restrict as $internalName) {
            $this->assertNotContains($internalName, array_keys($holidays));
        }
    }

    /**
     * testGetHolidayForDate 
     * 
     * @access public
     * @return void
     */
    function testGetHolidayForDate()
    {
        $holiday = $this->driver->getHolidayForDate('2005-05-05');
        if (Date_Holidays::isError($holiday)) {
            $this->fail(helper_get_error_message($holiday));
        }

        $result  = $this->driver->addCompiledTranslationFile(
                $this->lang_dir . '/Germany/de_DE.ser', 'de_DE');
        if (Date_Holidays::isError($result)) {
            $this->fail(helper_get_error_message($result));
        }

        $holiday = $this->driver->getHolidayForDate('2005-05-05', 'de_DE');
        $this->assertEquals('Christi Himmelfahrt', $holiday->getTitle());

        $result = $this->driver->getHolidayForDate('2005-05-05', 
                                                   null, 
                                                   true);
        $this->assertInternalType('array', $result);
        $this->assertTrue(count($result) > 1);

        foreach ($result as $holiday) {
            $this->assertInstanceOf('Date_Holidays_Holiday', $holiday);
        }

        $germany  = Date_Holidays::factory('Germany', 2005, 'de_DE');
        if (Date_Holidays::isError($germany)) {
            $this->fail(helper_get_error_message($germany));
        }
        $holidays = $germany->getHolidayForDate(mktime(0, 0, 0, 10, 30, 2005), 
                                                null, 
                                                true);

        $this->assertEquals(2, count($holidays));
        $holiday1 = $holidays[0];
        $holiday2 = $holidays[1];
        $this->assertTrue($holiday1->getInternalName() === 'stampsDay'
                || $holiday1->getInternalName() === 'savingsDay');
        switch ($holiday1->getInternalName()) {
        case 'stampsDay':
            $this->assertEquals('savingsDay', 
                                $holiday2->getInternalName(),
                                'stampsDay and savingsDay test failed');
            break;
        case 'savingsDay':
            $this->assertEquals('stampsDay', 
                                $holiday2->getInternalName(),
                                'stampsDay and savingsDay test failed');
            break;
        default: 
            $this->fail('2005-10-30 must be stampsDay and savingsDay');
        }
    }

    /**
     * testGetHolidayProperties 
     * 
     * @access public
     * @return void
     */
    function testGetHolidayProperties()
    {
        $result = $this->driver->addTranslationFile(dirname(__FILE__) . 
                                          '/Date_Holidays_Driver_TestSuite.xml', 
                                                    'de_DE');
        if (Date_Holidays::isError($result)) {
            $this->fail(helper_get_error_message($result));
        }
        $this->assertTrue($result);

        $properties = $this->driver->getHolidayProperties('jesusCircumcision', 'en');
        $this->assertTrue(is_array($properties));

        $properties = $this->driver->getHolidayProperties('jesusCircumcision', 
                                                          'de_DE');
        $this->assertTrue(is_array($properties));
        $this->assertTrue(isset($properties['foo']));
        $this->assertEquals('bar', $properties['foo']);

        $properties = $this->driver->getHolidayProperties('epiphany', 'de_DE');
        $this->assertTrue(is_array($properties));
        $this->assertTrue(isset($properties['foo']));
        $this->assertEquals('bar', $properties['foo']);
        $this->assertTrue(isset($properties['test']));
        $this->assertEquals('Test-Value', $properties['test']);
    }

    /**
     * testGetHolidaysForDatespan 
     * 
     * @access public
     * @return void
     */
    function testGetHolidaysForDatespan()
    {
        $holidays = $this->driver->getHolidaysForDatespan('2005-05-01', 
                                                          '2005-05-08');
        $this->assertTrue(is_array($holidays));

        $internalNames = array();
        foreach ($holidays as $holiday) {
            $internalNames[] = $holiday->getInternalName();
            $this->assertInstanceOf('Date_Holidays_Holiday', $holiday);
        }

        $this->assertContains('laughingDay', $internalNames);
        $this->assertContains('laughingDay', $internalNames);
        $this->assertContains('requestSunday', $internalNames);
        $this->assertContains('europeDay', $internalNames);
        $this->assertContains('ascensionDay', $internalNames);
        $this->assertContains('fathersDay', $internalNames);
        $this->assertContains('mothersDay', $internalNames);
        $this->assertContains('endOfWWar2', $internalNames);


        //        $holidays   = $this->driver->getHolidays();
        //        $dates      = array();
        //        foreach ($holidays as $holiday) {
        //            $dates[$holiday->getInternalName()] = $holiday->getDate();
        //        }
        //        uasort($dates, array('Date', 'compare'));
        //        foreach ($dates as $k => $v) {
        //            echo $k . ': ' . $v->getDate() . "\n";
        //        }
        // --------------------------------------------------------------------
        // laughingDay: 2005-05-01 00:00:00
        // dayOfWork: 2005-05-01 00:00:00
        // requestSunday: 2005-05-01 00:00:00
        // europeDay: 2005-05-05 00:00:00
        // ascensionDay: 2005-05-05 00:00:00
        // fathersDay: 2005-05-05 00:00:00
        // mothersDay: 2005-05-08 00:00:00
        // endOfWWar2: 2005-05-08 00:00:00
    }

    /**
     * testGetHolidayTitle 
     * 
     * @access public
     * @return void
     */
    function testGetHolidayTitle()
    {
        $this->assertEquals('Ascension Day',
                $this->driver->getHolidayTitle('ascensionDay'));
        $this->assertEquals('Christi Himmelfahrt',
                $this->driver->getHolidayTitle('ascensionDay', 'de'));
    }

    /**
     * testGetHolidayTitles 
     * 
     * @access public
     * @return void
     */
    function testGetHolidayTitles()
    {
        $titles = $this->driver->getHolidayTitles();
        $this->assertTrue(is_array($titles));
        $this->assertContains('Ascension Day', $titles);

        $titles = $this->driver->getHolidayTitles(null, 'de');
        $this->assertTrue(is_array($titles));
        $this->assertContains('Christi Himmelfahrt', $titles);

        $restrict = array('ascensionDay', 'easter');
        $filter   = new Date_Holidays_Filter_Whitelist($restrict);
        $titles   = $this->driver->getHolidayTitles($filter);
        $this->assertEquals(2, count($titles));
        foreach ($titles as $internalName => $_tmp) {
            $this->assertContains($internalName, $restrict);
        }

        $filter = new Date_Holidays_Filter_Blacklist($restrict);
        $titles = $this->driver->getHolidayTitles($filter);
        foreach ($restrict as $internalName) {
            $this->assertNotContains($internalName, array_keys($titles));
        }
    }

    /**
     * testGetInternalHolidayNames 
     * 
     * @access public
     * @return void
     */
    function testGetInternalHolidayNames()
    {
        $this->assertTrue(is_array($this->driver->getInternalHolidayNames()));
    }

    /**
     * testGetYear 
     * 
     * @access public
     * @return void
     */
    function testGetYear()
    {
        $this->assertEquals(2005, $this->driver->getYear());
    }

    /**
     * testSetYear 
     * 
     * @access public
     * @return void
     */
    function testSetYear()
    {
        $driver = Date_Holidays::factory('Germany', 2005, 'de_DE');
        if (Date_Holidays::isError($driver)) {
            $this->fail(helper_get_error_message($driver));
        }

        $driver->setYear(1999);
        $this->assertEquals(1999, $driver->getYear());
    }

}

?>
