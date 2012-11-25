<?php
/**
 * Test class for running unit tests related to the driver for holidays in Turkey
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Serkan Cetintopcu <sc@st.net.tr>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Turkey_TestSuite.php,v 1.9 2008/08/23 09:12:59 kguest Exp $
 * @link     http://pear.php.net/package/Date_Holidays
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for holidays in Turkey
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Serkan Cetintopcu <sc@st.net.tr>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Turkey_TestSuite.php,v 1.9 2008/08/23 09:12:59 kguest Exp $
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Turkey_TestSuite extends PHPUnit_Framework_TestCase
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

        $holidays = Date_Holidays::factory('Turkey', 2005, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');
        }

        // Test New Year Day -- it comes a day early this year
        $day = $holidays->getHolidayDate('newYearsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to make newYearsDay');
        }
        $this->assertEquals(12, $day->getMonth());
        $this->assertEquals(31, $day->getDay());
        $this->assertEquals(2004, $day->getYear());

        // Test Ulusal Egemenlik ve Çocuk Bayramı
        $day = $holidays->getHolidayDate('egemenlikDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create egemenlikDay');
        }

        $this->assertEquals(4, $day->getMonth());
        $this->assertEquals(23, $day->getDay());

        // Test Atatürk'ü Anma Gençlik ve Spor Bayramı
        $day = $holidays->getHolidayDate('genclikDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create genclikDay day');
        }
        $this->assertEquals(5, $day->getMonth());
        $this->assertEquals(19, $day->getDay());

        // Test Zafer Bayramı
        $day = $holidays->getHolidayDate('zaferDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create zaferDay day');
        }
        $this->assertEquals(8, $day->getMonth());
        $this->assertEquals(30, $day->getDay());

        // Test Cumhuriyet Bayramı
        $day = $holidays->getHolidayDate('cumhuriyetDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create cumhuriyetDay day');
        }
        $this->assertEquals(10, $day->getMonth());
        $this->assertEquals(29, $day->getDay());

    }

    /**
     * tests for holidays in 2004
     *
     * @access public
     * @return void
     */
    function testHolidays2004()
    {

        $holidays = Date_Holidays::factory('Turkey', 2004, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');
        }

        // Test New Year Day -- it comes a day early this year
        $day = $holidays->getHolidayDate('newYearsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to make newYearsDay');
        }
        $this->assertEquals(12, $day->getMonth());
        $this->assertEquals(31, $day->getDay());
        $this->assertEquals(2004, $day->getYear());

        // Test Ulusal Egemenlik ve Çocuk Bayramı
        $day = $holidays->getHolidayDate('egemenlikDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create egemenlikDay day');
        }

        $this->assertEquals(4, $day->getMonth());
        $this->assertEquals(23, $day->getDay());

        // Test Atatürk'ü Anma Gençlik ve Spor Bayramı
        $day = $holidays->getHolidayDate('genclikDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create genclikDay day');
        }
        $this->assertEquals(5, $day->getMonth());
        $this->assertEquals(19, $day->getDay());

        // Test Zafer Bayramı
        $day = $holidays->getHolidayDate('zaferDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create zaferDay day');
        }
        $this->assertEquals(8, $day->getMonth());
        $this->assertEquals(30, $day->getDay());

        // Test Cumhuriyet Bayramı
        $day = $holidays->getHolidayDate('cumhuriyetDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create cumhuriyetDay day');
        }
        $this->assertEquals(10, $day->getMonth());
        $this->assertEquals(29, $day->getDay());

    }

    /**
     * tests for holidays in 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {

        $holidays = Date_Holidays::factory('Turkey', 2006, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');
        }

        // Test New Year Day -- it comes a day early this year
        $day = $holidays->getHolidayDate('newYearsDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to make newYearsDay');
        }
        $this->assertEquals(12, $day->getMonth());
        $this->assertEquals(31, $day->getDay());
        $this->assertEquals(2004, $day->getYear());

        // Test Ulusal Egemenlik ve Çocuk Bayramı
        $day = $holidays->getHolidayDate('egemenlikDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create egemenlikDay day');
        }

        $this->assertEquals(4, $day->getMonth());
        $this->assertEquals(23, $day->getDay());

        // Test Atatürk'ü Anma Gençlik ve Spor Bayramı
        $day = $holidays->getHolidayDate('genclikDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create genclikDay day');
        }
        $this->assertEquals(5, $day->getMonth());
        $this->assertEquals(19, $day->getDay());

        // Test Zafer Bayramı
        $day = $holidays->getHolidayDate('zaferDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create zaferDay day');
        }
        $this->assertEquals(8, $day->getMonth());
        $this->assertEquals(30, $day->getDay());

        // Test Cumhuriyet Bayramı
        $day = $holidays->getHolidayDate('cumhuriyetDay');
        if (Date_Holidays::isError($day)) {
            die('Factory was unable to create cumhuriyetDay day');
        }
        $this->assertEquals(10, $day->getMonth());
        $this->assertEquals(29, $day->getDay());

    }
    /**
     * test holidays
     *
     * @access public
     * @return void
     */
    function testHolidays()
    {
        $holidays = Date_Holidays::factory('Turkey', 2004, 'en_EN');
        if (Date_Holidays::isError($holidays)) {
            die('Factory was unable to produce driver-object');

        }
        // this was labor day this year
        $this->assertTrue($holidays->isHoliday(new Date('2004-09-06')));
        // this was thanksgiving year
        $this->assertTrue($holidays->isHoliday(new Date('2004-11-25')));
        // Chrismas is on the 24th
        $this->assertFalse($holidays->isHoliday(new Date('2004-12-25')));
        // Chrismas is on the 24th
        $this->assertTrue($holidays->isHoliday(new Date('2004-12-24')));
    }

}

?>
