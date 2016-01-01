<?php
/**
 * Test class for running unit tests related to the driver for holidays in Brazil
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
 * Test class for running unit tests related to the driver for holidays in Brazil
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Brazil_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2008;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {

        $this->testDates2008 = array(
                'jesusCircumcision' => array('day' =>1, 'month' =>1, 'year' => 2008),
                'epiphany'          => array('day' =>6, 'month' =>1, 'year' => 2008),
                'mariaCleaning'     => array('day' =>2, 'month' =>2, 'year' => 2008),
                'josefsDay'         => array('day' =>19, 'month' =>3, 'year' => 2008),
                'mariaAnnouncement' => array('day' =>25, 'month' =>3, 'year' => 2008),
                'easter'            => array('day' =>23, 'month' =>3, 'year' => 2008),
                'palmSunday'        => array('day' =>16, 'month' =>3, 'year' => 2008),
                'passionSunday'     => array('day' =>9, 'month' =>3, 'year' => 2008),
                'painfulFriday'     => array('day' =>14, 'month' =>3, 'year' => 2008),
                'whiteSunday'       => array('day' =>30, 'month' =>3, 'year' => 2008),
                'ashWednesday'      => array('day' =>6, 'month' =>2, 'year' => 2008),
                'goodFriday'        => array('day' =>21, 'month' =>3, 'year' => 2008),
                'greenThursday'     => array('day' =>20, 'month' =>3, 'year' => 2008),
                'easterMonday'      => array('day' =>24, 'month' =>3, 'year' => 2008),
                'whitsun'           => array('day' =>11, 'month' =>5, 'year' => 2008),
                'mothersDay'        => array('day' =>11, 'month' =>5, 'year' => 2008),
                'requestSunday'     => array('day' =>27, 'month' =>4, 'year' => 2008),
                'ascensionDay'      => array('day' =>1, 'month' =>5, 'year' => 2008),
                'laborDay'          => array('day' =>1, 'month' =>5, 'year' => 2008),
                'whitMonday'        => array('day' =>12, 'month' =>5, 'year' => 2008),
                'mariaHaunting'     => array('day' =>31, 'month' =>5, 'year' => 2008),
                'trinitatis'        => array('day' =>18, 'month' =>5, 'year' => 2008),
                'corpusChristi'     => array('day' =>22, 'month' =>5, 'year' => 2008),
                'heartJesus'        => array('day' =>30, 'month' =>5, 'year' => 2008),
                'johannisCelebration' => array('day' =>24 , 'month' => 6 , 'year' =>2008),
                'petrusAndPaulus'   => array('day' =>29, 'month' =>6, 'year' => 2008),
                'mariaAscension'    => array('day' =>15, 'month' =>8, 'year' => 2008),
                'crossRaising'      => array('day' =>14, 'month' =>9, 'year' => 2008),
                'thanksGiving'      => array('day' =>5, 'month' =>10, 'year' => 2008),
                'kermis'            => array('day' =>19, 'month' =>10, 'year' => 2008),
                'reformationDay'    => array('day' =>31, 'month' =>10, 'year' => 2008),
                'allSaintsDay'      => array('day' =>1, 'month' =>11, 'year' => 2008),
                'allSoulsDay'       => array('day' =>2, 'month' =>11, 'year' => 2008),
                'martinsDay'        => array('day' =>11, 'month' =>11, 'year' => 2008),
                'advent4'           => array('day' =>21, 'month' =>12, 'year' => 2008),
                'advent1'           => array('day' =>30, 'month' =>11, 'year' => 2008),
                'advent2'           => array('day' =>7, 'month' =>12, 'year' => 2008),
                'advent3'           => array('day' =>14, 'month' =>12, 'year' => 2008),
                'deathSunday'       => array('day' =>23, 'month' =>11, 'year' => 2008),
                'dayOfRepentance'   => array('day' =>19, 'month' =>11, 'year' => 2008),
                'stNicholasDay'     => array('day' =>6, 'month' =>12, 'year' => 2008),
                'mariaConception'   => array('day' =>8, 'month' =>12, 'year' => 2008),
                'christmasEve'      => array('day' =>24, 'month' =>12, 'year' => 2008),
                'christmasDay'      => array('day' =>25, 'month' =>12, 'year' => 2008),
                'boxingDay'         => array('day' =>26, 'month' =>12, 'year' => 2008),
                'newYearsEve'       => array('day' =>31, 'month' =>12, 'year' => 2008),
                'carnival'          => array('day' =>5, 'month' =>2, 'year' => 2008),
                'womensDay'         => array('day' =>8, 'month' =>3, 'year' => 2008),
                'tiradentesDay'     => array('day' =>21, 'month' =>4, 'year' => 2008),
                'valentinesDay'     => array('day' =>12, 'month' =>6, 'year' => 2008),
                'fathersDay'        => array('day' =>10, 'month' =>8, 'year' => 2008),
                'independenceDay'   => array('day' =>7, 'month' =>9, 'year' => 2008),
                'aparecidaDay'      => array('day' =>12, 'month' =>10, 'year' => 2008),
                'childrenDay'       => array('day' =>12, 'month' =>10, 'year' => 2008),
                'republicDay'       => array('day' =>15, 'month' =>11, 'year' => 2008),
                );
    }

    /**
     * test holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('Brazil', 2008, 'en_EN');
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
}

?>
