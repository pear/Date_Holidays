<?php
/**
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
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
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Romania_TestSuite extends PHPUnit_Framework_TestCase
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
            'newYearsDay'       => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2006),
            'easter'            => array('day' => 23,
                                          'month' => 4,
                                          'year' => 2006),
            'easterMonday'            => array('day' => 24,
                                          'month' => 4,
                                          'year' => 2006),
            'labourDay'        => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2006),
            'nationalDay'   => array('day' => 1,
                                          'month' => 12,
                                          'year' => 2006),
            'christmasEve'      => array('day' => 24,
                                          'month' => 12,
                                          'year' => 2006),
            'christmasDay'      => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2006)
        );
        $this->testDates2007 = array(
            'newYearsDay'       => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2007),
            'easter'            => array('day' => 8,
                                          'month' => 4,
                                          'year' => 2007),
            'easterMonday'            => array('day' => 9,
                                          'month' => 4,
                                          'year' => 2007),
            'labourDay'        => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2007),
            'nationalDay'   => array('day' => 1,
                                          'month' => 12,
                                          'year' => 2007),
            'christmasEve'      => array('day' => 24,
                                          'month' => 12,
                                          'year' => 2007),
            'christmasDay'      => array('day' => 25,
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
        $drv = Date_Holidays::factory('Romania', 2007);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
            }
            $this->assertEquals($name, $day->getInternalName(), $name);
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
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
        $drv = Date_Holidays::factory('Romania', 2006);
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
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

}

?>
