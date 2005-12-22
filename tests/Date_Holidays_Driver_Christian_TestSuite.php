<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_Christian_TestSuite extends PHPUnit_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
          
        $drvChristian = Date_Holidays::factory('Christian', 2005, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drvChristian));
        if (Date_Holidays::isError($drvChristian)) {
            print_r($drvChristian);
            die($drvChristian->getMessage());
        }
    
         
        // test jesusCircumcision 
        $day = $drvChristian->getHoliday('jesusCircumcision');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('jesusCircumcision', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'jesusCircumcision');
        $this->assertEquals(1, $date->getMonth(), 'jesusCircumcision');
        $this->assertEquals(2005, $date->getYear(), 'jesusCircumcision');
        
        // test epiphany 
        $day = $drvChristian->getHoliday('epiphany');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('epiphany', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(6, $date->getDay(), 'epiphany');
        $this->assertEquals(1, $date->getMonth(), 'epiphany');
        $this->assertEquals(2005, $date->getYear(), 'epiphany');
        
        // test mariaCleaning 
        $day = $drvChristian->getHoliday('mariaCleaning');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mariaCleaning', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(2, $date->getDay(), 'mariaCleaning');
        $this->assertEquals(2, $date->getMonth(), 'mariaCleaning');
        $this->assertEquals(2005, $date->getYear(), 'mariaCleaning');
        
        // test josefsDay 
        $day = $drvChristian->getHoliday('josefsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('josefsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(19, $date->getDay(), 'josefsDay');
        $this->assertEquals(3, $date->getMonth(), 'josefsDay');
        $this->assertEquals(2005, $date->getYear(), 'josefsDay');
        
        // test mariaAnnouncement 
        $day = $drvChristian->getHoliday('mariaAnnouncement');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mariaAnnouncement', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(25, $date->getDay(), 'mariaAnnouncement');
        $this->assertEquals(3, $date->getMonth(), 'mariaAnnouncement');
        $this->assertEquals(2005, $date->getYear(), 'mariaAnnouncement');
        
        // test easter 
        $day = $drvChristian->getHoliday('easter');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('easter', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(27, $date->getDay(), 'easter');
        $this->assertEquals(3, $date->getMonth(), 'easter');
        $this->assertEquals(2005, $date->getYear(), 'easter');
        
        // test palmSunday 
        $day = $drvChristian->getHoliday('palmSunday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('palmSunday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(20, $date->getDay(), 'palmSunday');
        $this->assertEquals(3, $date->getMonth(), 'palmSunday');
        $this->assertEquals(2005, $date->getYear(), 'palmSunday');
        
        // test passionSunday 
        $day = $drvChristian->getHoliday('passionSunday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('passionSunday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(13, $date->getDay(), 'passionSunday');
        $this->assertEquals(3, $date->getMonth(), 'passionSunday');
        $this->assertEquals(2005, $date->getYear(), 'passionSunday');
        
        // test painfulFriday 
        $day = $drvChristian->getHoliday('painfulFriday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('painfulFriday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(18, $date->getDay(), 'painfulFriday');
        $this->assertEquals(3, $date->getMonth(), 'painfulFriday');
        $this->assertEquals(2005, $date->getYear(), 'painfulFriday');
        
        // test whiteSunday 
        $day = $drvChristian->getHoliday('whiteSunday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('whiteSunday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(3, $date->getDay(), 'whiteSunday');
        $this->assertEquals(4, $date->getMonth(), 'whiteSunday');
        $this->assertEquals(2005, $date->getYear(), 'whiteSunday');
        
        // test ashWednesday 
        $day = $drvChristian->getHoliday('ashWednesday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('ashWednesday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(9, $date->getDay(), 'ashWednesday');
        $this->assertEquals(2, $date->getMonth(), 'ashWednesday');
        $this->assertEquals(2005, $date->getYear(), 'ashWednesday');
        
        // test goodFriday 
        $day = $drvChristian->getHoliday('goodFriday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('goodFriday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(25, $date->getDay(), 'goodFriday');
        $this->assertEquals(3, $date->getMonth(), 'goodFriday');
        $this->assertEquals(2005, $date->getYear(), 'goodFriday');
        
        // test greenThursday 
        $day = $drvChristian->getHoliday('greenThursday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('greenThursday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(24, $date->getDay(), 'greenThursday');
        $this->assertEquals(3, $date->getMonth(), 'greenThursday');
        $this->assertEquals(2005, $date->getYear(), 'greenThursday');
        
        // test easterMonday 
        $day = $drvChristian->getHoliday('easterMonday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('easterMonday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(28, $date->getDay(), 'easterMonday');
        $this->assertEquals(3, $date->getMonth(), 'easterMonday');
        $this->assertEquals(2005, $date->getYear(), 'easterMonday');
        
        // test whitsun 
        $day = $drvChristian->getHoliday('whitsun');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('whitsun', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(15, $date->getDay(), 'whitsun');
        $this->assertEquals(5, $date->getMonth(), 'whitsun');
        $this->assertEquals(2005, $date->getYear(), 'whitsun');
        
        // test requestSunday 
        $day = $drvChristian->getHoliday('requestSunday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('requestSunday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'requestSunday');
        $this->assertEquals(5, $date->getMonth(), 'requestSunday');
        $this->assertEquals(2005, $date->getYear(), 'requestSunday');
        
        // test ascensionDay 
        $day = $drvChristian->getHoliday('ascensionDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('ascensionDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(5, $date->getDay(), 'ascensionDay');
        $this->assertEquals(5, $date->getMonth(), 'ascensionDay');
        $this->assertEquals(2005, $date->getYear(), 'ascensionDay');
        
        // test whitMonday 
        $day = $drvChristian->getHoliday('whitMonday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('whitMonday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(16, $date->getDay(), 'whitMonday');
        $this->assertEquals(5, $date->getMonth(), 'whitMonday');
        $this->assertEquals(2005, $date->getYear(), 'whitMonday');
        
        // test mariaHaunting 
        $day = $drvChristian->getHoliday('mariaHaunting');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mariaHaunting', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(31, $date->getDay(), 'mariaHaunting');
        $this->assertEquals(5, $date->getMonth(), 'mariaHaunting');
        $this->assertEquals(2005, $date->getYear(), 'mariaHaunting');
        
        // test trinitatis 
        $day = $drvChristian->getHoliday('trinitatis');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('trinitatis', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(22, $date->getDay(), 'trinitatis');
        $this->assertEquals(5, $date->getMonth(), 'trinitatis');
        $this->assertEquals(2005, $date->getYear(), 'trinitatis');
        
        // test corpusChristi 
        $day = $drvChristian->getHoliday('corpusChristi');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('corpusChristi', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(26, $date->getDay(), 'corpusChristi');
        $this->assertEquals(5, $date->getMonth(), 'corpusChristi');
        $this->assertEquals(2005, $date->getYear(), 'corpusChristi');
        
        // test heartJesus 
        $day = $drvChristian->getHoliday('heartJesus');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('heartJesus', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(3, $date->getDay(), 'heartJesus');
        $this->assertEquals(6, $date->getMonth(), 'heartJesus');
        $this->assertEquals(2005, $date->getYear(), 'heartJesus');
        
        // test johannisCelebration 
        $day = $drvChristian->getHoliday('johannisCelebration');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('johannisCelebration', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(24, $date->getDay(), 'johannisCelebration');
        $this->assertEquals(6, $date->getMonth(), 'johannisCelebration');
        $this->assertEquals(2005, $date->getYear(), 'johannisCelebration');
    
        // test petrusAndPaulus 
        $day = $drvChristian->getHoliday('petrusAndPaulus');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('petrusAndPaulus', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(29, $date->getDay(), 'petrusAndPaulus');
        $this->assertEquals(6, $date->getMonth(), 'petrusAndPaulus');
        $this->assertEquals(2005, $date->getYear(), 'petrusAndPaulus');
        
        // test mariaAscension 
        $day = $drvChristian->getHoliday('mariaAscension');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mariaAscension', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(15, $date->getDay(), 'mariaAscension');
        $this->assertEquals(8, $date->getMonth(), 'mariaAscension');
        $this->assertEquals(2005, $date->getYear(), 'mariaAscension');
        
        // test crossRaising 
        $day = $drvChristian->getHoliday('crossRaising');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('crossRaising', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(14, $date->getDay(), 'crossRaising');
        $this->assertEquals(9, $date->getMonth(), 'crossRaising');
        $this->assertEquals(2005, $date->getYear(), 'crossRaising');
        
        // test thanksGiving 
        $day = $drvChristian->getHoliday('thanksGiving');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('thanksGiving', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(2, $date->getDay(), 'thanksGiving');
        $this->assertEquals(10, $date->getMonth(), 'thanksGiving');
        $this->assertEquals(2005, $date->getYear(), 'thanksGiving');
        
        // test kermis 
        $day = $drvChristian->getHoliday('kermis');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('kermis', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(16, $date->getDay(), 'kermis');
        $this->assertEquals(10, $date->getMonth(), 'kermis');
        $this->assertEquals(2005, $date->getYear(), 'kermis');
        
        // test reformationDay 
        $day = $drvChristian->getHoliday('reformationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('reformationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(31, $date->getDay(), 'reformationDay');
        $this->assertEquals(10, $date->getMonth(), 'reformationDay');
        $this->assertEquals(2005, $date->getYear(), 'reformationDay');
        
        // test allSaintsDay 
        $day = $drvChristian->getHoliday('allSaintsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('allSaintsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'allSaintsDay');
        $this->assertEquals(11, $date->getMonth(), 'allSaintsDay');
        $this->assertEquals(2005, $date->getYear(), 'allSaintsDay');
        
        // test allSoulsDay 
        $day = $drvChristian->getHoliday('allSoulsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('allSoulsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(2, $date->getDay(), 'allSoulsDay');
        $this->assertEquals(11, $date->getMonth(), 'allSoulsDay');
        $this->assertEquals(2005, $date->getYear(), 'allSoulsDay');
        
        // test martinsDay 
        $day = $drvChristian->getHoliday('martinsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('martinsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(11, $date->getDay(), 'martinsDay');
        $this->assertEquals(11, $date->getMonth(), 'martinsDay');
        $this->assertEquals(2005, $date->getYear(), 'martinsDay');
        
        // test advent4 
        $day = $drvChristian->getHoliday('advent4');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('advent4', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(18, $date->getDay(), 'advent4');
        $this->assertEquals(12, $date->getMonth(), 'advent4');
        $this->assertEquals(2005, $date->getYear(), 'advent4');
        
        // test advent1 
        $day = $drvChristian->getHoliday('advent1');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('advent1', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(27, $date->getDay(), 'advent1');
        $this->assertEquals(11, $date->getMonth(), 'advent1');
        $this->assertEquals(2005, $date->getYear(), 'advent1');
        
        // test advent2 
        $day = $drvChristian->getHoliday('advent2');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('advent2', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(4, $date->getDay(), 'advent2');
        $this->assertEquals(12, $date->getMonth(), 'advent2');
        $this->assertEquals(2005, $date->getYear(), 'advent2');
        
        // test advent3 
        $day = $drvChristian->getHoliday('advent3');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('advent3', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(11, $date->getDay(), 'advent3');
        $this->assertEquals(12, $date->getMonth(), 'advent3');
        $this->assertEquals(2005, $date->getYear(), 'advent3');
        
        // test deathSunday 
        $day = $drvChristian->getHoliday('deathSunday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('deathSunday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(20, $date->getDay(), 'deathSunday');
        $this->assertEquals(11, $date->getMonth(), 'deathSunday');
        $this->assertEquals(2005, $date->getYear(), 'deathSunday');
        
        // test dayOfRepentance 
        $day = $drvChristian->getHoliday('dayOfRepentance');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfRepentance', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(16, $date->getDay(), 'dayOfRepentance');
        $this->assertEquals(11, $date->getMonth(), 'dayOfRepentance');
        $this->assertEquals(2005, $date->getYear(), 'dayOfRepentance');
        
        // test stNicholasDay 
        $day = $drvChristian->getHoliday('stNicholasDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('stNicholasDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(6, $date->getDay(), 'stNicholasDay');
        $this->assertEquals(12, $date->getMonth(), 'stNicholasDay');
        $this->assertEquals(2005, $date->getYear(), 'stNicholasDay');
        
        // test mariaConception 
        $day = $drvChristian->getHoliday('mariaConception');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mariaConception', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(8, $date->getDay(), 'mariaConception');
        $this->assertEquals(12, $date->getMonth(), 'mariaConception');
        $this->assertEquals(2005, $date->getYear(), 'mariaConception');
        
        // test xmasEve 
        $day = $drvChristian->getHoliday('xmasEve');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('xmasEve', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(24, $date->getDay(), 'xmasEve');
        $this->assertEquals(12, $date->getMonth(), 'xmasEve');
        $this->assertEquals(2005, $date->getYear(), 'xmasEve');
        
        // test xmasDay 
        $day = $drvChristian->getHoliday('xmasDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('xmasDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(25, $date->getDay(), 'xmasDay');
        $this->assertEquals(12, $date->getMonth(), 'xmasDay');
        $this->assertEquals(2005, $date->getYear(), 'xmasDay');
        
        // test boxingDay 
        $day = $drvChristian->getHoliday('boxingDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('boxingDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(26, $date->getDay(), 'boxingDay');
        $this->assertEquals(12, $date->getMonth(), 'boxingDay');
        $this->assertEquals(2005, $date->getYear(), 'boxingDay');
        
        // test newYearsEve 
        $day = $drvChristian->getHoliday('newYearsEve');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('newYearsEve', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(31, $date->getDay(), 'newYearsEve');
        $this->assertEquals(12, $date->getMonth(), 'newYearsEve');
        $this->assertEquals(2005, $date->getYear(), 'newYearsEve');

    }

}

?>
