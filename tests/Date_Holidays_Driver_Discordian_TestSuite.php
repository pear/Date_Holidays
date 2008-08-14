<?php
/**
 * Test class for running unit tests related to the driver for holidays in Discordian
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

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for holidays in Discordian
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Discordian_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2006;
    var $testDates2007;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2006 = array(
                'stTibsDay' => array ('day' => 29,
                    'month' => 2,
                    'year' => 2006),
                'mungday' => array ('day' => 5,
                    'month' => 1,
                    'year' => 2006),
                'mojoday' => array ('day' => 19,
                    'month' => 3,
                    'year' => 2006),
                'syaday' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2006),
                'zaraday' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2006),
                'maladay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2006),
                'chaoflux' => array ('day' => 19,
                    'month' => 2,
                    'year' => 2006),
                'discoflux' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2006),
                'confuflux' => array ('day' => 15,
                    'month' => 7,
                    'year' => 2006),
                'bureflux' => array ('day' => 26,
                    'month' => 9,
                    'year' => 2006),
                'afflux' => array ('day' => 8,
                    'month' => 12,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'stTibsDay' => array ('day' => 29,
                    'month' => 2,
                    'year' => 2007),
                'mungday' => array ('day' => 5,
                    'month' => 1,
                    'year' => 2007),
                'mojoday' => array ('day' => 19,
                    'month' => 3,
                    'year' => 2007),
                'syaday' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2007),
                'zaraday' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2007),
                'maladay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2007),
                'chaoflux' => array ('day' => 19,
                    'month' => 2,
                    'year' => 2007),
                'discoflux' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2007),
                'confuflux' => array ('day' => 15,
                    'month' => 7,
                    'year' => 2007),
                'bureflux' => array ('day' => 26,
                    'month' => 9,
                    'year' => 2007),
                'afflux' => array ('day' => 8,
                    'month' => 12,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'stTibsDay' => array ('day' => 29,
                    'month' => 2,
                    'year' => 2008),
                'mungday' => array ('day' => 5,
                    'month' => 1,
                    'year' => 2008),
                'mojoday' => array ('day' => 19,
                    'month' => 3,
                    'year' => 2008),
                'syaday' => array ('day' => 31,
                    'month' => 5,
                    'year' => 2008),
                'zaraday' => array ('day' => 12,
                    'month' => 8,
                    'year' => 2008),
                'maladay' => array ('day' => 24,
                    'month' => 10,
                    'year' => 2008),
                'chaoflux' => array ('day' => 19,
                    'month' => 2,
                    'year' => 2008),
                'discoflux' => array ('day' => 3,
                    'month' => 5,
                    'year' => 2008),
                'confuflux' => array ('day' => 15,
                    'month' => 7,
                    'year' => 2008),
                'bureflux' => array ('day' => 26,
                    'month' => 9,
                    'year' => 2008),
                'afflux' => array ('day' => 8,
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
        $drv = Date_Holidays::factory('Discordian', 2008, 'en_EN');
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
        $drv = Date_Holidays::factory('Discordian', 2007, 'en_EN');
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
        $drv = Date_Holidays::factory('Discordian', 2006, 'en_EN');
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
