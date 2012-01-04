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
 * @version  CVS: $Id: Date_Holidays_Driver_Austria_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Australia_TestSuite extends PHPUnit_Framework_TestCase
{

    public static function data()
    {
        $holidays = array();


        // 2011
        $holidays[] = array("newYearsDay", 2011, array('day' => 3, 'month' => 1, 'year' => 2011));
        $holidays[] = array("australiaDay", 2011, array('day' => 26, 'month' => 1, 'year' => 2011));
        $holidays[] = array("goodFriday", 2011, array('day' => 22, 'month' => 04, 'year' => 2011));
        //$holidays[] = array("easterSaturday", 2011, array('day' => 23, 'month' => 04, 'year' => 2011));
        $holidays[] = array("anzacDay", 2011, array('day' => 25, 'month' => 04, 'year' => 2011));
        $holidays[] = array("easterMonday", 2011, array('day' => 25, 'month' => 04, 'year' => 2011)); // Though actually Easter Tuesday
        $holidays[] = array("easterTuesday", 2011, array('day' => 26, 'month' => 04, 'year' => 2011)); // Though actually Easter Tuesday
        $holidays[] = array("christmasDay", 2011, array('day' => 26, 'month' => 12, 'year' => 2011));
        $holidays[] = array("boxingDay", 2011, array('day' => 27, 'month' => 12, 'year' => 2011)); // Sort of: SA has proclamation day

        // 2012

        $holidays[] = array("newYearsDay", 2012, array('day' => 2, 'month' => 1, 'year' => 2012));
        $holidays[] = array("australiaDay", 2012, array('day' => 26, 'month' => 1, 'year' => 2012));
        $holidays[] = array("goodFriday", 2012, array('day' => 06, 'month' => 04, 'year' => 2012));
        //$holidays[] = array("easterSaturday", 2012, array('day' => 07, 'month' => 04, 'year' => 2012));
        $holidays[] = array("easterMonday", 2012, array('day' => 9, 'month' => 04, 'year' => 2012));
        $holidays[] = array("anzacDay", 2012, array('day' => 25, 'month' => 04, 'year' => 2012));
        $holidays[] = array("christmasDay", 2012, array('day' => 25, 'month' => 12, 'year' => 2012));
        $holidays[] = array("boxingDay", 2012, array('day' => 26, 'month' => 12, 'year' => 2012)); // Sort of: SA has proclamation day

        // 2013

        $holidays[] = array("newYearsDay", 2013, array('day' => 1, 'month' => 1, 'year' => 2013));
        $holidays[] = array("australiaDay", 2013, array('day' => 28, 'month' => 1, 'year' => 2013));
        $holidays[] = array("goodFriday", 2013, array('day' => 29, 'month' => 03, 'year' => 2013));
        //$holidays[] = array("easterSaturday", 2013, array('day' => 30, 'month' => 03, 'year' => 2013));
        $holidays[] = array("easterMonday", 2013, array('day' => 1, 'month' => 04, 'year' => 2013)); // Though actually Easter Tuesday
        $holidays[] = array("anzacDay", 2013, array('day' => 25, 'month' => 04, 'year' => 2013));
        $holidays[] = array("christmasDay", 2013, array('day' => 25, 'month' => 12, 'year' => 2013));
        $holidays[] = array("boxingDay", 2013, array('day' => 26, 'month' => 12, 'year' => 2013)); // Sort of: SA has proclamation day


        return $holidays;
    }

    /**
     * @dataProvider data
     */
    public function testHolidays($name, $year, $dateInfo)
    {
        $dh = new Date_Holidays();
        $drv = $dh->factory('Australia', $year, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

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
