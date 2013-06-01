<?php
/**
 * Test class for running unit tests related to the driver for holidays in
 * England and Wales
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
 * Test class for running unit tests related to the driver for holidays in
 * England and Wales
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_EnglandWales_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2009;
    var $testDates2010;

    /**
     * set up
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2009 = array(
                'newYearsDay'  => array('day' => 1,
                    'month' => 1,
                    'year' => 2009),
                'goodFriday'   => array('day' => 10,
                    'month' => 4,
                    'year' => 2009),
                'easterMonday' => array('day' => 13,
                    'month' => 4,
                    'year' => 2009),
                'mayDay'       => array('day' => 4,
                    'month' => 5,
                    'year' => 2009),
                'springBank'   => array('day' => 25,
                    'month' => 5,
                    'year' => 2009),
                'summerBank'   => array('day' => 31,
                    'month' => 8,
                    'year' => 2009),
                'christmasDay'      => array('day' => 25,
                    'month' => 12,
                    'year' => 2009),
                'boxingDay'    => array('day' => 28,
                        'month' => 12,
                        'year' => 2009)
                    );

        $this->testDates2010 = array(
                'newYearsDay'  => array('day' => 1,
                    'month' => 1,
                    'year' => 2010),
                'goodFriday'   => array('day' => 2,
                    'month' => 4,
                    'year' => 2010),
                'easterMonday' => array('day' => 5,
                    'month' => 4,
                    'year' => 2010),
                'mayDay'       => array('day' => 3,
                    'month' => 5,
                    'year' => 2010),
                'springBank'   => array('day' => 31,
                    'month' => 5,
                    'year' => 2010),
                'summerBank'   => array('day' => 30,
                    'month' => 8,
                    'year' => 2010),
                'christmasDay'      => array('day' => 28,
                    'month' => 12,
                    'year' => 2010),
                'boxingDay'    => array('day' => 27,
                        'month' => 12,
                        'year' => 2010)
                    );
    }

    /**
     * test Holidays for 2009
     *
     * @access public
     * @return void
     */
    function testHolidays2009()
    {
        $drv = Date_Holidays::factory('EnglandWales', 2009);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        foreach ($this->testDates2009 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
            }
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2010
     *
     * @access public
     * @return void
     */
    function testHolidays2010()
    {
        $drv = Date_Holidays::factory('EnglandWales', 2010);
        $this->assertFalse(Date_Holidays::isError($drv));
        foreach ($this->testDates2010 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    public function testQueensJubilee()
    {
        /*
         * Spring Bank Holiday moved to 4th of June
         * Additional Bank Holiday on 5th June for Queen's Jubilee.
         * Source:
         * http://direct.gov.uk/en/Employment/Employees/Timeoffandholidays/DG_073741
         */

        $d12 = Date_Holidays::factory('EnglandWales', 2012);
        $day = $d12->getHoliday('queensJubilee');
        $this->assertEquals(false, Date_Holidays::isError($day));
        $date = $day->getDate();
        $this->assertEquals($date->getYear(), 2012);
        $this->assertEquals($date->getMonth(), 6);
        $this->assertEquals($date->getDay(), 5);

        $sbd = $d12->getHoliday('springBank');
        $sdate = $sbd->getDate();
        $this->assertEquals($sdate->getYear(), 2012);
        $this->assertEquals($sdate->getMonth(), 6);
        $this->assertEquals($sdate->getDay(), 4);

        $d11 = Date_Holidays::factory('EnglandWales', 2011);
        $day = $d11->getHoliday('queensJubilee');
        $this->assertEquals(true, Date_Holidays::isError($day));
        $this->assertEquals(
            'Invalid internal name: queensJubilee',
            $day->getMessage()
        );
        $sbd = $d11->getHoliday('springBank');
        if (Date_Holidays::isError($sbd)) {
            $this->fail(helper_get_error_message($sbd));
        }
        $sdate = $sbd->getDate();
        $this->assertEquals($sdate->getYear(), 2011);
        $this->assertEquals($sdate->getMonth(), 5);
        $this->assertEquals($sdate->getDay(), 30);
    }
}
?>
