<?php
/**
 * Test class for running unit tests related to the driver for holidays in France
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_France_TestSuite.php 310677 2011-04-30 22:27:19Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */

/**
 * Set up the environment
 */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in France
 *
 * @uses     PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_France_TestSuite.php 310677 2011-04-30 22:27:19Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_France_TestSuite extends PHPUnit_Framework_TestCase
{
    var $testDates2005 = array(
        'newYearsDay'  => array('day' => 1,  'month' => 1,  'year' => 2005),
        'easterMonday' => array('day' => 28, 'month' => 3,  'year' => 2005),
        'ascensionDay' => array('day' => 5,  'month' => 5,  'year' => 2005),
        'christmasDay' => array('day' => 25, 'month' => 12, 'year' => 2005),
        'dayOfWork'    => array('day' => 1,  'month' => 5,  'year' => 2005),
        'VEDay'        => array('day' => 8,  'month' => 5,  'year' => 2005),
        'bastilleDay'  => array('day' => 14, 'month' => 7,  'year' => 2005),
        'armisticeDay' => array('day' => 11, 'month' => 11, 'year' => 2005),
    );

    var $testDates2006 = array(
        'newYearsDay'  => array('day' => 1,  'month' => 1,  'year' => 2006),
        'easterMonday' => array('day' => 17, 'month' => 4,  'year' => 2006),
        'ascensionDay' => array('day' => 25, 'month' => 5,  'year' => 2006),
        'christmasDay' => array('day' => 25, 'month' => 12, 'year' => 2006),
        'dayOfWork'    => array('day' => 1,  'month' => 5,  'year' => 2006),
        'VEDay'        => array('day' => 8,  'month' => 5,  'year' => 2006),
        'bastilleDay'  => array('day' => 14, 'month' => 7,  'year' => 2006),
        'armisticeDay' => array('day' => 11, 'month' => 11, 'year' => 2006),
        );

    /**
     * Setup
     *
     * @access public
     * @return void
     */
    function setUp()
    {
    }

    /**
     * Test Holidays for 2005
     *
     * @access public
     * @return void
     */
    function testHolidays2005()
    {
        $drv = Date_Holidays::factory('France', 2005);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2005 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                var_dump(158);
                $this->fail(helper_get_error_message($day));
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * Test Holidays for 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {
        $drv = Date_Holidays::factory('France', 2006);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
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
