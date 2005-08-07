<?php
require_once 'PHPUnit.php';
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_USA_TestSuite extends PHPUnit_TestCase {

   function setUp() {

   } 
   function test_holidays_2005() {
      
     $holidays = &Date_Holidays::factory('USA', 2005, 'en_EN');
     if (Date_Holidays::isError($holidays)) {
       die('Factory was unable to produce driver-object');
     }

     // Test New Year Day -- it comes a day early this year
     $day = &$holidays->getHolidayDate('newYearsDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to make newYearsDay');
     } 
     $this->assertEquals(12, $day->getMonth());
     $this->assertEquals(31, $day->getDay());
     $this->assertEquals(2004, $day->getYear());

     // Test Martin Luther King Day 
     $day = &$holidays->getHolidayDate('mlkDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to that day');
     }

     $this->assertEquals(1,$day->getMonth());
     $this->assertEquals(17,$day->getDay());
 
     // Test Prez Day Luther King Day 
     $day = &$holidays->getHolidayDate('presidentsDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to that day');
     }
     $this->assertEquals(2,$day->getMonth());
     $this->assertEquals(21,$day->getDay());

     // Test Memorial Day Luther King Day 
     $day = &$holidays->getHolidayDate('memorialDay');
     if (Date_Holidays::isError($mem)) {
         die('Factory was unable to create memorialDay day');
     }
     $this->assertEquals(5,$day->getMonth());
     $this->assertEquals(30,$day->getDay());

     // Test 4th of July, It was on sunday this year
     $day = &$holidays->getHolidayDate('independenceDay');
     if (Date_Holidays::isError($ind)) {
         die('Factory was unable to create independenceDay day');
     }
     $this->assertEquals(7,$day->getMonth());
     $this->assertEquals(4,$day->getDay());

     // Test Labor Day, end of summer
     $day = &$holidays->getHolidayDate('laborDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create laborDay day');
     }
     $this->assertEquals(9,$day->getMonth());
     $this->assertEquals(5,$day->getDay());
     
     // Test Columbus Day, end of summer
     $day = &$holidays->getHolidayDate('columbusDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create columbusDay day');
     }
     $this->assertEquals(10,$day->getMonth());
     $this->assertEquals(10,$day->getDay());

     // Test Veteran's Day
     $day = &$holidays->getHolidayDate('veteransDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create veteransDay day');
     }
     $this->assertEquals(11,$day->getMonth());
     $this->assertEquals(14,$day->getDay());

     // Test Thanksgiving Day
     $day = &$holidays->getHolidayDate('thanksgivingDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create thanksgivingDay day');
     }
     $this->assertEquals(11,$day->getMonth());
     $this->assertEquals(24,$day->getDay());

     // Test Christmas Day
     $day = &$holidays->getHolidayDate('christmasDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create christmasDay day');
     }
     $this->assertEquals(12,$day->getMonth());
     $this->assertEquals(26,$day->getDay());
     $this->assertFalse($day->getDay() == 25);

   }

   function test_holidays_2004() {
      
     $holidays = &Date_Holidays::factory('USA', 2004, 'en_EN');
     if (Date_Holidays::isError($holidays)) {
       die('Factory was unable to produce driver-object');
     }


     // Test Martin Luther King Day 
     $day = &$holidays->getHolidayDate('mlkDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to that day');
     }

     $this->assertTrue($day->getMonth()==1 && $day->getDay()==19) ; 
     $this->assertEquals(1,$day->getMonth());
     $this->assertEquals(19,$day->getDay());
 
     // Test Prez Day Luther King Day 
     $day = &$holidays->getHolidayDate('presidentsDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to that day');
     }
     $this->assertEquals(2,$day->getMonth());
     $this->assertEquals(16,$day->getDay());

     // Test Memorial Day Luther King Day 
     $day = &$holidays->getHolidayDate('memorialDay');
     if (Date_Holidays::isError($mem)) {
         die('Factory was unable to create memorialDay day');
     }
     $this->assertEquals(5,$day->getMonth());
     $this->assertEquals(31,$day->getDay());

     // Test 4th of July, It was on sunday this year
     $day = &$holidays->getHolidayDate('independenceDay');
     if (Date_Holidays::isError($ind)) {
         die('Factory was unable to create independenceDay day');
     }
     $this->assertEquals(7,$day->getMonth());
     $this->assertEquals(5,$day->getDay());

     // Test Labor Day, end of summer
     $day = &$holidays->getHolidayDate('laborDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create laborDay day');
     }
     $this->assertEquals(9,$day->getMonth());
     $this->assertEquals(6,$day->getDay());
     
     // Test Columbus Day, end of summer
     $day = &$holidays->getHolidayDate('columbusDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create columbusDay day');
     }
     $this->assertEquals(10,$day->getMonth());
     $this->assertEquals(11,$day->getDay());

     // Test Veteran's Day
     $day = &$holidays->getHolidayDate('veteransDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create veteransDay day');
     }
     $this->assertEquals(11,$day->getMonth());
     $this->assertEquals(8,$day->getDay());

     // Test Thanksgiving Day
     $day = &$holidays->getHolidayDate('thanksgivingDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create thanksgivingDay day');
     }
     $this->assertEquals(11,$day->getMonth());
     $this->assertEquals(25,$day->getDay());

     // Test Christmas Day
     $day = &$holidays->getHolidayDate('christmasDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create christmasDay day');
     }
     $this->assertEquals(12,$day->getMonth());
     $this->assertEquals(24,$day->getDay());

   }
   
   function test_holidays_2006() {
      
     $holidays = &Date_Holidays::factory('USA', 2006, 'en_EN');
     if (Date_Holidays::isError($holidays)) {
       die('Factory was unable to produce driver-object');
     }

     // Test New Year Day -- it comes a day late this year
     $day = &$holidays->getHolidayDate('newYearsDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to make newYearsDay');
     } 
     $this->assertEquals(1, $day->getMonth());
     $this->assertEquals(2, $day->getDay());
     $this->assertEquals(2006, $day->getYear());

     // Test Martin Luther King Day 
     $day = &$holidays->getHolidayDate('mlkDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to that day');
     }

     $this->assertEquals(1,$day->getMonth());
     $this->assertEquals(16,$day->getDay());
 
     // Test Prez Day Luther King Day 
     $day = &$holidays->getHolidayDate('presidentsDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to that day');
     }
     $this->assertEquals(2,$day->getMonth());
     $this->assertEquals(20,$day->getDay());

     // Test Memorial Day 
     $day = &$holidays->getHolidayDate('memorialDay');
     if (Date_Holidays::isError($mem)) {
         die('Factory was unable to create memorialDay day');
     }
     $this->assertEquals(5,$day->getMonth());
     $this->assertEquals(29,$day->getDay());

     // Test 4th of July, It was on sunday this year
     $day = &$holidays->getHolidayDate('independenceDay');
     if (Date_Holidays::isError($ind)) {
         die('Factory was unable to create independenceDay day');
     }
     $this->assertEquals(7,$day->getMonth());
     $this->assertEquals(4,$day->getDay());

     // Test Labor Day, end of summer
     $day = &$holidays->getHolidayDate('laborDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create laborDay day');
     }
     $this->assertEquals(9,$day->getMonth());
     $this->assertEquals(4,$day->getDay());
     
     // Test Columbus Day, end of summer
     $day = &$holidays->getHolidayDate('columbusDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create columbusDay day');
     }
     $this->assertEquals(10,$day->getMonth());
     $this->assertEquals(9,$day->getDay());

     // Test Veteran's Day
     $day = &$holidays->getHolidayDate('veteransDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create veteransDay day');
     }
     $this->assertEquals(11,$day->getMonth());
     $this->assertEquals(13,$day->getDay());

     // Test Thanksgiving Day
     $day = &$holidays->getHolidayDate('thanksgivingDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create thanksgivingDay day');
     }
     $this->assertEquals(11,$day->getMonth());
     $this->assertEquals(23,$day->getDay());

     // Test Christmas Day
     $day = &$holidays->getHolidayDate('christmasDay');
     if (Date_Holidays::isError($day)) {
         die('Factory was unable to create christmasDay day');
     }
     $this->assertEquals(12,$day->getMonth());
     $this->assertEquals(25,$day->getDay());
     $this->assertFalse($day->getDay() == 27);

   }
   function test_holidays() {
     $holidays = &Date_Holidays::factory('USA', 2004, 'en_EN');
     if (Date_Holidays::isError($holidays)) {
       die('Factory was unable to produce driver-object');

     }
     // this was labor day this year
     $this->assertTrue($holidays->isHoliday(new Date('2004-09-06')));
     // this was thanksgiving year
     $this->assertTrue($holidays->isHoliday(new Date('2004-11-25')));
     // Chrismas is on the 24th
     $this->assertFalse($holidays->isHoliday(new Date('2004-12-25')));
     // Chrismas is on the 24th
     $this->assertTrue($holidays->isHoliday(new Date('2004-12-24')));
   } 

}

?>
