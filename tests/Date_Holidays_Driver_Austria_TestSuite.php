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

    var $testDates2005;
    var $testDates2006;
    var $testDates2007;
    var $testDates2008;
    var $testDates2011;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2005 = array(
          'firstAdvent'  => array('day' => 27, 'month' => 11, 'year' => 2005),
          'secondAdvent' => array('day' => 4, 'month' => 12, 'year' => 2005),
          'thirdAdvent'  => array('day' => 11, 'month' => 12, 'year' => 2005),
          'fourthAdvent' => array('day' => 18, 'month' => 12, 'year' => 2005),
        );
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
            'firstAdvent'        => array('day' => 3,
                                          'month' => 12,
                                          'year' => 2006),
            'secondAdvent'       => array('day' => 10,
                                          'month' => 12,
                                          'year' => 2006),
            'thirdAdvent'        => array('day' => 17,
                                          'month' => 12,
                                          'year' => 2006),
            'fourthAdvent'       => array('day' => 24,
                                          'month' => 12,
                                          'year' => 2006),
            'christmasDay'       => array('day' => 25,
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
            'christmasDay'       => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2007),
            'boxingDay'          => array('day' => 26,
                                          'month' => 12,
                                          'year' => 2007)
        );
        $this->testDates2008 = array(
          'fourthAdvent' => array('day' => 21, 'month' => 12, 'year' => 2008),
          'firstAdvent'  => array('day' => 30, 'month' => 11, 'year' => 2008),
          'secondAdvent' => array('day' => 7,  'month' => 12, 'year' => 2008),
          'thirdAdvent'  => array('day' => 14, 'month' => 12, 'year' => 2008),
        );
        $this->testDates2011 = array(
            'newYearsDay'        => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2011),
            'easter'             => array('day' => 24,
                                          'month' => 4,
                                          'year' => 2011),
            'easterMonday'       => array('day' => 25,
                                          'month' => 4,
                                          'year' => 2011),
            'dayOfWork'          => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2011),
            'whitsun'            => array('day'=> 12,
                                          'month' => 6,
                                          'year' =>2011),
            'whitMonday'         => array('day'=> 13,
                                          'month' => 6,
                                          'year' =>2011),
            'mariaAscension'     => array('day' => 15,
                                          'month' => 8,
                                          'year' => 2011),
            'nationalDayAustria' => array('day' => 26,
                                          'month' => 10,
                                          'year' => 2011),
            'allSaintsDay'       => array('day' => 1,
                                          'month' => 11,
                                          'year' => 2011),
            // http://christianity.about.com/od/christmas/qt/adventdates2011.htm
            'firstAdvent'        => array('day' => 27,
                                          'month' => 11,
                                          'year' => 2011),
            'secondAdvent'       => array('day' => 4,
                                          'month' => 12,
                                          'year' => 2011),
            'thirdAdvent'        => array('day' => 11,
                                          'month' => 12,
                                          'year' => 2011),
            'fourthAdvent'       => array('day' => 18,
                                          'month' => 12,
                                          'year' => 2011),
            'christmasDay'       => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2011),
            'boxingDay'          => array('day' => 26,
                                          'month' => 12,
                                          'year' => 2011)
        );
    }

    /**
     * test holidays for 2005
     *
     * @access public
     * @return void
     */
    function testHolidays2005()
    {
        $drv = Date_Holidays::factory('Austria', 2005, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        
       

        foreach ($this->testDates2005 as $name => $dateInfo) {
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
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
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
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

    /**
     * test holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('Austria', 2008, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2008 as $name => $dateInfo) {
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

    /**
     * test holidays for 2011
     *
     * @access public
     * @return void
     */
    function testHolidays2011()
    {
        $drv = Date_Holidays::factory('Austria', 2011, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2011 as $name => $dateInfo) {
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
