<?php
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_PHPdotNet_TestSuite extends PHPUnit_Framework_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
    /*
        // test lsmith 
        $day = $drv->getHoliday('lsmith');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('lsmith', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'lsmith');
        $this->assertEquals(, $date->getMonth(), 'lsmith');
        $this->assertEquals(2005, $date->getYear(), 'lsmith');
        
        // test schst 
        $day = $drv->getHoliday('schst');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('schst', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'schst');
        $this->assertEquals(, $date->getMonth(), 'schst');
        $this->assertEquals(2005, $date->getYear(), 'schst');
        
        // test luckec 
        $day = $drv->getHoliday('luckec');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('luckec', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'luckec');
        $this->assertEquals(, $date->getMonth(), 'luckec');
        $this->assertEquals(2005, $date->getYear(), 'luckec');
        
        // test arnaud 
        $day = $drv->getHoliday('arnaud');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('arnaud', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'arnaud');
        $this->assertEquals(, $date->getMonth(), 'arnaud');
        $this->assertEquals(2005, $date->getYear(), 'arnaud');
        
        // test sebastian 
        $day = $drv->getHoliday('sebastian');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('sebastian', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'sebastian');
        $this->assertEquals(, $date->getMonth(), 'sebastian');
        $this->assertEquals(2005, $date->getYear(), 'sebastian');
        
        // test akash 
        $day = $drv->getHoliday('akash');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('akash', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'akash');
        $this->assertEquals(, $date->getMonth(), 'akash');
        $this->assertEquals(2005, $date->getYear(), 'akash');
        
        // test cellog 
        $day = $drv->getHoliday('cellog');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('cellog', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'cellog');
        $this->assertEquals(, $date->getMonth(), 'cellog');
        $this->assertEquals(2005, $date->getYear(), 'cellog');
        
        // test ryansking 
        $day = $drv->getHoliday('ryansking');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('ryansking', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'ryansking');
        $this->assertEquals(, $date->getMonth(), 'ryansking');
        $this->assertEquals(2005, $date->getYear(), 'ryansking');
        
        // test dufuz 
        $day = $drv->getHoliday('dufuz');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dufuz', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'dufuz');
        $this->assertEquals(, $date->getMonth(), 'dufuz');
        $this->assertEquals(2005, $date->getYear(), 'dufuz');
        
        // test toby 
        $day = $drv->getHoliday('toby');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('toby', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'toby');
        $this->assertEquals(, $date->getMonth(), 'toby');
        $this->assertEquals(2005, $date->getYear(), 'toby');
        
        // test argh 
        $day = $drv->getHoliday('argh');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('argh', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'argh');
        $this->assertEquals(, $date->getMonth(), 'argh');
        $this->assertEquals(2005, $date->getYear(), 'argh');
        
        // test steggink 
        $day = $drv->getHoliday('steggink');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('steggink', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'steggink');
        $this->assertEquals(, $date->getMonth(), 'steggink');
        $this->assertEquals(2005, $date->getYear(), 'steggink');
        
        // test anderson 
        $day = $drv->getHoliday('anderson');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('anderson', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'anderson');
        $this->assertEquals(, $date->getMonth(), 'anderson');
        $this->assertEquals(2005, $date->getYear(), 'anderson');
        
        // test mcglinn 
        $day = $drv->getHoliday('mcglinn');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mcglinn', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'mcglinn');
        $this->assertEquals(, $date->getMonth(), 'mcglinn');
        $this->assertEquals(2005, $date->getYear(), 'mcglinn');
        
        // test lopez 
        $day = $drv->getHoliday('lopez');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('lopez', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'lopez');
        $this->assertEquals(, $date->getMonth(), 'lopez');
        $this->assertEquals(2005, $date->getYear(), 'lopez');
    */
    }

}

?>
