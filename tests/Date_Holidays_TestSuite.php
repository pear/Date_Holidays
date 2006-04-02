<?php
require_once 'PHPUnit.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'AllTests.php';
require_once 'Date/Holidays.php';

class Date_Holidays_TestSuite extends PHPUnit_TestCase {
    
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
        $this->assertNotNull(Date_Holidays::factoryISO3166('de'));
        
    }
    
}

?>
