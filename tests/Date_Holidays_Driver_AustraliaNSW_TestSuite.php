<?php
/**
 * Test class for running unit tests related to the driver for holidays in New South Wales
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Austria_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 * @see http://australia.gov.au/topics/australian-facts-and-figures/public-holidays
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Austria_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_AustraliaNSW_TestSuite extends PHPUnit_Framework_TestCase
{

    public static function data()
    {
        $holidays = array();

        // 2011
        $holidays[] = array("queensBirthday", 2011, array('day' => 13, 'month' => 06, 'year' => 2011));
        $holidays[] = array("labourDay", 2011, array('day' => 03, 'month' => 10, 'year' => 2011));
        $holidays[] = array("bankHoliday", 2011, array('day' => 01, 'month' => 08, 'year' => 2011)); // Applies to banks and certain financial institutions see Retail Trading Act 2008.
        $holidays[] = array("boxingDay", 2011, array('day' => 27, 'month' => 12, 'year' => 2011));

        // 2012
        $holidays[] = array("queensBirthday", 2012, array('day' => 11, 'month' => 06, 'year' => 2012));
        $holidays[] = array("labourDay", 2012, array('day' => 1, 'month' => 10, 'year' => 2012));
        $holidays[] = array("bankHoliday", 2011, array('day' => 06, 'month' => 08, 'year' => 2011)); // Applies to banks and certain financial institutions see Retail Trading Act 2008.
        $holidays[] = array("boxingDay", 2012, array('day' => 26, 'month' => 12, 'year' => 2012));

        return $holidays;
    }

    /**
     * @dataProvider data
     */
    public function testHolidays($name, $year, $dateInfo)
    {
        $drv = Date_Holidays::factory('AustraliaNSW', $year, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }

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