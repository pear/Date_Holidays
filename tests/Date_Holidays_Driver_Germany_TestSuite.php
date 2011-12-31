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
class Date_Holidays_Driver_Germany_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2005;
    var $testDates2006;

    /**
     * Setup
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2005 = array(
                'newYearsDay'               => array('day' => 1,
                                                     'month' => 1,
                                                     'year' => 2005),
                'valentinesDay'             => array('day' => 14,
                                                     'month' => 2,
                                                     'year' => 2005),
                'fasnet'                    => array('day' => 8,
                                                     'month' => 2,
                                                     'year' => 2005),
                'roseMonday'                => array('day' => 7,
                                                     'month' => 2,
                                                     'year' => 2005),
                'womensDay'                 => array('day' => 8,
                                                     'month' => 3,
                                                     'year' => 2005),
                'april1st'                  => array('day' => 1,
                                                     'month' => 4,
                                                     'year' => 2005),
                'girlsDay'                  => array('day' => 28,
                                                     'month' => 4,
                                                     'year' => 2005),
                'earthDay'                  => array('day' => 22,
                                                     'month' => 4,
                                                     'year' => 2005),
                'beersDay'                  => array('day' => 23,
                                                     'month' => 4,
                                                     'year' => 2005),
                'walpurgisNight'            => array('day' => 30,
                                                     'month' => 4,
                                                     'year' => 2005),
                'dayOfWork'                 => array('day' => 1,
                                                     'month' => 5,
                                                     'year' => 2005),
                'laughingDay'               => array('day' => 1,
                                                     'month' => 5,
                                                     'year' => 2005),
                'europeDay'                 => array('day' => 5,
                                                     'month' => 5,
                                                     'year' => 2005),
                'mothersDay'                => array('day' => 8,
                                                     'month' => 5,
                                                     'year' => 2005),
                'endOfWWar2'                => array('day' => 8,
                                                     'month' => 5,
                                                     'year' => 2005),
                'fathersDay'                => array('day' => 5,
                                                     'month' => 5,
                                                     'year' => 2005),
                'aiDay'                     => array('day' => 28,
                                                     'month' => 5,
                                                     'year' => 2005),
                'intChildrenDay'            => array('day' => 1,
                                                     'month' => 6,
                                                     'year' => 2005),
                'organDonationDay'          => array('day' => 4,
                                                     'month' => 6,
                                                     'year' => 2005),
                'dormouseDay'               => array('day' => 27,
                                                     'month' => 6,
                                                     'year' => 2005),
                'christopherStreetDay'      => array('day' => 27,
                                                     'month' => 6,
                                                     'year' => 2005),
                'hiroshimaCommemorationDay' => array('day' => 6,
                                                     'month' => 8,
                                                     'year' => 2005),
                'augsburgPeaceCelebration'  => array('day' => 8,
                                                     'month' => 8,
                                                     'year' => 2005),
                'leftHandedDay'             => array('day' => 13,
                                                     'month' => 8,
                                                     'year' => 2005),
                'antiWarDay'                => array('day' => 1,
                                                     'month' => 9,
                                                     'year' => 2005),
                'germanLanguageDay'         => array('day' => 10,
                                                     'month' => 9,
                                                     'year' => 2005),
                'diabetesDay'               => array('day' => 14,
                                                     'month' => 11,
                                                     'year' => 2005),
                'germanUnificationDay'      => array('day' => 3,
                                                     'month' => 10,
                                                     'year' => 2005),
                'librariesDay'              => array('day' => 24,
                                                     'month' => 10,
                                                     'year' => 2005),
                'savingsDay'                => array('day' => 30,
                                                     'month' => 10,
                                                     'year' => 2005),
                'halloween'                 => array('day' => 31,
                                                     'month' => 10,
                                                     'year' => 2005),
                'stampsDay'                 => array('day' => 30,
                                                     'month' => 10,
                                                     'year' => 2005),
                'mensDay'                   => array('day' => 3,
                                                     'month' => 11,
                                                     'year' => 2005),
                'wallOfBerlin'              => array('day' => 9,
                                                     'month' => 11,
                                                     'year' => 2005),
                'carnivalBeginning'         => array('day' => 11,
                                                     'month' => 11,
                                                     'year' => 2005),
                'dayOfMourning'             => array('day' => 13,
                                                     'month' => 11,
                                                     'year' => 2005)
                    );

        $this->testDates2006 = array(
                'girlsDay'             => array('day' => 27,
                                                'month' => 4,
                                                'year' => 2006),
                'christopherStreetDay' => array('day' => 27,
                                                'month' => 6,
                                                'year' => 2006)
                );
    }

    /**
     * test Holidays for 2005
     *
     * @access public
     * @return void
     */
    function testHolidays2005()
    {
        $drv = Date_Holidays::factory('Germany', 2005, 'en_EN');
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
        $drv = Date_Holidays::factory('Germany', 2006, 'en_EN');
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

    /**
     * test Holidays for 2005 stamps and savings day
     *
     * @access public
     * @return void
     */
    function testHolidays2005stampsAndSavingsDay()
    {
        $drv = Date_Holidays::factory('Germany', 2005);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        $holidays = $drv->getHolidayForDate('2005-10-30', null, true);
        $this->assertEquals('savingsDay',
                            $holidays[0]->getInternalName(),
                            'should be savingsDay');
        $this->assertEquals('stampsDay',
                            $holidays[1]->getInternalName(),
                            'should be stampsDay');
    }

}
?>
