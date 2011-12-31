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

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

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
class Date_Holidays_Driver_Austria_TestSuite extends PHPUnit_Framework_TestCase
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
            'newYearsDay'        => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2006),
            'epiphany'           => array('day' => 6,
                                          'month' => 1,
                                          'year' => 2006),
            'easter'             => array('day' => 16,
                                          'month' => 4,
                                          'year' => 2006),
            'easterMonday'       => array('day' => 17,
                                          'month' => 4,
                                          'year' => 2006),
            'dayOfWork'          => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2006),
            'mariaAscension'     => array('day' => 15,
                                          'month' => 8,
                                          'year' => 2006),
            'nationalDayAustria' => array('day' => 26,
                                          'month' => 10,
                                          'year' => 2006),
            'allSaintsDay'       => array('day' => 1,
                                          'month' => 11,
                                          'year' => 2006),
            'christmasDay'            => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2006),
            'boxingDay'          => array('day' => 26,
                                          'month' => 12,
                                          'year' => 2006)
        );
        $this->testDates2007 = array(
            'newYearsDay'        => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2007),
            'easter'             => array('day' => 8,
                                          'month' => 4,
                                          'year' => 2007),
            'easterMonday'       => array('day' => 9,
                                          'month' => 4,
                                          'year' => 2007),
            'dayOfWork'          => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2007),
            'whitsun'            => array('day'=> 27,
                                          'month' => 5,
                                          'year' =>2007),
            'whitMonday'         => array('day'=> 28,
                                          'month' => 5,
                                          'year' =>2007),
            'mariaAscension'     => array('day' => 15,
                                          'month' => 8,
                                          'year' => 2007),
            'nationalDayAustria' => array('day' => 26,
                                          'month' => 10,
                                          'year' => 2007),
            'allSaintsDay'       => array('day' => 1,
                                          'month' => 11,
                                          'year' => 2007),
            'christmasDay'            => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2007),
            'boxingDay'          => array('day' => 26,
                                          'month' => 12,
                                          'year' => 2007)
        );
    }

    /**
     * test holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('Austria', 2007, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2007 as $name => $dateInfo) {
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

    /**
     * test holidays for 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {
        $drv = Date_Holidays::factory('Austria', 2006, 'en_EN');
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
