<?php
/**
 * a test class for running all undeployed Date_Holidays unit tests
 *
 * PHP versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

error_reporting(E_ALL);

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'AllTestsUndeployed::main');
}

require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

require_once 'Date_Holidays_TestSuite.php';
require_once 'Date_Holidays_Driver_TestSuite.php';
require_once 'Date_Holidays_Driver_Christian_TestSuite.php';
require_once 'Date_Holidays_Driver_Germany_TestSuite.php';
require_once 'Date_Holidays_Driver_Jewish_TestSuite.php';
require_once 'Date_Holidays_Driver_PHPdotNet_TestSuite.php';
require_once 'Date_Holidays_Driver_UNO_TestSuite.php';
require_once 'Date_Holidays_Driver_USA_TestSuite.php';
require_once 'Date_Holidays_Driver_Sweden_TestSuite.php';

/**
 * a test class for running all Date_Holidays unit tests whilst the package is undeployed.
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class AllTestsUndeployed
{
    /**
     * main
     *
     * @static
     * @access public
     * @return void
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * suite
     *
     * @static
     * @access public
     * @return void
     */
    public static function suite()
    {
        $allTestsSuite = new PHPUnit_Framework_TestSuite("Date_Holidays Tests");

        $allTestsSuite->addTestSuite('Date_Holidays_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_TestSuite');

        $allTestsSuite->addTestSuite('Date_Holidays_Driver_Christian_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_Germany_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_Jewish_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_PHPdotNet_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_UNO_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_USA_TestSuite');
        $allTestsSuite->addTestSuite('Date_Holidays_Driver_Sweden_TestSuite');
        return $allTestsSuite;
    }
}

if (PHPUnit_MAIN_METHOD == 'AllTestsUndeployed::main') {
    AllTestsUndeployed::main();
}
?>
