<?php
/**
 * Test class for running unit tests related to the driver for holidays in Slovenia
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
 * Test class for running unit tests related to the driver for holidays in Slovenia
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Slovenia_TestSuite extends PHPUnit_Framework_TestCase
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
                'novoleto1' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2006),
                'novoleto2' => array ('day' => 2,
                    'month' => 1,
                    'year' => 2006),
                'preseren' => array ('day' => 8,
                    'month' => 2,
                    'year' => 2006),
                'okupator' => array ('day' => 27,
                    'month' => 4,
                    'year' => 2006),
                'delo1' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2006),
                'delo2' => array ('day' => 2,
                    'month' => 5,
                    'year' => 2006),
                'drzavnost' => array ('day' => 25,
                    'month' => 6,
                    'year' => 2006),
                'vnoc' => array ('day' => 16,
                    'month' => 4,
                    'year' => 2006),
                'vnocpon' => array ('day' => 17,
                    'month' => 4,
                    'year' => 2006),
                'marija' => array ('day' => 15,
                    'month' => 9,
                    'year' => 2006),
                'prekmurski' => array ('day' => 17,
                    'month' => 8,
                    'year' => 2006),
                'marija' => array ('day' => 15,
                    'month' => 9,
                    'year' => 2006),
                'reformacija' => array ('day' => 31,
                    'month' => 10,
                    'year' => 2006),
                'danmrtvih' => array ('day' => 23,
                    'month' => 11,
                    'year' => 2006),
                'danmrtvih' => array ('day' => 23,
                    'month' => 11,
                    'year' => 2006),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2006),
                'samostijnosti' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'novoleto1' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2007),
                'novoleto2' => array ('day' => 2,
                    'month' => 1,
                    'year' => 2007),
                'preseren' => array ('day' => 8,
                    'month' => 2,
                    'year' => 2007),
                'okupator' => array ('day' => 27,
                    'month' => 4,
                    'year' => 2007),
                'delo1' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2007),
                'delo2' => array ('day' => 2,
                    'month' => 5,
                    'year' => 2007),
                'drzavnost' => array ('day' => 25,
                    'month' => 6,
                    'year' => 2007),
                'vnoc' => array ('day' => 8,
                    'month' => 4,
                    'year' => 2007),
                'vnocpon' => array ('day' => 9,
                    'month' => 4,
                    'year' => 2007),
                'marija' => array ('day' => 15,
                    'month' => 9,
                    'year' => 2007),
                'prekmurski' => array ('day' => 17,
                    'month' => 8,
                    'year' => 2007),
                'marija' => array ('day' => 15,
                    'month' => 9,
                    'year' => 2007),
                'reformacija' => array ('day' => 31,
                    'month' => 10,
                    'year' => 2007),
                'danmrtvih' => array ('day' => 23,
                    'month' => 11,
                    'year' => 2007),
                'danmrtvih' => array ('day' => 23,
                    'month' => 11,
                    'year' => 2007),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2007),
                'samostijnosti' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'novoleto1' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2008),
                'novoleto2' => array ('day' => 2,
                    'month' => 1,
                    'year' => 2008),
                'preseren' => array ('day' => 8,
                    'month' => 2,
                    'year' => 2008),
                'okupator' => array ('day' => 27,
                    'month' => 4,
                    'year' => 2008),
                'delo1' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2008),
                'delo2' => array ('day' => 2,
                    'month' => 5,
                    'year' => 2008),
                'drzavnost' => array ('day' => 25,
                    'month' => 6,
                    'year' => 2008),
                'vnoc' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2008),
                'vnocpon' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2008),
                'marija' => array ('day' => 15,
                    'month' => 9,
                    'year' => 2008),
                'prekmurski' => array ('day' => 17,
                    'month' => 8,
                    'year' => 2008),
                'marija' => array ('day' => 15,
                    'month' => 9,
                    'year' => 2008),
                'reformacija' => array ('day' => 31,
                    'month' => 10,
                    'year' => 2008),
                'danmrtvih' => array ('day' => 23,
                    'month' => 11,
                    'year' => 2008),
                'danmrtvih' => array ('day' => 23,
                    'month' => 11,
                    'year' => 2008),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2008),
                'samostijnosti' => array ('day' => 26,
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
        $drv = Date_Holidays::factory('Slovenia', 2008, 'en_EN');
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
        $drv = Date_Holidays::factory('Slovenia', 2007, 'en_EN');
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
        $drv = Date_Holidays::factory('Slovenia', 2006, 'en_EN');
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
