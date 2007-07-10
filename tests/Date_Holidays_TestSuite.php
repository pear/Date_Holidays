<?php
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

class Date_Holidays_TestSuite extends PHPUnit_Framework_TestCase {

    function testFactory() {
        $this->assertTrue(is_a(Date_Holidays::factory('Christian'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('Composite'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('Germany'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('Jewish'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('PHPdotNet'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('Sweden'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('UNO'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factory('USA'), 'Date_Holidays_Driver'));
    }


    function testFactoryISO3166() {
        $this->assertTrue(is_a(Date_Holidays::factoryISO3166('de'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factoryISO3166('deu'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factoryISO3166('se'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factoryISO3166('swe'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factoryISO3166('us'), 'Date_Holidays_Driver'));
        $this->assertTrue(is_a(Date_Holidays::factoryISO3166('usa'), 'Date_Holidays_Driver'));
    }

}

?>
