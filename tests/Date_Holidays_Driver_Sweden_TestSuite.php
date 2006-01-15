<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'AllTests.php';

class Date_Holidays_Driver_Sweden_TestSuite extends PHPUnit_TestCase {
    

    var $testDates2005 = array(
        'newYearsDay'           => array('day'=>1,'month'=>1,'year'=>2005),
        'epiphany'              => array('day' => 6,'month'=>1,'year'=>2005),
        'goodFriday'            => array('day'=>25,'month'=>3,'year'=>2005),
        'easter'                => array('day'=>27,'month'=>3,'year'=>2005),
        'easterMonday'          => array('day'=>28,'month'=>3,'year'=>2005),
        'mayDay'                => array('day'=>1,'month'=>5,'year'=>2005),
        'ascensionDay'          => array('day'=>5,'month'=>5,'year'=>2005),
        'pentecost'             => array('day'=>15,'month'=>5,'year'=>2005),
        'swedenNationalDay'     => array('day'=>6,'month'=>6,'year'=>2005),
        'midSummerEve'          => array('day'=>24,'month'=>6,'year'=>2005),
        'midSummer'             => array('day'=>25,'month'=>6,'year'=>2005),
        'allSaintsDay'          => array('day'=>5,'month'=>11,'year'=>2005),
        'xmasEve'               => array('day'=>24,'month'=>12,'year'=>2005),
        'xmasDay'               => array('day'=>25,'month'=>12,'year'=>2005),
        'boxingDay'             => array('day'=>26,'month'=>12,'year'=>2005),
        'newYearsEve'           => array('day'=>31,'month'=>12,'year' => 2005)
    );
    
    var $testDates2006 = array(
        'newYearsDay'           => array('day'=>1,'month'=>1,'year'=>2006),
        'epiphany'              => array('day' => 6,'month'=>1,'year'=>2006),
        'goodFriday'            => array('day'=>14,'month'=>4,'year'=>2006),
        'easter'                => array('day'=>16,'month'=>4,'year'=>2006),
        'easterMonday'          => array('day'=>17,'month'=>4,'year'=>2006),
        'mayDay'                => array('day'=>1,'month'=>5,'year'=>2006),
        'ascensionDay'          => array('day'=>25,'month'=>5,'year'=>2006),
        'pentecost'             => array('day'=>4,'month'=>6,'year'=>2006),
        'swedenNationalDay'     => array('day'=>6,'month'=>6,'year'=>2006),
        'midSummerEve'          => array('day'=>23,'month'=>6,'year'=>2006),
        'midSummer'             => array('day'=>24,'month'=>6,'year'=>2006),
        'allSaintsDay'          => array('day'=>4,'month'=>11,'year'=>2006),
        'xmasEve'               => array('day'=>24,'month'=>12,'year'=>2006),
        'xmasDay'               => array('day'=>25,'month'=>12,'year'=>2006),
        'boxingDay'             => array('day'=>26,'month'=>12,'year'=>2006),
        'newYearsEve'           => array('day'=>31,'month'=>12,'year' => 2006)
    ); 

    function setUp() {} 
   
    function testHolidays2005() {
        $drv = Date_Holidays::factory('Sweden', 2005, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }
        
        
        foreach ($this->testDates2005 as $name => $dateInfo) {
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
   
    function testHolidays2006() {
        $drv = Date_Holidays::factory('Sweden', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }
        
        
        foreach ($this->testDates2006 as $name => $dateInfo) {
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
    
    function testGermanTranslations() {
        $locale = 'de_DE';
        
        $drv = Date_Holidays::factory('Sweden', 2005, $locale);
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }
        
        $result = $drv->addTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Sweden/de_DE.xml', $locale);
        
        $easter = $drv->getHoliday('easter');
        $this->assertEquals('Ostersonntag', $easter->getTitle(), 'Translated title for \'easter\'');
    }
    
    function testcompiledGermanTranslations() {
        $locale = 'de_DE';
        
        $drv = Date_Holidays::factory('Sweden', 2005, $locale);
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }
        
        $result = $drv->addCompiledTranslationFile(
                PEAR_DATADIR . '/Date_Holidays/lang/Sweden/de_DE.ser', $locale);
        
        $easter = $drv->getHoliday('easter');
        $this->assertEquals('Ostersonntag', $easter->getTitle(), 'Translated title for \'easter\'');
        
        $midsummerEve = $drv->getHoliday('midSummerEve');
        $this->assertEquals('Mittsommerabend', $midsummerEve->getTitle(), 'Translated title for \'midSummerEve\'');
    }

}
?>
