<?php
/**
 * Test class for running unit tests related to the driver for holidays in Spain
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Jesús Espino <jespinog@gmail.com>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Spain_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in Spain
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Jesús Espino <jespinog@gmail.com>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Spain_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Spain_TestSuite extends PHPUnit_Framework_TestCase
{
    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {

        $this->testDates2009 = array(
            'newYearsDay'        => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2009),
            'epiphany'           => array('day' => 06,
                                          'month' => 1,
                                          'year' => 2009),
            'valentinesDay'           => array('day' => 14,
                                          'month' => 2,
                                          'year' => 2009),
            'carnival'           => array('day' => 24,
                                          'month' => 2,
                                          'year' => 2009),
            'ashWednesday'       => array('day' => 25,
                                          'month' => 2,
                                          'year' => 2009),
            'palmSunday'         => array('day' => 5,
                                          'month' => 4,
                                          'year' => 2009),
            'maundyThursday'     => array('day' => 9,
                                          'month' => 4,
                                          'year' => 2009),
            'goodFriday'         => array('day' => 10,
                                          'month' => 4,
                                          'year' => 2009),
            'saintSaturday'         => array('day' => 11,
                                          'month' => 4,
                                          'year' => 2009),
            'easter'             => array('day' => 12,
                                          'month' => 4,
                                          'year' => 2009),
            'fathersDay'         => array('day'=> 19,
                                          'month' => 3,
                                          'year' => 2009),
            'mothersDay'         => array('day'=> 3,
                                          'month' => 5,
                                          'year' => 2009),
            'dayOfWork'          => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2009),
            'corpusChristi'      => array('day'=> 11,
                                          'month' => 6,
                                          'year' => 2009),
            'apostleSantiago'     => array('day' => 25,
                                          'month' => 7,
                                          'year' => 2009),
            'mariaAscension'     => array('day' => 15,
                                          'month' => 8,
                                          'year' => 2009),
            'hispanityDay'       => array('day' => 12,
                                          'month' => 10,
                                          'year' => 2009),
            'allSaintsDay'       => array('day' => 1,
                                          'month' => 11,
                                          'year' => 2009),
            'constitutionDay'    => array('day' => 6,
                                          'month' => 12,
                                          'year' => 2009),
            'immaculateConceptionDay' => array('day' => 8,
                                          'month' => 12,
                                          'year' => 2009),
            'christmasEve'       => array('day' => 24,
                                          'month' => 12,
                                          'year' => 2009),
            'christmasDay'       => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2009),
            'newYearsEve'        => array('day' => 31,
                                          'month' => 12,
                                          'year' => 2009),
        );
    }

    /**
     * test holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2009()
    {
        $drv = Date_Holidays::factory('Spain', 2009, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2009 as $name => $dateInfo) {
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
