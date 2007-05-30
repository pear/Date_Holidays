<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_EnglandWales_TestSuite extends PHPUnit_TestCase {

    var $testDates2009;
    var $testDates2010;
    
    function setUp() {
        $this->testDates2009 = array( 
            'newYearsDay' => array('day' => 1, 'month' => 1, 'year' => 2009), 
            'goodFriday' => array('day' => 10, 'month' => 4, 'year' => 2009), 
            'easterMonday' => array('day' => 13, 'month' => 4, 'year' => 2009), 
            'mayDay' => array('day' => 4, 'month' => 5, 'year' => 2009), 
            'springBank' => array('day' => 25, 'month' => 5, 'year' => 2009), 
            'summerBank' => array('day' => 31, 'month' => 8, 'year' => 2009), 
            'xmasDay' => array('day' => 25, 'month' => 12, 'year' => 2009), 
            'boxingDay' => array('day' => 28, 'month' => 12, 'year' => 2009) 
        ); 
            
        $this->testDates2010 = array( 
            'newYearsDay' => array('day' => 1, 'month' => 1, 'year' => 2010), 
            'goodFriday' => array('day' => 2, 'month' => 4, 'year' => 2010), 
            'easterMonday' => array('day' => 5, 'month' => 4, 'year' => 2010), 
            'mayDay' => array('day' => 3, 'month' => 5, 'year' => 2010), 
            'springBank' => array('day' => 31, 'month' => 5, 'year' => 2010), 
            'summerBank' => array('day' => 30, 'month' => 8, 'year' => 2010), 
            'xmasDay' => array('day' => 28, 'month' => 12, 'year' => 2010), 
            'boxingDay' => array('day' => 27, 'month' => 12, 'year' => 2010) 
        ); 
    } 
    
    function testHolidays2009() { 
        $drv = Date_Holidays::factory('EnglandWales', 2009, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv)); 
        if (Date_Holidays::isError($drv)) { 
            print_r($drv); 
            die($drv->getMessage()); 
        } 
        foreach ($this->testDates2009 as $name => $dateInfo) { 
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
    
    function testHolidays2010() { 
        $drv = Date_Holidays::factory('EnglandWales', 2010, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv)); 
        if (Date_Holidays::isError($drv)) { 
            print_r($drv); 
            die($drv->getMessage()); 
        } 
        foreach ($this->testDates2010 as $name => $dateInfo) { 
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
} 
?>