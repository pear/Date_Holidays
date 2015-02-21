<?php
/**
 * Testsuite.
 *
 * PHP Version 5
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

if (stream_resolve_include_path('PHPUnit/Framework/TestCase.php')) {
    require_once "PHPUnit/Framework/TestCase.php";
    require_once "PHPUnit/Framework/TestSuite.php";
}

/**
 * Date_Holidays_TestSuite
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_TestSuite extends PHPUnit_Framework_TestCase
{

    /**
     * testFactory
     *
     * @access public
     * @return void
     */
    function testFactory()
    {
        $this->assertTrue(
            is_a(Date_Holidays::factory('Christian'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('Composite'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('Germany'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('Jewish'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('PHPdotNet'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('Sweden'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('UNO'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factory('USA'), 'Date_Holidays_Driver')
        );
    }

    /**
     * testFactoryISO3166
     *
     * @access public
     * @return void
     */
    function testFactoryISO3166()
    {
        $this->assertTrue(
            is_a(Date_Holidays::factoryISO3166('de'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factoryISO3166('deu'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factoryISO3166('se'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factoryISO3166('swe'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factoryISO3166('us'), 'Date_Holidays_Driver')
        );
        $this->assertTrue(
            is_a(Date_Holidays::factoryISO3166('usa'), 'Date_Holidays_Driver')
        );
    }
}
// vim:set et ts=4 sw=4:
?>
