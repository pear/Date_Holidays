<?
require 'PHPUnit.php';
require 'Date/Holidays.php';

class Date_Holidays_Driver_Christian_TestSuite extends PHPUnit_TestCase {

   function setUp() {} 
   
   function testHolidays2005() {
      
     $drvChristian = &Date_Holidays::factory('Christian', 2005, 'en_EN');
     $this->assertFalse(Date_Holidays::isError($drvChristian));
     if (Date_Holidays::isError($drvChristian)) {
        die($drvChristian->getMessage());
     }

     
    // test jesusCircumcision 
    $day = &$drvChristian->getHoliday('jesusCircumcision');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('jesusCircumcision', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(1, $date->getDay(), 'jesusCircumcision');
    $this->assertEquals(1, $date->getMonth(), 'jesusCircumcision');
    $this->assertEquals(2005, $date->getYear(), 'jesusCircumcision');
    
    // test epiphany 
    $day = &$drvChristian->getHoliday('epiphany');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('epiphany', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(6, $date->getDay(), 'epiphany');
    $this->assertEquals(1, $date->getMonth(), 'epiphany');
    $this->assertEquals(2005, $date->getYear(), 'epiphany');
    
    // test mariaCleaning 
    $day = &$drvChristian->getHoliday('mariaCleaning');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('mariaCleaning', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(2, $date->getDay(), 'mariaCleaning');
    $this->assertEquals(2, $date->getMonth(), 'mariaCleaning');
    $this->assertEquals(2005, $date->getYear(), 'mariaCleaning');
    
    // test josefsDay 
    $day = &$drvChristian->getHoliday('josefsDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('josefsDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(19, $date->getDay(), 'josefsDay');
    $this->assertEquals(3, $date->getMonth(), 'josefsDay');
    $this->assertEquals(2005, $date->getYear(), 'josefsDay');
    
    // test mariaAnnouncement 
    $day = &$drvChristian->getHoliday('mariaAnnouncement');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('mariaAnnouncement', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(25, $date->getDay(), 'mariaAnnouncement');
    $this->assertEquals(3, $date->getMonth(), 'mariaAnnouncement');
    $this->assertEquals(2005, $date->getYear(), 'mariaAnnouncement');
    
    // test easter 
    $day = &$drvChristian->getHoliday('easter');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('easter', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(27, $date->getDay(), 'easter');
    $this->assertEquals(3, $date->getMonth(), 'easter');
    $this->assertEquals(2005, $date->getYear(), 'easter');
    
    // test palmSunday 
    $day = &$drvChristian->getHoliday('palmSunday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('palmSunday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(20, $date->getDay(), 'palmSunday');
    $this->assertEquals(3, $date->getMonth(), 'palmSunday');
    $this->assertEquals(2005, $date->getYear(), 'palmSunday');
    
    // test passionSunday 
    $day = &$drvChristian->getHoliday('passionSunday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('passionSunday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(13, $date->getDay(), 'passionSunday');
    $this->assertEquals(3, $date->getMonth(), 'passionSunday');
    $this->assertEquals(2005, $date->getYear(), 'passionSunday');
    
    // test painfulFriday 
    $day = &$drvChristian->getHoliday('painfulFriday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('painfulFriday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(18, $date->getDay(), 'painfulFriday');
    $this->assertEquals(3, $date->getMonth(), 'painfulFriday');
    $this->assertEquals(2005, $date->getYear(), 'painfulFriday');
    
    // test whiteSunday 
    $day = &$drvChristian->getHoliday('whiteSunday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('whiteSunday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(3, $date->getDay(), 'whiteSunday');
    $this->assertEquals(4, $date->getMonth(), 'whiteSunday');
    $this->assertEquals(2005, $date->getYear(), 'whiteSunday');
    
    // test ashWednesday 
    $day = &$drvChristian->getHoliday('ashWednesday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('ashWednesday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(9, $date->getDay(), 'ashWednesday');
    $this->assertEquals(2, $date->getMonth(), 'ashWednesday');
    $this->assertEquals(2005, $date->getYear(), 'ashWednesday');
    
    // test goodFriday 
    $day = &$drvChristian->getHoliday('goodFriday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('goodFriday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(25, $date->getDay(), 'goodFriday');
    $this->assertEquals(3, $date->getMonth(), 'goodFriday');
    $this->assertEquals(2005, $date->getYear(), 'goodFriday');
    
    // test greenThursday 
    $day = &$drvChristian->getHoliday('greenThursday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('greenThursday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(24, $date->getDay(), 'greenThursday');
    $this->assertEquals(3, $date->getMonth(), 'greenThursday');
    $this->assertEquals(2005, $date->getYear(), 'greenThursday');
    
    // test easterMonday 
    $day = &$drvChristian->getHoliday('easterMonday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('easterMonday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(28, $date->getDay(), 'easterMonday');
    $this->assertEquals(3, $date->getMonth(), 'easterMonday');
    $this->assertEquals(2005, $date->getYear(), 'easterMonday');
    
    // test whitsun 
    $day = &$drvChristian->getHoliday('whitsun');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('whitsun', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(15, $date->getDay(), 'whitsun');
    $this->assertEquals(5, $date->getMonth(), 'whitsun');
    $this->assertEquals(2005, $date->getYear(), 'whitsun');
    
    // test requestSunday 
    $day = &$drvChristian->getHoliday('requestSunday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('requestSunday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(1, $date->getDay(), 'requestSunday');
    $this->assertEquals(5, $date->getMonth(), 'requestSunday');
    $this->assertEquals(2005, $date->getYear(), 'requestSunday');
    
    // test ascensionDay 
    $day = &$drvChristian->getHoliday('ascensionDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('ascensionDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(5, $date->getDay(), 'ascensionDay');
    $this->assertEquals(5, $date->getMonth(), 'ascensionDay');
    $this->assertEquals(2005, $date->getYear(), 'ascensionDay');
    
    // test whitMonday 
    $day = &$drvChristian->getHoliday('whitMonday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('whitMonday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(16, $date->getDay(), 'whitMonday');
    $this->assertEquals(5, $date->getMonth(), 'whitMonday');
    $this->assertEquals(2005, $date->getYear(), 'whitMonday');
    
    // test mariaHaunting 
    $day = &$drvChristian->getHoliday('mariaHaunting');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('mariaHaunting', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(2, $date->getDay(), 'mariaHaunting');
    $this->assertEquals(7, $date->getMonth(), 'mariaHaunting');
    $this->assertEquals(2005, $date->getYear(), 'mariaHaunting');
    
    // test trinitatis 
    $day = &$drvChristian->getHoliday('trinitatis');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('trinitatis', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(22, $date->getDay(), 'trinitatis');
    $this->assertEquals(5, $date->getMonth(), 'trinitatis');
    $this->assertEquals(2005, $date->getYear(), 'trinitatis');
    
    // test corpusChristi 
    $day = &$drvChristian->getHoliday('corpusChristi');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('corpusChristi', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(26, $date->getDay(), 'corpusChristi');
    $this->assertEquals(5, $date->getMonth(), 'corpusChristi');
    $this->assertEquals(2005, $date->getYear(), 'corpusChristi');
    
    // test heartJesus 
    $day = &$drvChristian->getHoliday('heartJesus');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('heartJesus', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(3, $date->getDay(), 'heartJesus');
    $this->assertEquals(6, $date->getMonth(), 'heartJesus');
    $this->assertEquals(2005, $date->getYear(), 'heartJesus');
    
    // test johannisCelebration 
    $day = &$drvChristian->getHoliday('johannisCelebration');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('johannisCelebration', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(24, $date->getDay(), 'johannisCelebration');
    $this->assertEquals(6, $date->getMonth(), 'johannisCelebration');
    $this->assertEquals(2005, $date->getYear(), 'johannisCelebration');
/*    
    // test petrusAndPaulus 
    $day = &$drvChristian->getHoliday('petrusAndPaulus');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('petrusAndPaulus', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test mariaAscension 
    $day = &$drvChristian->getHoliday('mariaAscension');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('mariaAscension', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test crossRaising 
    $day = &$drvChristian->getHoliday('crossRaising');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('crossRaising', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test thanksGiving 
    $day = &$drvChristian->getHoliday('thanksGiving');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('thanksGiving', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test kermis 
    $day = &$drvChristian->getHoliday('kermis');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('kermis', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test reformationDay 
    $day = &$drvChristian->getHoliday('reformationDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('reformationDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test allSaintsDay 
    $day = &$drvChristian->getHoliday('allSaintsDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('allSaintsDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test allSoulsDay 
    $day = &$drvChristian->getHoliday('allSoulsDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('allSoulsDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test martinsDay 
    $day = &$drvChristian->getHoliday('martinsDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('martinsDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test advent4 
    $day = &$drvChristian->getHoliday('advent4');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('advent4', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test advent1 
    $day = &$drvChristian->getHoliday('advent1');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('advent1', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test advent2 
    $day = &$drvChristian->getHoliday('advent2');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('advent2', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test advent3 
    $day = &$drvChristian->getHoliday('advent3');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('advent3', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test deathSunday 
    $day = &$drvChristian->getHoliday('deathSunday');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('deathSunday', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test dayOfRepentance 
    $day = &$drvChristian->getHoliday('dayOfRepentance');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('dayOfRepentance', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test stNicholasDay 
    $day = &$drvChristian->getHoliday('stNicholasDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('stNicholasDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test mariaConception 
    $day = &$drvChristian->getHoliday('mariaConception');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('mariaConception', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test xmasEve 
    $day = &$drvChristian->getHoliday('xmasEve');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('xmasEve', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test xmasDay 
    $day = &$drvChristian->getHoliday('xmasDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('xmasDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test boxingDay 
    $day = &$drvChristian->getHoliday('boxingDay');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('boxingDay', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
    
    // test newYearsEve 
    $day = &$drvChristian->getHoliday('newYearsEve');
    $this->assertFalse(Date_Holidays::isError($day));
    if (Date_Holidays::isError($day)) {
        die($day->getMessage());
    }
    $this->assertEquals('newYearsEve', $day->getInternalName());
    $date = &$day->getDate();
    $this->assertEquals(, $date->getDay());
    $this->assertEquals(, $date->getMonth());
    $this->assertEquals(2005, $date->getYear());
*/
     


   }

}

$suite  = new PHPUnit_TestSuite('Date_Holidays_Driver_Christian_TestSuite');
$result = PHPUnit::run($suite);
echo $result->toString(); 

