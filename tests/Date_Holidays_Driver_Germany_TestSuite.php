<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_Germany_TestSuite extends PHPUnit_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
    /*
        // test newYearsDay 
        $day = &$drv->getHoliday('newYearsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('newYearsDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'newYearsDay');
        $this->assertEquals(, $date->getMonth(), 'newYearsDay');
        $this->assertEquals(2005, $date->getYear(), 'newYearsDay');
        
        // test valentinesDay 
        $day = &$drv->getHoliday('valentinesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('valentinesDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'valentinesDay');
        $this->assertEquals(, $date->getMonth(), 'valentinesDay');
        $this->assertEquals(2005, $date->getYear(), 'valentinesDay');
        
        // test womenFasnet 
        $day = &$drv->getHoliday('womenFasnet');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('womenFasnet', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'womenFasnet');
        $this->assertEquals(, $date->getMonth(), 'womenFasnet');
        $this->assertEquals(2005, $date->getYear(), 'womenFasnet');
        
        // test fasnet 
        $day = &$drv->getHoliday('fasnet');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('fasnet', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'fasnet');
        $this->assertEquals(, $date->getMonth(), 'fasnet');
        $this->assertEquals(2005, $date->getYear(), 'fasnet');
        
        // test roseMonday 
        $day = &$drv->getHoliday('roseMonday');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('roseMonday', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'roseMonday');
        $this->assertEquals(, $date->getMonth(), 'roseMonday');
        $this->assertEquals(2005, $date->getYear(), 'roseMonday');
        
        // test womensDay 
        $day = &$drv->getHoliday('womensDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('womensDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'womensDay');
        $this->assertEquals(, $date->getMonth(), 'womensDay');
        $this->assertEquals(2005, $date->getYear(), 'womensDay');
        
        // test april1st 
        $day = &$drv->getHoliday('april1st');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('april1st', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'april1st');
        $this->assertEquals(, $date->getMonth(), 'april1st');
        $this->assertEquals(2005, $date->getYear(), 'april1st');
        
        // test girlsDay 
        $day = &$drv->getHoliday('girlsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('girlsDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'girlsDay');
        $this->assertEquals(, $date->getMonth(), 'girlsDay');
        $this->assertEquals(2005, $date->getYear(), 'girlsDay');
        
        // test earthDay 
        $day = &$drv->getHoliday('earthDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('earthDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'earthDay');
        $this->assertEquals(, $date->getMonth(), 'earthDay');
        $this->assertEquals(2005, $date->getYear(), 'earthDay');
        
        // test beersDay 
        $day = &$drv->getHoliday('beersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('beersDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'beersDay');
        $this->assertEquals(, $date->getMonth(), 'beersDay');
        $this->assertEquals(2005, $date->getYear(), 'beersDay');
        
        // test againstNoiseDay 
        $day = &$drv->getHoliday('againstNoiseDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('againstNoiseDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'againstNoiseDay');
        $this->assertEquals(, $date->getMonth(), 'againstNoiseDay');
        $this->assertEquals(2005, $date->getYear(), 'againstNoiseDay');
        
        // test walpurgisNight 
        $day = &$drv->getHoliday('walpurgisNight');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('walpurgisNight', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'walpurgisNight');
        $this->assertEquals(, $date->getMonth(), 'walpurgisNight');
        $this->assertEquals(2005, $date->getYear(), 'walpurgisNight');
        
        // test dayOfWork 
        $day = &$drv->getHoliday('dayOfWork');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfWork', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'dayOfWork');
        $this->assertEquals(, $date->getMonth(), 'dayOfWork');
        $this->assertEquals(2005, $date->getYear(), 'dayOfWork');
        
        // test laughingDay 
        $day = &$drv->getHoliday('laughingDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('laughingDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'laughingDay');
        $this->assertEquals(, $date->getMonth(), 'laughingDay');
        $this->assertEquals(2005, $date->getYear(), 'laughingDay');
        
        // test europeDay 
        $day = &$drv->getHoliday('europeDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('europeDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'europeDay');
        $this->assertEquals(, $date->getMonth(), 'europeDay');
        $this->assertEquals(2005, $date->getYear(), 'europeDay');
        
        // test mothersDay 
        $day = &$drv->getHoliday('mothersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mothersDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'mothersDay');
        $this->assertEquals(, $date->getMonth(), 'mothersDay');
        $this->assertEquals(2005, $date->getYear(), 'mothersDay');
        
        // test endOfWWar2 
        $day = &$drv->getHoliday('endOfWWar2');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('endOfWWar2', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'endOfWWar2');
        $this->assertEquals(, $date->getMonth(), 'endOfWWar2');
        $this->assertEquals(2005, $date->getYear(), 'endOfWWar2');
        
        // test fathersDay 
        $day = &$drv->getHoliday('fathersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('fathersDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'fathersDay');
        $this->assertEquals(, $date->getMonth(), 'fathersDay');
        $this->assertEquals(2005, $date->getYear(), 'fathersDay');
        
        // test aiDay 
        $day = &$drv->getHoliday('aiDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('aiDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'aiDay');
        $this->assertEquals(, $date->getMonth(), 'aiDay');
        $this->assertEquals(2005, $date->getYear(), 'aiDay');
        
        // test intChildrenDay 
        $day = &$drv->getHoliday('intChildrenDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intChildrenDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'intChildrenDay');
        $this->assertEquals(, $date->getMonth(), 'intChildrenDay');
        $this->assertEquals(2005, $date->getYear(), 'intChildrenDay');
        
        // test organDonationDay 
        $day = &$drv->getHoliday('organDonationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('organDonationDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'organDonationDay');
        $this->assertEquals(, $date->getMonth(), 'organDonationDay');
        $this->assertEquals(2005, $date->getYear(), 'organDonationDay');
        
        // test dormouseDay 
        $day = &$drv->getHoliday('dormouseDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dormouseDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'dormouseDay');
        $this->assertEquals(, $date->getMonth(), 'dormouseDay');
        $this->assertEquals(2005, $date->getYear(), 'dormouseDay');
        
        // test christopherStreetDay 
        $day = &$drv->getHoliday('christopherStreetDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('christopherStreetDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'christopherStreetDay');
        $this->assertEquals(, $date->getMonth(), 'christopherStreetDay');
        $this->assertEquals(2005, $date->getYear(), 'christopherStreetDay');
        
        // test hiroshimaCommemorationDay 
        $day = &$drv->getHoliday('hiroshimaCommemorationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('hiroshimaCommemorationDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'hiroshimaCommemorationDay');
        $this->assertEquals(, $date->getMonth(), 'hiroshimaCommemorationDay');
        $this->assertEquals(2005, $date->getYear(), 'hiroshimaCommemorationDay');
        
        // test augsburgPeaceCelebration 
        $day = &$drv->getHoliday('augsburgPeaceCelebration');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('augsburgPeaceCelebration', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'augsburgPeaceCelebration');
        $this->assertEquals(, $date->getMonth(), 'augsburgPeaceCelebration');
        $this->assertEquals(2005, $date->getYear(), 'augsburgPeaceCelebration');
        
        // test leftHandedDay 
        $day = &$drv->getHoliday('leftHandedDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('leftHandedDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'leftHandedDay');
        $this->assertEquals(, $date->getMonth(), 'leftHandedDay');
        $this->assertEquals(2005, $date->getYear(), 'leftHandedDay');
        
        // test antiWarDay 
        $day = &$drv->getHoliday('antiWarDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('antiWarDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'antiWarDay');
        $this->assertEquals(, $date->getMonth(), 'antiWarDay');
        $this->assertEquals(2005, $date->getYear(), 'antiWarDay');
        
        // test germanLanguageDay 
        $day = &$drv->getHoliday('germanLanguageDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('germanLanguageDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'germanLanguageDay');
        $this->assertEquals(, $date->getMonth(), 'germanLanguageDay');
        $this->assertEquals(2005, $date->getYear(), 'germanLanguageDay');
        
        // test diabetesDay 
        $day = &$drv->getHoliday('diabetesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('diabetesDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'diabetesDay');
        $this->assertEquals(, $date->getMonth(), 'diabetesDay');
        $this->assertEquals(2005, $date->getYear(), 'diabetesDay');
        
        // test germanUnificationDay 
        $day = &$drv->getHoliday('germanUnificationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('germanUnificationDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'germanUnificationDay');
        $this->assertEquals(, $date->getMonth(), 'germanUnificationDay');
        $this->assertEquals(2005, $date->getYear(), 'germanUnificationDay');
        
        // test librariesDay 
        $day = &$drv->getHoliday('librariesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('librariesDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'librariesDay');
        $this->assertEquals(, $date->getMonth(), 'librariesDay');
        $this->assertEquals(2005, $date->getYear(), 'librariesDay');
        
        // test savingsDay 
        $day = &$drv->getHoliday('savingsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('savingsDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'savingsDay');
        $this->assertEquals(, $date->getMonth(), 'savingsDay');
        $this->assertEquals(2005, $date->getYear(), 'savingsDay');
        
        // test halloween 
        $day = &$drv->getHoliday('halloween');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('halloween', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'halloween');
        $this->assertEquals(, $date->getMonth(), 'halloween');
        $this->assertEquals(2005, $date->getYear(), 'halloween');
        
        // test stampsDay 
        $day = &$drv->getHoliday('stampsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('stampsDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'stampsDay');
        $this->assertEquals(, $date->getMonth(), 'stampsDay');
        $this->assertEquals(2005, $date->getYear(), 'stampsDay');
        
        // test mensDay 
        $day = &$drv->getHoliday('mensDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('mensDay', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'mensDay');
        $this->assertEquals(, $date->getMonth(), 'mensDay');
        $this->assertEquals(2005, $date->getYear(), 'mensDay');
        
        // test wallOfBerlin 
        $day = &$drv->getHoliday('wallOfBerlin');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('wallOfBerlin', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'wallOfBerlin');
        $this->assertEquals(, $date->getMonth(), 'wallOfBerlin');
        $this->assertEquals(2005, $date->getYear(), 'wallOfBerlin');
        
        // test carnivalBeginning 
        $day = &$drv->getHoliday('carnivalBeginning');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('carnivalBeginning', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'carnivalBeginning');
        $this->assertEquals(, $date->getMonth(), 'carnivalBeginning');
        $this->assertEquals(2005, $date->getYear(), 'carnivalBeginning');
        
        // test dayOfMourning 
        $day = &$drv->getHoliday('dayOfMourning');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfMourning', $day->getInternalName());
        $date = &$day->getDate();
        $this->assertEquals(, $date->getDay(), 'dayOfMourning');
        $this->assertEquals(, $date->getMonth(), 'dayOfMourning');
        $this->assertEquals(2005, $date->getYear(), 'dayOfMourning');
    */
    }

}


?>
