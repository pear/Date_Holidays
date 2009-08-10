<?php
/**
 * a test class for running all Date_Holidays unit tests
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
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Date_Holidays_AllTests::main');
}

require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

require_once 'Date_Holidays_TestSuite.php';
require_once 'Date_Holidays_Driver_TestSuite.php';
require_once 'Date_Holidays_Bugfix_Retests_TestSuite.php';
require_once 'Date_Holidays_Driver_Austria_TestSuite.php';
require_once 'Date_Holidays_Driver_Brazil_TestSuite.php';
require_once 'Date_Holidays_Driver_Christian_TestSuite.php';
require_once 'Date_Holidays_Driver_EnglandWales_TestSuite.php';
require_once 'Date_Holidays_Driver_Germany_TestSuite.php';
require_once 'Date_Holidays_Driver_Iceland_TestSuite.php';
require_once 'Date_Holidays_Driver_Ireland_TestSuite.php';
require_once 'Date_Holidays_Driver_Jewish_TestSuite.php';
require_once 'Date_Holidays_Driver_PHPdotNet_TestSuite.php';
require_once 'Date_Holidays_Driver_Romania_TestSuite.php';
require_once 'Date_Holidays_Driver_Ukraine_TestSuite.php';
require_once 'Date_Holidays_Driver_UNO_TestSuite.php';
require_once 'Date_Holidays_Driver_USA_TestSuite.php';
require_once 'Date_Holidays_Driver_Sweden_TestSuite.php';


/**
 * a test class for running all Date_Holidays unit tests
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_AllTests
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
        $suite = new PHPUnit_Framework_TestSuite('Date_HolidaysTest');
        /** Add testsuites.  */

        $suite->addTestSuite('Date_Holidays_Bugfix_Retests_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Austria_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Christian_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_EnglandWales_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Germany_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Iceland_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Ireland_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Jewish_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_PHPdotNet_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Romania_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Sweden_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_Ukraine_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_UNO_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_USA_TestSuite');
        $suite->addTestSuite('Date_Holidays_Driver_TestSuite');
        $suite->addTestSuite('Date_Holidays_TestSuite');
        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Date_Holidays_AllTests::main') {
    Date_Holidays_AllTests::main();
}
?>
