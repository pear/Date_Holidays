<?php
                                             /**
 * Test class for running unit tests related to the driver for holidays in Austria
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
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Iceland_TestSuite extends PHPUnit_Framework_TestCase
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
            'newYearsDay'           => array('day' => 1,
                                             'month' => 1,
                                             'year' => 2006),
            'womansDay'             => array('day' => 19,
                                             'month' => 2,
                                             'year' => 2006),
            'easterMonday'          => array('day' => 17,
                                             'month' => 4,
                                             'year' => 2006),
            'independenceDay'       => array('day' => 1,
                                             'month' => 12,
                                             'year' => 2006),
            'xmasDay'               => array('day' => 25,
                                             'month' => 12,
                                             'year' => 2006),
            'boxingDay'             => array('day' => 26,
                                             'month' => 12,
                                             'year' => 2006)
        );
        $this->testDates2007 = array(
            'newYearsDay'           => array('day' => 1,
                                             'month' => 1,
                                             'year' => 2007),
            'easterMonday'          => array('day' => 9,
                                             'month' => 4,
                                             'year' => 2007),
            'xmasDay'               => array('day' => 25,
                                             'month' => 12,
                                             'year' => 2007),
            'womansDay'             => array('day' => 18,
                                             'month' => 2,
                                             'year' => 2007),
            'independenceDay'       => array('day' => 1,
                                             'month' => 12,
                                             'year' => 2006),
            'boxingDay'             => array('day' => 26,
                                             'month' => 12,
                                             'year' => 2007)
        );
    }

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('Iceland', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
            }
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
        $drv = Date_Holidays::factory('Iceland', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }

        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

}

?>
