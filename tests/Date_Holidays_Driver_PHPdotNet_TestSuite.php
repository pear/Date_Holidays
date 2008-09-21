<?php
/**
 * Test class for running unit tests related to the PHPdotNet Driver.
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

require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the PHPdotNet driver.
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_PHPdotNet_TestSuite extends PHPUnit_Framework_TestCase
{

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {

        $this->testDates2005 = array(
                'lsmith' => array ('day' => 5,
                    'month' => 11,
                    'year' => 2005),
                'schst' => array ('day' => 12,
                    'month' => 5,
                    'year' => 2005),
                'luckec' => array ('day' => 9,
                    'month' => 9,
                    'year' => 2005),
                'arnaud' => array ('day' => 14,
                    'month' => 3,
                    'year' => 2005),
                'sebastian' => array ('day' => 22,
                    'month' => 4,
                    'year' => 2005),
                'akash' => array ('day' => 20,
                    'month' => 5,
                    'year' => 2005),
                'cellog' => array ('day' => 2,
                    'month' => 9,
                    'year' => 2005),
                'ryansking' => array ('day' => 31,
                    'month' => 3,
                    'year' => 2005),
                'dufuz' => array ('day' => 4,
                    'month' => 11,
                    'year' => 2005),
                'toby' => array ('day' => 19,
                    'month' => 5,
                    'year' => 2005),
                'argh' => array ('day' => 7,
                    'month' => 2,
                    'year' => 2005),
                'steggink' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2005),
                'anderson' => array ('day' => 21,
                    'month' => 10,
                    'year' => 2005),
                'mcglinn' => array ('day' => 10,
                    'month' => 1,
                    'year' => 2005),
                'lopez' => array ('day' => 31,
                    'month' => 7,
                    'year' => 2005),
                'ashnazg' => array ('day' => 9,
                    'month' => 1,
                    'year' => 2005),
                );

        $this->testDates2006 = array(
                'lsmith' => array ('day' => 5,
                    'month' => 11,
                    'year' => 2006),
                'schst' => array ('day' => 12,
                    'month' => 5,
                    'year' => 2006),
                'luckec' => array ('day' => 9,
                    'month' => 9,
                    'year' => 2006),
                'arnaud' => array ('day' => 14,
                    'month' => 3,
                    'year' => 2006),
                'sebastian' => array ('day' => 22,
                    'month' => 4,
                    'year' => 2006),
                'akash' => array ('day' => 20,
                    'month' => 5,
                    'year' => 2006),
                'cellog' => array ('day' => 2,
                    'month' => 9,
                    'year' => 2006),
                'ryansking' => array ('day' => 31,
                    'month' => 3,
                    'year' => 2006),
                'dufuz' => array ('day' => 4,
                    'month' => 11,
                    'year' => 2006),
                'toby' => array ('day' => 19,
                    'month' => 5,
                    'year' => 2006),
                'argh' => array ('day' => 7,
                    'month' => 2,
                    'year' => 2006),
                'steggink' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2006),
                'anderson' => array ('day' => 21,
                    'month' => 10,
                    'year' => 2006),
                'mcglinn' => array ('day' => 10,
                    'month' => 1,
                    'year' => 2006),
                'lopez' => array ('day' => 31,
                    'month' => 7,
                    'year' => 2006),
                'ashnazg' => array ('day' => 9,
                    'month' => 1,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'lsmith' => array ('day' => 5,
                    'month' => 11,
                    'year' => 2007),
                'schst' => array ('day' => 12,
                    'month' => 5,
                    'year' => 2007),
                'luckec' => array ('day' => 9,
                    'month' => 9,
                    'year' => 2007),
                'arnaud' => array ('day' => 14,
                    'month' => 3,
                    'year' => 2007),
                'sebastian' => array ('day' => 22,
                    'month' => 4,
                    'year' => 2007),
                'akash' => array ('day' => 20,
                    'month' => 5,
                    'year' => 2007),
                'cellog' => array ('day' => 2,
                    'month' => 9,
                    'year' => 2007),
                'ryansking' => array ('day' => 31,
                    'month' => 3,
                    'year' => 2007),
                'dufuz' => array ('day' => 4,
                    'month' => 11,
                    'year' => 2007),
                'toby' => array ('day' => 19,
                    'month' => 5,
                    'year' => 2007),
                'argh' => array ('day' => 7,
                    'month' => 2,
                    'year' => 2007),
                'steggink' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2007),
                'anderson' => array ('day' => 21,
                    'month' => 10,
                    'year' => 2007),
                'mcglinn' => array ('day' => 10,
                    'month' => 1,
                    'year' => 2007),
                'lopez' => array ('day' => 31,
                    'month' => 7,
                    'year' => 2007),
                'ashnazg' => array ('day' => 9,
                    'month' => 1,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'lsmith' => array ('day' => 5,
                    'month' => 11,
                    'year' => 2008),
                'schst' => array ('day' => 12,
                    'month' => 5,
                    'year' => 2008),
                'luckec' => array ('day' => 9,
                    'month' => 9,
                    'year' => 2008),
                'arnaud' => array ('day' => 14,
                    'month' => 3,
                    'year' => 2008),
                'sebastian' => array ('day' => 22,
                    'month' => 4,
                    'year' => 2008),
                'akash' => array ('day' => 20,
                    'month' => 5,
                    'year' => 2008),
                'cellog' => array ('day' => 2,
                    'month' => 9,
                    'year' => 2008),
                'ryansking' => array ('day' => 31,
                    'month' => 3,
                    'year' => 2008),
                'dufuz' => array ('day' => 4,
                    'month' => 11,
                    'year' => 2008),
                'toby' => array ('day' => 19,
                    'month' => 5,
                    'year' => 2008),
                'argh' => array ('day' => 7,
                    'month' => 2,
                    'year' => 2008),
                'steggink' => array ('day' => 7,
                    'month' => 12,
                    'year' => 2008),
                'anderson' => array ('day' => 21,
                    'month' => 10,
                    'year' => 2008),
                'mcglinn' => array ('day' => 10,
                    'month' => 1,
                    'year' => 2008),
                'lopez' => array ('day' => 31,
                    'month' => 7,
                    'year' => 2008),
                'ashnazg' => array ('day' => 9,
                    'month' => 1,
                    'year' => 2008),
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
        $drv = Date_Holidays::factory('PHPdotNet', 2005, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2005 as $name => $dateInfo) {

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
        $drv = Date_Holidays::factory('PHPdotNet', 2006, 'en_EN');
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

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('PHPdotNet', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

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
     * test Holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('PHPdotNet', 2008, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

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
}

?>
