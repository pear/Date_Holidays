<?php
/**
 * Test class for running unit tests related to the driver for holidays in South Australia
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

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in Queensland
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id: Date_Holidays_Driver_Austria_TestSuite.php 265332 2008-08-23 09:12:59Z kguest $
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_AustraliaQLD_TestSuite extends PHPUnit_Framework_TestCase
{

    public static function data()
    {
        $holidays = array();


        // 2008
        $holidays[] = array("boxingDay", 2008, array('day' => 26, 'month' => 12, 'year' => 2008));
        $holidays[] = array("queensBirthday", 2008, array('day' => 09, 'month' => 06, 'year' => 2008));
        $holidays[] = array("labourDay", 2008, array('day' => 03, 'month' => 10, 'year' => 2008));
        $holidays[] = array("royalQueenslandShow", 2008, array('day' => 13, 'month' => 08, 'year' => 2008));

        // 2009
        $holidays[] = array("boxingDay", 2009, array('day' => 28, 'month' => 12, 'year' => 2009));
        $holidays[] = array("queensBirthday", 2009, array('day' => 08, 'month' => 06, 'year' => 2009));
        $holidays[] = array("labourDay", 2009, array('day' => 03, 'month' => 10, 'year' => 2009));
        $holidays[] = array("royalQueenslandShow", 2009, array('day' => 12, 'month' => 08, 'year' => 2009));

        // 2010
        $holidays[] = array("boxingDay", 2010, array('day' => 27, 'month' => 12, 'year' => 2010));
        $holidays[] = array("queensBirthday", 2010, array('day' => 14, 'month' => 06, 'year' => 2010));
        $holidays[] = array("labourDay", 2010, array('day' => 03, 'month' => 10, 'year' => 2010));
        $holidays[] = array("royalQueenslandShow", 2010, array('day' => 11, 'month' => 08, 'year' => 2010));

        // 2011
        $holidays[] = array("boxingDay", 2011, array('day' => 27, 'month' => 12, 'year' => 2011));
        $holidays[] = array("queensBirthday", 2011, array('day' => 13, 'month' => 06, 'year' => 2011));
        $holidays[] = array("labourDay", 2011, array('day' => 03, 'month' => 10, 'year' => 2011));
        $holidays[] = array("royalQueenslandShow", 2011, array('day' => 17, 'month' => 08, 'year' => 2011));

        // 2012
        $holidays[] = array("boxingDay", 2012, array('day' => 26, 'month' => 12, 'year' => 2012));
        $holidays[] = array("queensBirthday", 2012, array('day' => 11, 'month' => 06, 'year' => 2012));
        $holidays[] = array("labourDay", 2012, array('day' => 1, 'month' => 10, 'year' => 2012));
        $holidays[] = array("royalQueenslandShow", 2012, array('day' => 15, 'month' => 08, 'year' => 2012));

        // 2013
        $holidays[] = array("boxingDay", 2013, array('day' => 26, 'month' => 12, 'year' => 2013));
        $holidays[] = array("queensBirthday", 2013, array('day' => 10, 'month' => 06, 'year' => 2013));
        $holidays[] = array("labourDay", 2013, array('day' => 7, 'month' => 10, 'year' => 2013));
        $holidays[] = array("royalQueenslandShow", 2013, array('day' => 14, 'month' => 08, 'year' => 2013));

        return $holidays;
    }

    /**
     * @dataProvider data
     */
    public function testHolidays($name, $year, $dateInfo)
    {
        $dh = new Date_Holidays();
        $drv = $dh->factory('AustraliaQLD', $year, 'en_EN');
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
