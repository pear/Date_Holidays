<?php
/**
 * Test class for running unit tests related to the driver for holidays in Russia
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Veronica Morales Marquez <veronica.morales.marquez@lut.fi>
 * @author   Poorang Vosough <poorang.vosough@lut.fi>
 * @license  BSD http://www.opensource.org/licenses/bsd-license.php
 * @version  Russia.php v 0.0.4
 * @link     http://pear.php.net/package/Date_Holidays
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

require_once 'Date/Holidays.php';

define('LANG_FILE', '@DATA-DIR@/Date_Holidays_Russia/lang/');

/**
 * Test class for running unit tests related to the driver for holidays in Russia
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Veronica Morales Marquez <veronica.morales.marquez@lut.fi>
 * @author   Poorang Vosough <poorang.vosough@lut.fi>
 * @license  BSD http://www.opensource.org/licenses/bsd-license.php
 * @version  Russia.php v 0.0.4
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Russia_TestSuite extends PHPUnit_Framework_TestCase
{


    var $testDates2012 = array(
        'newYearsDay1'           => array('day'=>1,
                                         'month'=>1,
                                         'year'=>2012),
        'newYearsDay2'           => array('day'=>2,
                                         'month'=>1,
                                         'year'=>2012),
        'newYearsDay3'           => array('day'=>3,
                                         'month'=>1,
                                         'year'=>2012),
        'newYearsDay4'           => array('day'=>4,
                                         'month'=>1,
                                         'year'=>2012),
        'newYearsDay5'           => array('day'=>5,
                                         'month'=>1,
                                         'year'=>2012),
        'newYearsDay6'           => array('day'=>6,
                                         'month'=>1,
                                         'year'=>2012),
        'christmasDay'           => array('day'=>7,
                                         'month'=>1,
                                         'year'=>2012),
        'defenderFatherlandDay1' => array('day'=>23,
                                         'month'=>2,
                                         'year'=>2012),
        'defenderFatherlandDay2' => array('day'=>24,
                                         'month'=>2,
                                         'year'=>2012),
        'womensDay1'            => array('day'=>8,
                                         'month'=>3,
                                         'year'=>2012),
        'womensDay2'            => array('day'=>9,
                                         'month'=>3,
                                         'year'=>2012),
        'springLabourDay1'      => array('day'=>30,
                                         'month'=>4,
                                         'year'=>2012),
        'springLabourDay2'      => array('day'=>1,
                                         'month'=>5,
                                         'year'=>2012),
        'victoryDay'            => array('day'=>9,
                                         'month'=>5,
                                         'year'=>2012),
        'russiaDay1'            => array('day'=>11,
                                         'month'=>6,
                                         'year'=>2012),
        'russiaDay2'            => array('day'=>12,
                                         'month'=>6,
                                         'year'=>2012),
        'unityDay'              => array('day'=>5,
                                         'month'=>11,
                                         'year'=>2012),



    );

    var $testDates2013 = array(
        'newYearsDay1'           => array('day'=>1,
                                         'month'=>1,
                                         'year'=>2013),
        'newYearsDay2'           => array('day'=>2,
                                         'month'=>1,
                                         'year'=>2013),
        'newYearsDay3'           => array('day'=>3,
                                         'month'=>1,
                                         'year'=>2013),
        'newYearsDay4'           => array('day'=>4,
                                         'month'=>1,
                                         'year'=>2013),
        'christmasDay'           => array('day'=>7,
                                         'month'=>1,
                                         'year'=>2013),
        'newYearsDay5'           => array('day'=>8,
                                         'month'=>1,
                                         'year'=>2013),
        'defenderFatherlandDay' => array('day'=>25,
                                         'month'=>2,
                                         'year'=>2013),
        'womensDay'             => array('day'=>8,
                                         'month'=>3,
                                         'year'=>2013),

        'springLabourDay'       => array('day'=>1,
                                         'month'=>5,
                                         'year'=>2013),
        'victoryDay1'               => array('day'=>9,
                                         'month'=>5,
                                         'year'=>2013),
        'victoryDay2'               => array('day'=>10,
                                         'month'=>5,
                                         'year'=>2013),
        'russiaDay'             => array('day'=>12,
                                         'month'=>6,
                                         'year'=>2013),
        'unityDay'              => array('day'=>4,
                                         'month'=>11,
                                         'year'=>2013),
    );

    /**
     * setup
     *
     * @access public
     * @return void
     */
    function setUp()
    {
    }

    /**
     * test Holidays for 2012
     *
     * @access public
     * @return void
     */
    function testHolidays2012()
    {
        $drv = Date_Holidays::factory('Russia', 2012, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            $this->fail($drv->getMessage());
        }

        foreach ($this->testDates2012 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

    /**
     * test Holidays for 2013
     *
     * @access public
     * @return void
     */
    function testHolidays2013()
    {
        $drv = Date_Holidays::factory('Russia', 2013, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }

        foreach ($this->testDates2013 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
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
