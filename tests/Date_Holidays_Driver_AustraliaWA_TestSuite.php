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
 * @version  CVS: $Id: Date_Holidays_Driver_Austria_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for holidays Western Australia
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Austria_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 * @see http://australia.gov.au/topics/australian-facts-and-figures/public-holidays
 */
class Date_Holidays_Driver_AustraliaWA_TestSuite extends PHPUnit_Framework_TestCase
{

    public static function data()
    {
        $holidays = array();

        //2009
        $holidays[] = array("labourDay", 2009, array('day' => 2, 'month' => 5, 'year' => 2009));
        $holidays[] = array("foundationDay", 2009, array('day' => 1, 'month' => 6, 'year' => 2009));
        $holidays[] = array("queensBirthday", 2009, array('day' => 28, 'month' => 9, 'year' => 2009));//Non-metropolitan local authorities may celebrate the Queen's Birthday Public Holiday on and alternative date
        $holidays[] = array("boxingDay", 2009, array('day' => 26, 'month' => 12, 'year' => 2009));

        // 2010
        $holidays[] = array("labourDay", 2010, array('day' => 1, 'month' => 5, 'year' => 2010));
        $holidays[] = array("foundationDay", 2010, array('day' => 7, 'month' => 6, 'year' => 2010));
        $holidays[] = array("queensBirthday", 2010, array('day' => 27, 'month' => 9, 'year' => 2010));//Non-metropolitan local authorities may celebrate the Queen's Birthday Public Holiday on and alternative date
        $holidays[] = array("boxingDay", 2010, array('day' => 26, 'month' => 12, 'year' => 2010));


        // 2011
        $holidays[] = array("labourDay", 2011, array('day' => 7, 'month' => 5, 'year' => 2011));
        $holidays[] = array("foundationDay", 2011, array('day' => 6, 'month' => 6, 'year' => 2011));

        //The date of the Queen's Birthday public holiday for 2011 has been changed from Monday 3 October to Friday 28 October 2011 - 1/03/2011
        $holidays[] = array("queensBirthday", 2011, array('day' => 28, 'month' => 10, 'year' => 2011));//Non-metropolitan local authorities may celebrate the Queen's Birthday Public Holiday on and alternative date
        $holidays[] = array("boxingDay", 2011, array('day' => 27, 'month' => 12, 'year' => 2011));

        // 2012
        $holidays[] = array("labourDay", 2012, array('day' => 5, 'month' => 5, 'year' => 2012));
        $holidays[] = array("foundationDay", 2012, array('day' => 4, 'month' => 6, 'year' => 2012));
        $holidays[] = array("queensBirthday", 2012, array('day' => 1, 'month' => 10, 'year' => 2012));//Non-metropolitan local authorities may celebrate the Queen's Birthday Public Holiday on and alternative date
        $holidays[] = array("boxingDay", 2012, array('day' => 26, 'month' => 12, 'year' => 2012));

        // 2013
        $holidays[] = array("labourDay", 2013, array('day' => 4, 'month' => 5, 'year' => 2013));
        $holidays[] = array("foundationDay", 2013, array('day' => 3, 'month' => 6, 'year' => 2013));
        $holidays[] = array("queensBirthday", 2013, array('day' => 30, 'month' => 9, 'year' => 2013));//Non-metropolitan local authorities may celebrate the Queen's Birthday Public Holiday on and alternative date
        $holidays[] = array("boxingDay", 2013, array('day' => 26, 'month' => 12, 'year' => 2013));


        return $holidays;
    }

    /**
     * @dataProvider data
     */
    public function testHolidays($name, $year, $dateInfo)
    {
        $dh = new Date_Holidays();
        $drv = $dh->factory('AustraliaWA', $year, 'en_EN');
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
