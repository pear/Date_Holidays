<?php
require_once 'PHPUnit.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'AllTests.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_TestSuite extends PHPUnit_TestCase {
    
    var $driver;

    function setUp() 
    {
        $this->driver = Date_Holidays::factory('Germany', 2005, 'C');
        if (Date_Holidays::isError($this->driver)) {
            echo "Driver creation failed: \n";
            foreach ($this->driver->getErrors() as $error) {
                echo $error['message'] . "\n";
            }
            die();
        }
        
        $this->driver->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Christian/de_DE.ser', 'de_DE');
        $this->driver->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Germany/de_DE.ser', 'de_DE');
    } 
    
    function testAddCompiledTranslationFile() 
    {
        $result = $this->driver->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Christian/de_DE.ser', 'de_DE');
        $this->assertTrue($result);
        $result = $this->driver->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Germany/de_DE.ser', 'de_DE');
        $this->assertTrue($result);
    }
    
    function testAddTranslationFile() 
    {
        $result = $this->driver->addTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Germany/de_DE.xml', 'de_DE');
        $this->assertTrue($result);
        $result = $this->driver->addTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Germany/de_DE.ini', 'de_DE');
        $this->assertTrue(Date_Holidays::isError($result));
        Date_Holidays::getErrors(true);
    }
   
    function testIsHoliday() 
    {
        $this->assertTrue($this->driver->isHoliday('2005-05-05'));
        
        // ascension day
        $date = new Date('2005-05-05 12:03:10');
        $this->assertTrue($this->driver->isHoliday($date));
        
        $filter = new Date_Holidays_Filter_Whitelist(array('ascensionDay'));
        $this->assertTrue($this->driver->isHoliday('2005-05-05', $filter));
    }
    
    function testGetHolidays() 
    {
        $holidays = $this->driver->getHolidays();
        foreach ($holidays as $holiday) {
            $this->assertTrue(is_a($holiday, 'Date_Holidays_Holiday'));
        }
        
        $filter = new Date_Holidays_Filter_Whitelist(array('ascensionDay', 'easter'));
        $holidays = $this->driver->getHolidays($filter);
        $this->assertEquals(2,count($holidays));
        
        $filter = new Date_Holidays_Filter_Blacklist(array('ascensionDay', 'easter'));
        $holidays = $this->driver->getHolidays($filter);
        $this->assertNotContains('ascensionDay', array_keys($holidays));
        $this->assertNotContains('easter', array_keys($holidays));
    }
    
    function testGetHoliday() 
    {
        $holiday = $this->driver->getHoliday('ascensionDay');
        $this->assertTrue(is_a($holiday, 'Date_Holidays_Holiday'));
        
        $this->assertEquals('ascensionDay', $holiday->getInternalName());
        
        $result = $this->driver->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Germany/de_DE.ser', 'de_DE');
        $this->assertTrue($result, 'Adding compiled translation file');
        $holiday = $this->driver->getHoliday('ascensionDay', 'de_DE');
        $this->assertEquals('Christi Himmelfahrt', $holiday->getTitle());
    }
    
    function testGetHolidayDate() 
    {
        $date = $this->driver->getHolidayDate('ascensionDay');
        $this->assertTrue(is_a($date, 'Date'));
        $this->assertTrue($date->equals(new Date('2005-05-05')));
    }
    
    function testGetHolidayDates() 
    {
        $dates = $this->driver->getHolidayDates();
        foreach ($dates as $date) {
            $this->assertTrue(is_a($date, 'Date'));
        }
        
        $restrict = array('ascensionDay', 'easter');
        $filter = new Date_Holidays_Filter_Whitelist($restrict);
        $dates = $this->driver->getHolidayDates($filter);
        $this->assertEquals(2, count($dates));
        foreach ($dates as $internalName => $_tmp) {
            $this->assertContains($internalName, $restrict);
        }
        
        $filter = new Date_Holidays_Filter_Blacklist($restrict);
        $holidays = $this->driver->getHolidayDates($filter);
        foreach ($restrict as $internalName) {
            $this->assertNotContains($internalName, array_keys($holidays));
        }
    }
    
    function testGetHolidayForDate() 
    {
        $holiday = $this->driver->getHolidayForDate('2005-05-05');
        $this->assertFalse(Date_Holidays::isError($holiday));
        
        $result = $this->driver->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Germany/de_DE.ser', 'de_DE');
        $holiday = $this->driver->getHolidayForDate('2005-05-05', 'de_DE');
        $this->assertEquals('Christi Himmelfahrt', $holiday->getTitle());

        $result = $this->driver->getHolidayForDate('2005-05-05', null, $multiple = true);
        $this->assertTrue(is_array($result));
        $this->assertTrue(count($result) > 1);
        
        foreach ($result as $holiday) {
            $this->assertTrue(is_a($holiday, 'Date_Holidays_Holiday'));
        }
        
        $germany  = Date_Holidays::factory('Germany', 2005, 'de_DE');
        $holidays = $germany->getHolidayForDate(mktime(0, 0, 0, 10, 30, 2005), null, true);
        
        $this->assertEquals(2, count($holidays));
        for ($i = 0; $i < count($holidays); ++$i) {
            $this->assertContains(
                    $holidays[$i]->getInternalName(), 
                    array('savingsDay', 'stampsDay'));
        }
    }
    
    function testGetHolidayProperties()
    {
        $result = $this->driver->addTranslationFile(
                dirname(__FILE__) . '/Date_Holidays_Driver_TestSuite.xml', 'de_DE');
        $this->assertTrue($result);
        
        $properties = $this->driver->getHolidayProperties('jesusCircumcision', 'en');
        $this->assertTrue(is_array($properties));
        
        $properties = $this->driver->getHolidayProperties('jesusCircumcision', 'de_DE');
        $this->assertTrue(is_array($properties));
        $this->assertTrue(isset($properties['foo']));
        $this->assertEquals('bar', $properties['foo']);
        
        $properties = $this->driver->getHolidayProperties('epiphany', 'de_DE');
        $this->assertTrue(is_array($properties));
        $this->assertTrue(isset($properties['foo']));
        $this->assertEquals('bar', $properties['foo']);
        $this->assertTrue(isset($properties['test']));
        $this->assertEquals('Test-Value', $properties['test']);
    }
    
    function testGetHolidaysForDatespan() 
    {
        $holidays = $this->driver->getHolidaysForDatespan('2005-05-01', '2005-05-08');
        $this->assertTrue(is_array($holidays));
        
        $internalNames = array();
        foreach ($holidays as $holiday) {
            $internalNames[] = $holiday->getInternalName();
            $this->assertTrue(is_a($holiday, 'Date_Holidays_Holiday'));
        }
        
        $this->assertContains('laughingDay', $internalNames);
        $this->assertContains('laughingDay', $internalNames);
        $this->assertContains('requestSunday', $internalNames);
        $this->assertContains('europeDay', $internalNames);
        $this->assertContains('ascensionDay', $internalNames);
        $this->assertContains('fathersDay', $internalNames);
        $this->assertContains('mothersDay', $internalNames);
        $this->assertContains('endOfWWar2', $internalNames);
        
        
        //        $holidays   = $this->driver->getHolidays();
        //        $dates      = array();
        //        foreach ($holidays as $holiday) {
        //            $dates[$holiday->getInternalName()] = $holiday->getDate();
        //        }
        //        uasort($dates, array('Date', 'compare'));
        //        foreach ($dates as $k => $v) {
        //            echo $k . ': ' . $v->getDate() . "\n";
        //        }
        // ------------------------------------------------------------------------------
        // laughingDay: 2005-05-01 00:00:00
        // dayOfWork: 2005-05-01 00:00:00
        // requestSunday: 2005-05-01 00:00:00
        // europeDay: 2005-05-05 00:00:00
        // ascensionDay: 2005-05-05 00:00:00
        // fathersDay: 2005-05-05 00:00:00
        // mothersDay: 2005-05-08 00:00:00
        // endOfWWar2: 2005-05-08 00:00:00
    }
    
    function testGetHolidayTitle() 
    {
        $this->assertEquals('Ascension Day', 
                $this->driver->getHolidayTitle('ascensionDay'));
        $this->assertEquals('Christi Himmelfahrt', 
                $this->driver->getHolidayTitle('ascensionDay', 'de'));
    }
    
    function testGetHolidayTitles() 
    {
        $titles = $this->driver->getHolidayTitles();
        $this->assertTrue(is_array($titles));
        $this->assertContains('Ascension Day', $titles);
        
        $titles = $this->driver->getHolidayTitles(null, 'de');
        $this->assertTrue(is_array($titles));
        $this->assertContains('Christi Himmelfahrt', $titles);
        
        $restrict = array('ascensionDay', 'easter');
        $filter = new Date_Holidays_Filter_Whitelist($restrict);
        $titles = $this->driver->getHolidayTitles($filter);
        $this->assertEquals(2, count($titles));
        foreach ($titles as $internalName => $_tmp) {
            $this->assertContains($internalName, $restrict);
        }
        
        $filter = new Date_Holidays_Filter_Blacklist($restrict);
        $titles = $this->driver->getHolidayTitles($filter);
        foreach ($restrict as $internalName) {
            $this->assertNotContains($internalName, array_keys($titles));
        }
    }
    
    function testGetInternalHolidayNames()
    {
        $this->assertTrue(is_array($this->driver->getInternalHolidayNames()));
    }
    
    function testGetYear() {
        $this->assertEquals(2005, $this->driver->getYear());
    }
    
    function testSetYear() 
    {
        $driver = Date_Holidays::factory('Germany', 2005, 'C');
        if (Date_Holidays::isError($driver)) {
            $this->fail('Driver creation failed: ' . $driver->getMessage());
        }
        
        $driver->setYear(1999);
        $this->assertEquals(1999, $driver->getYear());
    }
    
}

?>
