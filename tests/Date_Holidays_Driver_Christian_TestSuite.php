<?php
/**
 * Test class for running unit tests related to Christian holidays.
 *
 * PHP Versions 4 and 5
 *
 * @uses PHPUnit_Framework_TestCase
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
 * Test class for running unit tests related to Christian holidays.
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Christian_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2005;
    var $testDates2006;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2005 = array(
          'jesusCircumcision'   => array('day' => 1, 'month' => 1, 'year' => 2005),
          'epiphany'            => array('day' => 6, 'month' => 1, 'year' => 2005),
          'mariaCleaning'       => array('day' => 2, 'month' => 2, 'year' => 2005),
          'josefsDay'           => array('day' => 19, 'month' => 3, 'year' => 2005),
          'mariaAnnouncement'   => array('day' => 25, 'month' => 3, 'year' => 2005),
          'easter'              => array('day' => 27, 'month' => 3, 'year' => 2005),
          'palmSunday'          => array('day' => 20, 'month' => 3, 'year' => 2005),
          'passionSunday'       => array('day' => 13, 'month' => 3, 'year' => 2005),
          'painfulFriday'       => array('day' => 18, 'month' => 3, 'year' => 2005),
          'whiteSunday'         => array('day' => 3, 'month' => 4, 'year' => 2005),
          'ashWednesday'        => array('day' => 9, 'month' => 2, 'year' => 2005),
          'goodFriday'          => array('day' => 25, 'month' => 3, 'year' => 2005),
          'greenThursday'       => array('day' => 24, 'month' => 3, 'year' => 2005),
          'easterMonday'        => array('day' => 28, 'month' => 3, 'year' => 2005),
          'whitsun'             => array('day' => 15, 'month' => 5, 'year' => 2005),
          'requestSunday'       => array('day' => 1, 'month' => 5, 'year' => 2005),
          'ascensionDay'        => array('day' => 5, 'month' => 5, 'year' => 2005),
          'whitMonday'          => array('day' => 16, 'month' => 5, 'year' => 2005),
          'mariaHaunting'       => array('day' => 31, 'month' => 5, 'year' => 2005),
          'trinitatis'          => array('day' => 22, 'month' => 5, 'year' => 2005),
          'corpusChristi'       => array('day' => 26, 'month' => 5, 'year' => 2005),
          'heartJesus'          => array('day' => 3, 'month' => 6, 'year' => 2005),
          'johannisCelebration' => array('day' => 24, 'month' => 6, 'year' => 2005),
          'petrusAndPaulus'     => array('day' => 29, 'month' => 6, 'year' => 2005),
          'mariaAscension'      => array('day' => 15, 'month' => 8, 'year' => 2005),
          'crossRaising'        => array('day' => 14, 'month' => 9, 'year' => 2005),
          'thanksGiving'        => array('day' => 2, 'month' => 10, 'year' => 2005),
          'kermis'              => array('day' => 16, 'month' => 10, 'year' => 2005),
          'reformationDay'      => array('day' => 31, 'month' => 10, 'year' => 2005),
          'allSaintsDay'        => array('day' => 1, 'month' => 11, 'year' => 2005),
          'allSoulsDay'         => array('day' => 2, 'month' => 11, 'year' => 2005),
          'martinsDay'          => array('day' => 11, 'month' => 11, 'year' => 2005),
          'advent4'             => array('day' => 18, 'month' => 12, 'year' => 2005),
          'advent1'             => array('day' => 27, 'month' => 11, 'year' => 2005),
          'advent2'             => array('day' => 4, 'month' => 12, 'year' => 2005),
          'advent3'             => array('day' => 11, 'month' => 12, 'year' => 2005),
          'deathSunday'         => array('day' => 20, 'month' => 11, 'year' => 2005),
          'dayOfRepentance'     => array('day' => 16, 'month' => 11, 'year' => 2005),
          'stNicholasDay'       => array('day' => 6, 'month' => 12, 'year' => 2005),
          'mariaConception'     => array('day' => 8, 'month' => 12, 'year' => 2005),
          'christmasEve'             => array('day' => 24, 'month' => 12, 'year' => 2005),
          'christmasDay'             => array('day' => 25, 'month' => 12, 'year' => 2005),
          'boxingDay'           => array('day' => 26, 'month' => 12, 'year' => 2005),
          'newYearsEve'         => array('day' => 31, 'month' => 12, 'year' => 2005)
        );
        $this->testDates2006 = array(
          'advent1'             => array('day' => 3,  'month' => 12, 'year' => 2006),
          'advent2'             => array('day' => 10, 'month' => 12, 'year' => 2006),
          'advent3'             => array('day' => 17, 'month' => 12, 'year' => 2006),
          'advent4'             => array('day' => 24, 'month' => 12, 'year' => 2006),
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

        $drvChristian = Date_Holidays::factory('Christian', 2005, 'en_EN');
        if (Date_Holidays::isError($drvChristian)) {
            $this->fail(helper_get_error_message($drvChristian));
        }


        foreach ($this->testDates2005 as $name => $dateInfo) {
            $day = $drvChristian->getHoliday($name);
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

        $drvChristian = Date_Holidays::factory('Christian', 2006, 'en_EN');
        if (Date_Holidays::isError($drvChristian)) {
            $this->fail(helper_get_error_message($drvChristian));
        }


        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drvChristian->getHoliday($name);
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
