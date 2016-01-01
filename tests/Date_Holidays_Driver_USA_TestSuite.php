<?php
/**
 * Test class for running unit tests related to the driver for holidays in USA
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
 * Test class for running unit tests related to the driver for holidays in USA
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_USA_TestSuite extends PHPUnit_Framework_TestCase
{

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {

    }
    /**
     * tests for holidays in 2005
     *
     * @access public
     * @return void
     */
    function testHolidays2005()
    {

        $holidays = Date_Holidays::factory('USA', 2005, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');
        }

        // Test New Year Day -- it comes a day early this year
        $day = $holidays->getHolidayDate('newYearsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to make newYearsDay');
        }
        $this->assertEquals(12, $day->format('m'));
        $this->assertEquals(31, $day->format('d'));
        $this->assertEquals(2004, $day->format('Y'));

        // Test Martin Luther King Day
        $day = $holidays->getHolidayDate('mlkDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to that day');
        }

        $this->assertEquals(1, $day->format('m'));
        $this->assertEquals(17, $day->format('d'));

        // Test Prez Day Luther King Day
        $day = $holidays->getHolidayDate('presidentsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to that day');
        }
        $this->assertEquals(2, $day->format('m'));
        $this->assertEquals(21, $day->format('d'));

        // Test Memorial Day Luther King Day
        $day = $holidays->getHolidayDate('memorialDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create memorialDay day');
        }
        $this->assertEquals(5, $day->format('m'));
        $this->assertEquals(30, $day->format('d'));

        // Test 4th of July, It was on sunday this year
        $day = $holidays->getHolidayDate('independenceDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create independenceDay day');
        }
        $this->assertEquals(7, $day->format('m'));
        $this->assertEquals(4, $day->format('d'));

        // Test Labor Day, end of summer
        $day = $holidays->getHolidayDate('laborDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create laborDay day');
        }
        $this->assertEquals(9, $day->format('m'));
        $this->assertEquals(5, $day->format('d'));

        // Test Columbus Day, end of summer
        $day = $holidays->getHolidayDate('columbusDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create columbusDay day');
        }
        $this->assertEquals(10, $day->format('m'));
        $this->assertEquals(10, $day->format('d'));

        // Test Veteran's Day
        $day = $holidays->getHolidayDate('veteransDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create veteransDay day');
        }
        $this->assertEquals(11, $day->format('m'));
        $this->assertEquals(11, $day->format('d'));

        // Test Thanksgiving Day
        $day = $holidays->getHolidayDate('thanksgivingDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create thanksgivingDay day');
        }
        $this->assertEquals(11, $day->format('m'));
        $this->assertEquals(24, $day->format('d'));

        // Test Christmas Day
        $day = $holidays->getHolidayDate('christmasDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create christmasDay day');
        }
        $this->assertEquals(12, $day->format('m'));
        $this->assertEquals(26, $day->format('d'));
        $this->assertFalse($day->format('d') == 25);

    }

    /**
     * tests for holidays in 2004
     *
     * @access public
     * @return void
     */
    function testHolidays2004()
    {

        $holidays = Date_Holidays::factory('USA', 2004, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');
        }


        // Test Martin Luther King Day
        $day = $holidays->getHolidayDate('mlkDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to that day');
        }

        $this->assertTrue($day->format('m')==1 && $day->format('d')==19);
        $this->assertEquals(1, $day->format('m'));
        $this->assertEquals(19, $day->format('d'));

        // Test Prez Day Luther King Day
        $day = $holidays->getHolidayDate('presidentsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to that day');
        }
        $this->assertEquals(2, $day->format('m'));
        $this->assertEquals(16, $day->format('d'));

        // Test Memorial Day Luther King Day
        $day = $holidays->getHolidayDate('memorialDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create memorialDay day');
        }
        $this->assertEquals(5, $day->format('m'));
        $this->assertEquals(31, $day->format('d'));

        // Test 4th of July, It was on sunday this year
        $day = $holidays->getHolidayDate('independenceDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create independenceDay day');
        }
        $this->assertEquals(7, $day->format('m'));
        $this->assertEquals(5, $day->format('d'));

        // Test Labor Day, end of summer
        $day = $holidays->getHolidayDate('laborDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create laborDay day');
        }
        $this->assertEquals(9, $day->format('m'));
        $this->assertEquals(6, $day->format('d'));

        // Test Columbus Day, end of summer
        $day = $holidays->getHolidayDate('columbusDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create columbusDay day');
        }
        $this->assertEquals(10, $day->format('m'));
        $this->assertEquals(11, $day->format('d'));

        // Test Veteran's Day
        $day = $holidays->getHolidayDate('veteransDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create veteransDay day');
        }
        $this->assertEquals(11, $day->format('m'));
        $this->assertEquals(11, $day->format('d'));

        // Test Thanksgiving Day
        $day = $holidays->getHolidayDate('thanksgivingDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create thanksgivingDay day');
        }
        $this->assertEquals(11, $day->format('m'));
        $this->assertEquals(25, $day->format('d'));

        // Test Christmas Day
        $day = $holidays->getHolidayDate('christmasDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create christmasDay day');
        }
        $this->assertEquals(12, $day->format('m'));
        $this->assertEquals(24, $day->format('d'));

    }

    /**
     * tests for holidays in 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {

        $holidays = Date_Holidays::factory('USA', 2006, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');
        }

        // Test New Year Day -- it comes a day late this year
        $day = $holidays->getHolidayDate('newYearsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to make newYearsDay');
        }
        $this->assertEquals(1, $day->format('m'));
        $this->assertEquals(2, $day->format('d'));
        $this->assertEquals(2006, $day->format('Y'));

        // Test Martin Luther King Day
        $day = $holidays->getHolidayDate('mlkDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to that day');
        }

        $this->assertEquals(1, $day->format('m'));
        $this->assertEquals(16, $day->format('d'));

        // Test Prez Day Luther King Day
        $day = $holidays->getHolidayDate('presidentsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to that day');
        }
        $this->assertEquals(2, $day->format('m'));
        $this->assertEquals(20, $day->format('d'));

        // Test Memorial Day
        $day = $holidays->getHolidayDate('memorialDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create memorialDay day');
        }
        $this->assertEquals(5, $day->format('m'));
        $this->assertEquals(29, $day->format('d'));

        // Test 4th of July, It was on sunday this year
        $day = $holidays->getHolidayDate('independenceDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create independenceDay day');
        }
        $this->assertEquals(7, $day->format('m'));
        $this->assertEquals(4, $day->format('d'));

        // Test Labor Day, end of summer
        $day = $holidays->getHolidayDate('laborDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create laborDay day');
        }
        $this->assertEquals(9, $day->format('m'));
        $this->assertEquals(4, $day->format('d'));

        // Test Columbus Day, end of summer
        $day = $holidays->getHolidayDate('columbusDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create columbusDay day');
        }
        $this->assertEquals(10, $day->format('m'));
        $this->assertEquals(9, $day->format('d'));

        // Test Veteran's Day
        $day = $holidays->getHolidayDate('veteransDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create veteransDay day');
        }
        $this->assertEquals(11, $day->format('m'));
        $this->assertEquals(11, $day->format('d'));

        // Test Thanksgiving Day
        $day = $holidays->getHolidayDate('thanksgivingDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create thanksgivingDay day');
        }
        $this->assertEquals(11, $day->format('m'));
        $this->assertEquals(23, $day->format('d'));

        // Test Christmas Day
        $day = $holidays->getHolidayDate('christmasDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create christmasDay day');
        }
        $this->assertEquals(12, $day->format('m'));
        $this->assertEquals(25, $day->format('d'));
        $this->assertFalse($day->format('d') == 27);

    }
    /**
     * test holidays
     *
     * @access public
     * @return void
     */
    function testHolidays()
    {
        $holidays = Date_Holidays::factory('USA', 2004, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');

        }
        // this was labor day this year
        $this->assertTrue($holidays->isHoliday(new DateTime('2004-09-06')));
        // this was thanksgiving year
        $this->assertTrue($holidays->isHoliday(new DateTime('2004-11-25')));
        // Chrismas is on the 24th
        $this->assertFalse($holidays->isHoliday(new DateTime('2004-12-25')));
        // Chrismas is on the 24th
        $this->assertTrue($holidays->isHoliday(new DateTime('2004-12-24')));
    }

}

?>
