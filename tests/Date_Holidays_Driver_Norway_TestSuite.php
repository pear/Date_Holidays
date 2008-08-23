<?php
/**
 * Test class for running unit tests related to the driver for holidays in Norway
 *
 * PHP Version 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for holidays in Norway
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Norway_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2006;
    var $testDates2007;
    var $testDates2008;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2006 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2006),
                'easter' => array ('day' => 16,
                    'month' => 4,
                    'year' => 2006),
                'goodFriday' => array ('day' => 14,
                    'month' => 4,
                    'year' => 2006),
                'easterMonday' => array ('day' => 17,
                    'month' => 4,
                    'year' => 2006),
                'mayDay' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2006),
                'pentecost' => array ('day' => 4,
                    'month' => 6,
                    'year' => 2006),
                'ascensionDay' => array ('day' => 25,
                    'month' => 5,
                    'year' => 2006),
                'norwayNationalDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2006),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2006),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2006),
                'boxingDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2006),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2007),
                'easter' => array ('day' => 8,
                    'month' => 4,
                    'year' => 2007),
                'goodFriday' => array ('day' => 6,
                    'month' => 4,
                    'year' => 2007),
                'easterMonday' => array ('day' => 9,
                    'month' => 4,
                    'year' => 2007),
                'mayDay' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2007),
                'pentecost' => array ('day' => 27,
                    'month' => 5,
                    'year' => 2007),
                'ascensionDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2007),
                'norwayNationalDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2007),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2007),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2007),
                'boxingDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2007),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2008),
                'easter' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2008),
                'goodFriday' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2008),
                'easterMonday' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2008),
                'mayDay' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2008),
                'ascensionDay' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2008),
                'pentecost' => array ('day' => 11,
                    'month' => 5,
                    'year' => 2008),
                'norwayNationalDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2008),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2008),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2008),
                'boxingDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2008),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2008),
                );

    }


    /**
     * test Holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('Norway', 2008, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv), "Driver construction");

        foreach ($this->testDates2008 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('Norway', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv), "Driver construction");

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {
        $drv = Date_Holidays::factory('Norway', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2006 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

}

?>
