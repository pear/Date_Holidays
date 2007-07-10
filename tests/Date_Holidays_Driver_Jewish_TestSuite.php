<?php
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_Jewish_TestSuite extends PHPUnit_Framework_TestCase {

    function setUp() {} 
   
    function testHolidays2005() {
    }

}
?>
