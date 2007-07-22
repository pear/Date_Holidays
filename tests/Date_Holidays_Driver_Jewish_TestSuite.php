<?php
/**
 * Test class for running unit tests related to the driver for Jewish Holidays
 *
 * PHP Versions 4 and 5
 * 
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

/**
 * Test class for running unit tests related to the driver for Jewish Holidays
 * 
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Jewish_TestSuite extends PHPUnit_Framework_TestCase
{

    /**
     * setup 
     * 
     * @access public
     * @return void
     */
    function setUp()
    {
    } 
   
    /**
     * test Holidays for 2005 
     * 
     * @access public
     * @return void
     */
    function testHolidays2005()
    {
    }

}
?>
