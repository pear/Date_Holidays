<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'AllTests.php';

class Date_Holidays_Driver_Sweden_TestSuite extends PHPUnit_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
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
    }

}
?>
