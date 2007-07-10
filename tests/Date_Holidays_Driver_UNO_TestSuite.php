<?php
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_UNO_TestSuite extends PHPUnit_Framework_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
    /*
        // test leprosyDay 
        $day = $drv->getHoliday('leprosyDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('leprosyDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'leprosyDay');
        $this->assertEquals(, $date->getMonth(), 'leprosyDay');
        $this->assertEquals(2005, $date->getYear(), 'leprosyDay');
        
        // test nativeTongueDay 
        $day = $drv->getHoliday('nativeTongueDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('nativeTongueDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'nativeTongueDay');
        $this->assertEquals(, $date->getMonth(), 'nativeTongueDay');
        $this->assertEquals(2005, $date->getYear(), 'nativeTongueDay');
        
        // test womensDay 
        $day = $drv->getHoliday('womensDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('womensDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'womensDay');
        $this->assertEquals(, $date->getMonth(), 'womensDay');
        $this->assertEquals(2005, $date->getYear(), 'womensDay');
        
        // test worldConsumersDay 
        $day = $drv->getHoliday('worldConsumersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('worldConsumersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'worldConsumersDay');
        $this->assertEquals(, $date->getMonth(), 'worldConsumersDay');
        $this->assertEquals(2005, $date->getYear(), 'worldConsumersDay');
        
        // test intForestDay 
        $day = $drv->getHoliday('intForestDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intForestDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intForestDay');
        $this->assertEquals(, $date->getMonth(), 'intForestDay');
        $this->assertEquals(2005, $date->getYear(), 'intForestDay');
        
        // test intDayBeatingRacism 
        $day = $drv->getHoliday('intDayBeatingRacism');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intDayBeatingRacism', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intDayBeatingRacism');
        $this->assertEquals(, $date->getMonth(), 'intDayBeatingRacism');
        $this->assertEquals(2005, $date->getYear(), 'intDayBeatingRacism');
        
        // test dayOfPoesy 
        $day = $drv->getHoliday('dayOfPoesy');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfPoesy', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'dayOfPoesy');
        $this->assertEquals(, $date->getMonth(), 'dayOfPoesy');
        $this->assertEquals(2005, $date->getYear(), 'dayOfPoesy');
        
        // test dayOfWater 
        $day = $drv->getHoliday('dayOfWater');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfWater', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'dayOfWater');
        $this->assertEquals(, $date->getMonth(), 'dayOfWater');
        $this->assertEquals(2005, $date->getYear(), 'dayOfWater');
        
        // test meteorologyDay 
        $day = $drv->getHoliday('meteorologyDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('meteorologyDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'meteorologyDay');
        $this->assertEquals(, $date->getMonth(), 'meteorologyDay');
        $this->assertEquals(2005, $date->getYear(), 'meteorologyDay');
        
        // test tuberculosisDay 
        $day = $drv->getHoliday('tuberculosisDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('tuberculosisDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'tuberculosisDay');
        $this->assertEquals(, $date->getMonth(), 'tuberculosisDay');
        $this->assertEquals(2005, $date->getYear(), 'tuberculosisDay');
        
        // test worldsHealthDay 
        $day = $drv->getHoliday('worldsHealthDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('worldsHealthDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'worldsHealthDay');
        $this->assertEquals(, $date->getMonth(), 'worldsHealthDay');
        $this->assertEquals(2005, $date->getYear(), 'worldsHealthDay');
        
        // test bookAndCopyrightDay 
        $day = $drv->getHoliday('bookAndCopyrightDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('bookAndCopyrightDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'bookAndCopyrightDay');
        $this->assertEquals(, $date->getMonth(), 'bookAndCopyrightDay');
        $this->assertEquals(2005, $date->getYear(), 'bookAndCopyrightDay');
        
        // test treesDay 
        $day = $drv->getHoliday('treesDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('treesDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'treesDay');
        $this->assertEquals(, $date->getMonth(), 'treesDay');
        $this->assertEquals(2005, $date->getYear(), 'treesDay');
        
        // test intellectualPropertyDay 
        $day = $drv->getHoliday('intellectualPropertyDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intellectualPropertyDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intellectualPropertyDay');
        $this->assertEquals(, $date->getMonth(), 'intellectualPropertyDay');
        $this->assertEquals(2005, $date->getYear(), 'intellectualPropertyDay');
        
        // test intDayOfWork 
        $day = $drv->getHoliday('intDayOfWork');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intDayOfWork', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intDayOfWork');
        $this->assertEquals(, $date->getMonth(), 'intDayOfWork');
        $this->assertEquals(2005, $date->getYear(), 'intDayOfWork');
        
        // test freedomOfPressDay 
        $day = $drv->getHoliday('freedomOfPressDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('freedomOfPressDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'freedomOfPressDay');
        $this->assertEquals(, $date->getMonth(), 'freedomOfPressDay');
        $this->assertEquals(2005, $date->getYear(), 'freedomOfPressDay');
        
        // test dayOfTheSun 
        $day = $drv->getHoliday('dayOfTheSun');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('dayOfTheSun', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'dayOfTheSun');
        $this->assertEquals(, $date->getMonth(), 'dayOfTheSun');
        $this->assertEquals(2005, $date->getYear(), 'dayOfTheSun');
        
        // test intFamilyDay 
        $day = $drv->getHoliday('intFamilyDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intFamilyDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intFamilyDay');
        $this->assertEquals(, $date->getMonth(), 'intFamilyDay');
        $this->assertEquals(2005, $date->getYear(), 'intFamilyDay');
        
        // test telecommunicationsDay 
        $day = $drv->getHoliday('telecommunicationsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('telecommunicationsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'telecommunicationsDay');
        $this->assertEquals(, $date->getMonth(), 'telecommunicationsDay');
        $this->assertEquals(2005, $date->getYear(), 'telecommunicationsDay');
        
        // test culturalDevelopmentDay 
        $day = $drv->getHoliday('culturalDevelopmentDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('culturalDevelopmentDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'culturalDevelopmentDay');
        $this->assertEquals(, $date->getMonth(), 'culturalDevelopmentDay');
        $this->assertEquals(2005, $date->getYear(), 'culturalDevelopmentDay');
        
        // test biologicalDiversityDay 
        $day = $drv->getHoliday('biologicalDiversityDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('biologicalDiversityDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'biologicalDiversityDay');
        $this->assertEquals(, $date->getMonth(), 'biologicalDiversityDay');
        $this->assertEquals(2005, $date->getYear(), 'biologicalDiversityDay');
        
        // test africanLiberationDay 
        $day = $drv->getHoliday('africanLiberationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('africanLiberationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'africanLiberationDay');
        $this->assertEquals(, $date->getMonth(), 'africanLiberationDay');
        $this->assertEquals(2005, $date->getYear(), 'africanLiberationDay');
        
        // test unPeaceSquadsDay 
        $day = $drv->getHoliday('unPeaceSquadsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('unPeaceSquadsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'unPeaceSquadsDay');
        $this->assertEquals(, $date->getMonth(), 'unPeaceSquadsDay');
        $this->assertEquals(2005, $date->getYear(), 'unPeaceSquadsDay');
        
        // test nonsmokersDay 
        $day = $drv->getHoliday('nonsmokersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('nonsmokersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'nonsmokersDay');
        $this->assertEquals(, $date->getMonth(), 'nonsmokersDay');
        $this->assertEquals(2005, $date->getYear(), 'nonsmokersDay');
        
        // test farmersDay 
        $day = $drv->getHoliday('farmersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('farmersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'farmersDay');
        $this->assertEquals(, $date->getMonth(), 'farmersDay');
        $this->assertEquals(2005, $date->getYear(), 'farmersDay');
        
        // test environmentDay 
        $day = $drv->getHoliday('environmentDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('environmentDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'environmentDay');
        $this->assertEquals(, $date->getMonth(), 'environmentDay');
        $this->assertEquals(2005, $date->getYear(), 'environmentDay');
        
        // test africanChildrenDay 
        $day = $drv->getHoliday('africanChildrenDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('africanChildrenDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'africanChildrenDay');
        $this->assertEquals(, $date->getMonth(), 'africanChildrenDay');
        $this->assertEquals(2005, $date->getYear(), 'africanChildrenDay');
        
        // test desertDay 
        $day = $drv->getHoliday('desertDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('desertDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'desertDay');
        $this->assertEquals(, $date->getMonth(), 'desertDay');
        $this->assertEquals(2005, $date->getYear(), 'desertDay');
        
        // test africanFugitiveDay 
        $day = $drv->getHoliday('africanFugitiveDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('africanFugitiveDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'africanFugitiveDay');
        $this->assertEquals(, $date->getMonth(), 'africanFugitiveDay');
        $this->assertEquals(2005, $date->getYear(), 'africanFugitiveDay');
        
        // test antiDrugsDay 
        $day = $drv->getHoliday('antiDrugsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('antiDrugsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'antiDrugsDay');
        $this->assertEquals(, $date->getMonth(), 'antiDrugsDay');
        $this->assertEquals(2005, $date->getYear(), 'antiDrugsDay');
        
        // test intCoopDay 
        $day = $drv->getHoliday('intCoopDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intCoopDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intCoopDay');
        $this->assertEquals(, $date->getMonth(), 'intCoopDay');
        $this->assertEquals(2005, $date->getYear(), 'intCoopDay');
        
        // test populationDay 
        $day = $drv->getHoliday('populationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('populationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'populationDay');
        $this->assertEquals(, $date->getMonth(), 'populationDay');
        $this->assertEquals(2005, $date->getYear(), 'populationDay');
        
        // test indigenousPeopleDay 
        $day = $drv->getHoliday('indigenousPeopleDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('indigenousPeopleDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'indigenousPeopleDay');
        $this->assertEquals(, $date->getMonth(), 'indigenousPeopleDay');
        $this->assertEquals(2005, $date->getYear(), 'indigenousPeopleDay');
        
        // test intYouthDay 
        $day = $drv->getHoliday('intYouthDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intYouthDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intYouthDay');
        $this->assertEquals(, $date->getMonth(), 'intYouthDay');
        $this->assertEquals(2005, $date->getYear(), 'intYouthDay');
        
        // test slaveTradeDay 
        $day = $drv->getHoliday('slaveTradeDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('slaveTradeDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'slaveTradeDay');
        $this->assertEquals(, $date->getMonth(), 'slaveTradeDay');
        $this->assertEquals(2005, $date->getYear(), 'slaveTradeDay');
        
        // test alphabetizationDay 
        $day = $drv->getHoliday('alphabetizationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('alphabetizationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'alphabetizationDay');
        $this->assertEquals(, $date->getMonth(), 'alphabetizationDay');
        $this->assertEquals(2005, $date->getYear(), 'alphabetizationDay');
        
        // test ozoneLayerProtectionDay 
        $day = $drv->getHoliday('ozoneLayerProtectionDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('ozoneLayerProtectionDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'ozoneLayerProtectionDay');
        $this->assertEquals(, $date->getMonth(), 'ozoneLayerProtectionDay');
        $this->assertEquals(2005, $date->getYear(), 'ozoneLayerProtectionDay');
        
        // test intPeaceDay 
        $day = $drv->getHoliday('intPeaceDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intPeaceDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intPeaceDay');
        $this->assertEquals(, $date->getMonth(), 'intPeaceDay');
        $this->assertEquals(2005, $date->getYear(), 'intPeaceDay');
        
        // test tourismDay 
        $day = $drv->getHoliday('tourismDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('tourismDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'tourismDay');
        $this->assertEquals(, $date->getMonth(), 'tourismDay');
        $this->assertEquals(2005, $date->getYear(), 'tourismDay');
        
        // test intFugitiveDay 
        $day = $drv->getHoliday('intFugitiveDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('intFugitiveDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'intFugitiveDay');
        $this->assertEquals(, $date->getMonth(), 'intFugitiveDay');
        $this->assertEquals(2005, $date->getYear(), 'intFugitiveDay');
        
        // test agedPeopleDay 
        $day = $drv->getHoliday('agedPeopleDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('agedPeopleDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'agedPeopleDay');
        $this->assertEquals(, $date->getMonth(), 'agedPeopleDay');
        $this->assertEquals(2005, $date->getYear(), 'agedPeopleDay');
        
        // test animalsDay 
        $day = $drv->getHoliday('animalsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('animalsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'animalsDay');
        $this->assertEquals(, $date->getMonth(), 'animalsDay');
        $this->assertEquals(2005, $date->getYear(), 'animalsDay');
        
        // test outerSpaceWeek 
        $day = $drv->getHoliday('outerSpaceWeek');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('outerSpaceWeek', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'outerSpaceWeek');
        $this->assertEquals(, $date->getMonth(), 'outerSpaceWeek');
        $this->assertEquals(2005, $date->getYear(), 'outerSpaceWeek');
        
        // test habitatDay 
        $day = $drv->getHoliday('habitatDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('habitatDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'habitatDay');
        $this->assertEquals(, $date->getMonth(), 'habitatDay');
        $this->assertEquals(2005, $date->getYear(), 'habitatDay');
        
        // test teachersDay 
        $day = $drv->getHoliday('teachersDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('teachersDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'teachersDay');
        $this->assertEquals(, $date->getMonth(), 'teachersDay');
        $this->assertEquals(2005, $date->getYear(), 'teachersDay');
        
        // test postAssociationDay 
        $day = $drv->getHoliday('postAssociationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('postAssociationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'postAssociationDay');
        $this->assertEquals(, $date->getMonth(), 'postAssociationDay');
        $this->assertEquals(2005, $date->getYear(), 'postAssociationDay');
        
        // test sanityDay 
        $day = $drv->getHoliday('sanityDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('sanityDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'sanityDay');
        $this->assertEquals(, $date->getMonth(), 'sanityDay');
        $this->assertEquals(2005, $date->getYear(), 'sanityDay');
        
        // test nourishmentDay 
        $day = $drv->getHoliday('nourishmentDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('nourishmentDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'nourishmentDay');
        $this->assertEquals(, $date->getMonth(), 'nourishmentDay');
        $this->assertEquals(2005, $date->getYear(), 'nourishmentDay');
        
        // test povertyRemovalDay 
        $day = $drv->getHoliday('povertyRemovalDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('povertyRemovalDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'povertyRemovalDay');
        $this->assertEquals(, $date->getMonth(), 'povertyRemovalDay');
        $this->assertEquals(2005, $date->getYear(), 'povertyRemovalDay');
        
        // test unitedNationsDay 
        $day = $drv->getHoliday('unitedNationsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('unitedNationsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'unitedNationsDay');
        $this->assertEquals(, $date->getMonth(), 'unitedNationsDay');
        $this->assertEquals(2005, $date->getYear(), 'unitedNationsDay');
        
        // test evolvementInfoDay 
        $day = $drv->getHoliday('evolvementInfoDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('evolvementInfoDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'evolvementInfoDay');
        $this->assertEquals(, $date->getMonth(), 'evolvementInfoDay');
        $this->assertEquals(2005, $date->getYear(), 'evolvementInfoDay');
        
        // test evolvementInfoDay 
        $day = $drv->getHoliday('evolvementInfoDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('evolvementInfoDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'evolvementInfoDay');
        $this->assertEquals(, $date->getMonth(), 'evolvementInfoDay');
        $this->assertEquals(2005, $date->getYear(), 'evolvementInfoDay');
        
        // test environmentalExploitationDay 
        $day = $drv->getHoliday('environmentalExploitationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('environmentalExploitationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'environmentalExploitationDay');
        $this->assertEquals(, $date->getMonth(), 'environmentalExploitationDay');
        $this->assertEquals(2005, $date->getYear(), 'environmentalExploitationDay');
        
        // test toleranceDay 
        $day = $drv->getHoliday('toleranceDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('toleranceDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'toleranceDay');
        $this->assertEquals(, $date->getMonth(), 'toleranceDay');
        $this->assertEquals(2005, $date->getYear(), 'toleranceDay');
        
        // test africanIndustrializationDay 
        $day = $drv->getHoliday('africanIndustrializationDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('africanIndustrializationDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'africanIndustrializationDay');
        $this->assertEquals(, $date->getMonth(), 'africanIndustrializationDay');
        $this->assertEquals(2005, $date->getYear(), 'africanIndustrializationDay');
        
        // test worldChildrenDay 
        $day = $drv->getHoliday('worldChildrenDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('worldChildrenDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'worldChildrenDay');
        $this->assertEquals(, $date->getMonth(), 'worldChildrenDay');
        $this->assertEquals(2005, $date->getYear(), 'worldChildrenDay');
        
        // test televisionDay 
        $day = $drv->getHoliday('televisionDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('televisionDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'televisionDay');
        $this->assertEquals(, $date->getMonth(), 'televisionDay');
        $this->assertEquals(2005, $date->getYear(), 'televisionDay');
        
        // test noViolenceAgainstWomen 
        $day = $drv->getHoliday('noViolenceAgainstWomen');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('noViolenceAgainstWomen', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'noViolenceAgainstWomen');
        $this->assertEquals(, $date->getMonth(), 'noViolenceAgainstWomen');
        $this->assertEquals(2005, $date->getYear(), 'noViolenceAgainstWomen');
        
        // test palestinianSolidarity 
        $day = $drv->getHoliday('palestinianSolidarity');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('palestinianSolidarity', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'palestinianSolidarity');
        $this->assertEquals(, $date->getMonth(), 'palestinianSolidarity');
        $this->assertEquals(2005, $date->getYear(), 'palestinianSolidarity');
        
        // test worldAidsDay 
        $day = $drv->getHoliday('worldAidsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('worldAidsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'worldAidsDay');
        $this->assertEquals(, $date->getMonth(), 'worldAidsDay');
        $this->assertEquals(2005, $date->getYear(), 'worldAidsDay');
        
        // test againstSlaveryDay 
        $day = $drv->getHoliday('againstSlaveryDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('againstSlaveryDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'againstSlaveryDay');
        $this->assertEquals(, $date->getMonth(), 'againstSlaveryDay');
        $this->assertEquals(2005, $date->getYear(), 'againstSlaveryDay');
        
        // test disabledPeopleDay 
        $day = $drv->getHoliday('disabledPeopleDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('disabledPeopleDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'disabledPeopleDay');
        $this->assertEquals(, $date->getMonth(), 'disabledPeopleDay');
        $this->assertEquals(2005, $date->getYear(), 'disabledPeopleDay');
        
        // test evolvementHelperDay 
        $day = $drv->getHoliday('evolvementHelperDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('evolvementHelperDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'evolvementHelperDay');
        $this->assertEquals(, $date->getMonth(), 'evolvementHelperDay');
        $this->assertEquals(2005, $date->getYear(), 'evolvementHelperDay');
        
        // test civilAeronauticsDay 
        $day = $drv->getHoliday('civilAeronauticsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('civilAeronauticsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'civilAeronauticsDay');
        $this->assertEquals(, $date->getMonth(), 'civilAeronauticsDay');
        $this->assertEquals(2005, $date->getYear(), 'civilAeronauticsDay');
        
        // test humanRightsDay 
        $day = $drv->getHoliday('humanRightsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('humanRightsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'humanRightsDay');
        $this->assertEquals(, $date->getMonth(), 'humanRightsDay');
        $this->assertEquals(2005, $date->getYear(), 'humanRightsDay');
        
        // test unicefDay 
        $day = $drv->getHoliday('unicefDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('unicefDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'unicefDay');
        $this->assertEquals(, $date->getMonth(), 'unicefDay');
        $this->assertEquals(2005, $date->getYear(), 'unicefDay');
        
        // test migrantsDay 
        $day = $drv->getHoliday('migrantsDay');
        $this->assertFalse(Date_Holidays::isError($day));
        if (Date_Holidays::isError($day)) {
            die($day->getMessage());
        }
        $this->assertEquals('migrantsDay', $day->getInternalName());
        $date = $day->getDate();
        $this->assertEquals(, $date->getDay(), 'migrantsDay');
        $this->assertEquals(, $date->getMonth(), 'migrantsDay');
        $this->assertEquals(2005, $date->getYear(), 'migrantsDay');
    */
    }

}
?>
