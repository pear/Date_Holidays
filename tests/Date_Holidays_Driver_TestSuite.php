<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_TestSuite extends PHPUnit_TestCase {
    
    var $driver;

    function setUp() 
    {
        $this->driver = &Date_Holidays::factory('Christian', 2005);
        if (Date_Holidays::isError($this->driver)) {
            return false;
        }
    } 
   
    function testIsHoliday() 
    {
        $this->assertTrue($this->driver->isHoliday('2005-05-05'));
        
        // ascension day
        $date = &new Date('2005-05-05 12:03:10');
        $this->assertTrue($this->driver->isHoliday($date));
        
        $filter = &new Date_Holidays_Filter_Blacklist(array('ascensionDay'));
        $this->assertFalse($this->driver->isHoliday('2005-05-05', $filter));
        
        $filter = &new Date_Holidays_Filter_Whitelist(array('ascensionDay'));
        $this->assertTrue($this->driver->isHoliday('2005-05-05', $filter));
    }
    
    function testGetHolidays() 
    {
        $holidays = $this->driver->getHolidays();
        foreach ($holidays as $holiday) {
            $this->assertTrue(is_a($holiday, 'Date_Holidays_Holiday'));
        }
        
        $filter = &new Date_Holidays_Filter_Whitelist(array('ascensionDay', 'easter'));
        $holidays = $this->driver->getHolidays($filter);
        $this->assertEquals(2,count($holidays));
        
        $filter = &new Date_Holidays_Filter_Blacklist(array('ascensionDay', 'easter'));
        $holidays = $this->driver->getHolidays($filter);
        $this->assertNotContains('ascensionDay', array_keys($holidays));
        $this->assertNotContains('easter', array_keys($holidays));
    }
    

}

?>
