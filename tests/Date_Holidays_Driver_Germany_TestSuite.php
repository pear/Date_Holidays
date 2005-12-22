<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_Germany_TestSuite extends PHPUnit_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
         $drv = Date_Holidays::factory('Germany', 2005);
         $this->assertFalse(Date_Holidays::isError($drv));
         if (Date_Holidays::isError($drv)) {
            die($drv->getMessage());
         }
        
        // test newYearsDay 
        $day = $drv->getHoliday('newYearsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('newYearsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'newYearsDay');
        $this->assertEquals(1, $date->getMonth(), 'newYearsDay');
        $this->assertEquals(2005, $date->getYear(), 'newYearsDay');
        
        // test valentinesDay 
        $day = $drv->getHoliday('valentinesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('valentinesDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(14, $date->getDay(), 'valentinesDay');
        $this->assertEquals(2, $date->getMonth(), 'valentinesDay');
        $this->assertEquals(2005, $date->getYear(), 'valentinesDay');
        
        // test womenFasnet 
        $day = $drv->getHoliday('womenFasnet');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('womenFasnet', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(3, $date->getDay(), 'womenFasnet');
        $this->assertEquals(2, $date->getMonth(), 'womenFasnet');
        $this->assertEquals(2005, $date->getYear(), 'womenFasnet');
        
        // test fasnet 
        $day = $drv->getHoliday('fasnet');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('fasnet', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(8, $date->getDay(), 'fasnet');
        $this->assertEquals(2, $date->getMonth(), 'fasnet');
        $this->assertEquals(2005, $date->getYear(), 'fasnet');

        // test roseMonday 
        $day = $drv->getHoliday('roseMonday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('roseMonday', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(7, $date->getDay(), 'roseMonday');
        $this->assertEquals(2, $date->getMonth(), 'roseMonday');
        $this->assertEquals(2005, $date->getYear(), 'roseMonday');
        
        // test womensDay 
        $day = $drv->getHoliday('womensDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('womensDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(8, $date->getDay(), 'womensDay');
        $this->assertEquals(3, $date->getMonth(), 'womensDay');
        $this->assertEquals(2005, $date->getYear(), 'womensDay');
        
        // test april1st 
        $day = $drv->getHoliday('april1st');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('april1st', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'april1st');
        $this->assertEquals(4, $date->getMonth(), 'april1st');
        $this->assertEquals(2005, $date->getYear(), 'april1st');
        
        // test girlsDay 
        $day = $drv->getHoliday('girlsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('girlsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(28, $date->getDay(), 'girlsDay');
        $this->assertEquals(4, $date->getMonth(), 'girlsDay');
        $this->assertEquals(2005, $date->getYear(), 'girlsDay');
        
        // test earthDay 
        $day = $drv->getHoliday('earthDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('earthDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(22, $date->getDay(), 'earthDay');
        $this->assertEquals(4, $date->getMonth(), 'earthDay');
        $this->assertEquals(2005, $date->getYear(), 'earthDay');
        
        // test beersDay 
        $day = $drv->getHoliday('beersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('beersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(23, $date->getDay(), 'beersDay');
        $this->assertEquals(4, $date->getMonth(), 'beersDay');
        $this->assertEquals(2005, $date->getYear(), 'beersDay');
        
        // test walpurgisNight 
        $day = $drv->getHoliday('walpurgisNight');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('walpurgisNight', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(30, $date->getDay(), 'walpurgisNight');
        $this->assertEquals(4, $date->getMonth(), 'walpurgisNight');
        $this->assertEquals(2005, $date->getYear(), 'walpurgisNight');
        
        // test dayOfWork 
        $day = $drv->getHoliday('dayOfWork');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfWork', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'dayOfWork');
        $this->assertEquals(5, $date->getMonth(), 'dayOfWork');
        $this->assertEquals(2005, $date->getYear(), 'dayOfWork');
        
        // test laughingDay 
        $day = $drv->getHoliday('laughingDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('laughingDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'laughingDay');
        $this->assertEquals(5, $date->getMonth(), 'laughingDay');
        $this->assertEquals(2005, $date->getYear(), 'laughingDay');
        
        // test europeDay 
        $day = $drv->getHoliday('europeDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('europeDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(5, $date->getDay(), 'europeDay');
        $this->assertEquals(5, $date->getMonth(), 'europeDay');
        $this->assertEquals(2005, $date->getYear(), 'europeDay');
        
        // test mothersDay 
        $day = $drv->getHoliday('mothersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mothersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(8, $date->getDay(), 'mothersDay');
        $this->assertEquals(5, $date->getMonth(), 'mothersDay');
        $this->assertEquals(2005, $date->getYear(), 'mothersDay');
        
        // test endOfWWar2 
        $day = $drv->getHoliday('endOfWWar2');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('endOfWWar2', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(8, $date->getDay(), 'endOfWWar2');
        $this->assertEquals(5, $date->getMonth(), 'endOfWWar2');
        $this->assertEquals(2005, $date->getYear(), 'endOfWWar2');
        
        // test fathersDay 
        $day = $drv->getHoliday('fathersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('fathersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(5, $date->getDay(), 'fathersDay');
        $this->assertEquals(5, $date->getMonth(), 'fathersDay');
        $this->assertEquals(2005, $date->getYear(), 'fathersDay');
        
        // test aiDay 
        $day = $drv->getHoliday('aiDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('aiDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(28, $date->getDay(), 'aiDay');
        $this->assertEquals(5, $date->getMonth(), 'aiDay');
        $this->assertEquals(2005, $date->getYear(), 'aiDay');
        
        // test intChildrenDay 
        $day = $drv->getHoliday('intChildrenDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intChildrenDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'intChildrenDay');
        $this->assertEquals(6, $date->getMonth(), 'intChildrenDay');
        $this->assertEquals(2005, $date->getYear(), 'intChildrenDay');
        
        // test organDonationDay 
        $day = $drv->getHoliday('organDonationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('organDonationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(4, $date->getDay(), 'organDonationDay');
        $this->assertEquals(6, $date->getMonth(), 'organDonationDay');
        $this->assertEquals(2005, $date->getYear(), 'organDonationDay');
        
        // test dormouseDay 
        $day = $drv->getHoliday('dormouseDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dormouseDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(27, $date->getDay(), 'dormouseDay');
        $this->assertEquals(6, $date->getMonth(), 'dormouseDay');
        $this->assertEquals(2005, $date->getYear(), 'dormouseDay');
        
        // test christopherStreetDay 
        $day = $drv->getHoliday('christopherStreetDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('christopherStreetDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(27, $date->getDay(), 'christopherStreetDay');
        $this->assertEquals(6, $date->getMonth(), 'christopherStreetDay');
        $this->assertEquals(2005, $date->getYear(), 'christopherStreetDay');
        
        // test hiroshimaCommemorationDay 
        $day = $drv->getHoliday('hiroshimaCommemorationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('hiroshimaCommemorationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(6, $date->getDay(), 'hiroshimaCommemorationDay');
        $this->assertEquals(8, $date->getMonth(), 'hiroshimaCommemorationDay');
        $this->assertEquals(2005, $date->getYear(), 'hiroshimaCommemorationDay');
        
        // test augsburgPeaceCelebration 
        $day = $drv->getHoliday('augsburgPeaceCelebration');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('augsburgPeaceCelebration', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(8, $date->getDay(), 'augsburgPeaceCelebration');
        $this->assertEquals(8, $date->getMonth(), 'augsburgPeaceCelebration');
        $this->assertEquals(2005, $date->getYear(), 'augsburgPeaceCelebration');
        
        // test leftHandedDay 
        $day = $drv->getHoliday('leftHandedDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('leftHandedDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(13, $date->getDay(), 'leftHandedDay');
        $this->assertEquals(8, $date->getMonth(), 'leftHandedDay');
        $this->assertEquals(2005, $date->getYear(), 'leftHandedDay');
        
        // test antiWarDay 
        $day = $drv->getHoliday('antiWarDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('antiWarDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(1, $date->getDay(), 'antiWarDay');
        $this->assertEquals(9, $date->getMonth(), 'antiWarDay');
        $this->assertEquals(2005, $date->getYear(), 'antiWarDay');
        
        // test germanLanguageDay 
        $day = $drv->getHoliday('germanLanguageDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('germanLanguageDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(10, $date->getDay(), 'germanLanguageDay');
        $this->assertEquals(9, $date->getMonth(), 'germanLanguageDay');
        $this->assertEquals(2005, $date->getYear(), 'germanLanguageDay');
        
        // test diabetesDay 
        $day = $drv->getHoliday('diabetesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('diabetesDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(14, $date->getDay(), 'diabetesDay');
        $this->assertEquals(11, $date->getMonth(), 'diabetesDay');
        $this->assertEquals(2005, $date->getYear(), 'diabetesDay');
        
        // test germanUnificationDay 
        $day = $drv->getHoliday('germanUnificationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('germanUnificationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(3, $date->getDay(), 'germanUnificationDay');
        $this->assertEquals(10, $date->getMonth(), 'germanUnificationDay');
        $this->assertEquals(2005, $date->getYear(), 'germanUnificationDay');
        
        // test librariesDay 
        $day = $drv->getHoliday('librariesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('librariesDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(24, $date->getDay(), 'librariesDay');
        $this->assertEquals(10, $date->getMonth(), 'librariesDay');
        $this->assertEquals(2005, $date->getYear(), 'librariesDay');
        
        // test savingsDay 
        $day = $drv->getHoliday('savingsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('savingsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(30, $date->getDay(), 'savingsDay');
        $this->assertEquals(10, $date->getMonth(), 'savingsDay');
        $this->assertEquals(2005, $date->getYear(), 'savingsDay');
        
        // test halloween 
        $day = $drv->getHoliday('halloween');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('halloween', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(31, $date->getDay(), 'halloween');
        $this->assertEquals(10, $date->getMonth(), 'halloween');
        $this->assertEquals(2005, $date->getYear(), 'halloween');
        
        // test stampsDay 
        $day = $drv->getHoliday('stampsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('stampsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(30, $date->getDay(), 'stampsDay');
        $this->assertEquals(10, $date->getMonth(), 'stampsDay');
        $this->assertEquals(2005, $date->getYear(), 'stampsDay');
        
        // test mensDay 
        $day = $drv->getHoliday('mensDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mensDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(3, $date->getDay(), 'mensDay');
        $this->assertEquals(11, $date->getMonth(), 'mensDay');
        $this->assertEquals(2005, $date->getYear(), 'mensDay');
        
        // test wallOfBerlin 
        $day = $drv->getHoliday('wallOfBerlin');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('wallOfBerlin', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(9, $date->getDay(), 'wallOfBerlin');
        $this->assertEquals(11, $date->getMonth(), 'wallOfBerlin');
        $this->assertEquals(2005, $date->getYear(), 'wallOfBerlin');
        
        // test carnivalBeginning 
        $day = $drv->getHoliday('carnivalBeginning');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('carnivalBeginning', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(11, $date->getDay(), 'carnivalBeginning');
        $this->assertEquals(11, $date->getMonth(), 'carnivalBeginning');
        $this->assertEquals(2005, $date->getYear(), 'carnivalBeginning');
        
        // test dayOfMourning 
        $day = $drv->getHoliday('dayOfMourning');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfMourning', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(13, $date->getDay(), 'dayOfMourning');
        $this->assertEquals(11, $date->getMonth(), 'dayOfMourning');
        $this->assertEquals(2005, $date->getYear(), 'dayOfMourning');
    }
    
    function testHolidays2006() {
         $drv = Date_Holidays::factory('Germany', 2006);
         $this->assertFalse(Date_Holidays::isError($drv));
         if (Date_Holidays::isError($drv)) {
            die($drv->getMessage());
         }
         
        // test girlsDay 
        $day = $drv->getHoliday('girlsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('girlsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(27, $date->getDay(), 'girlsDay');
        $this->assertEquals(4, $date->getMonth(), 'girlsDay');
        $this->assertEquals(2006, $date->getYear(), 'girlsDay');
        
        // test christopherStreetDay 
        $day = $drv->getHoliday('christopherStreetDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('christopherStreetDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(27, $date->getDay(), 'christopherStreetDay');
        $this->assertEquals(6, $date->getMonth(), 'christopherStreetDay');
        $this->assertEquals(2006, $date->getYear(), 'christopherStreetDay');
    }
    
    function testHolidays2005stampsAndSavingsDay() {
        $drv = Date_Holidays::factory('Germany', 2005);
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
           die($drv->getMessage());
        }
        $holidays = $drv->getHolidayForDate('2005-10-30', null, true);
        $this->assertEquals('savingsDay', $holidays[0]->getInternalName(), 'should be savingsDay');
        $this->assertEquals('stampsDay', $holidays[1]->getInternalName(), 'should be stampsDay');
    }

}


?>
