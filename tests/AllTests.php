<?php
if (!defined('PHPUnit_MAIN_METHOD')) {
	define('PHPUnit_MAIN_METHOD', 'Date_Holidays_AllTests::main');
}

require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

//require_once 'Date_HolidaysTest.php';
require_once 'Date_Holidays_TestSuite.php';
require_once 'Date_Holidays_Driver_TestSuite.php';
require_once 'Date_Holidays_Driver_Austria_TestSuite.php';
require_once 'Date_Holidays_Driver_Christian_TestSuite.php';
require_once 'Date_Holidays_Driver_EnglandWales_TestSuite.php';
require_once 'Date_Holidays_Driver_Germany_TestSuite.php';
require_once 'Date_Holidays_Driver_Ireland_TestSuite.php';
require_once 'Date_Holidays_Driver_Jewish_TestSuite.php';
require_once 'Date_Holidays_Driver_PHPdotNet_TestSuite.php';
require_once 'Date_Holidays_Driver_UNO_TestSuite.php';
require_once 'Date_Holidays_Driver_USA_TestSuite.php';
require_once 'Date_Holidays_Driver_Sweden_TestSuite.php';


class Date_Holidays_AllTests
{
	public static function main()
	{

		PHPUnit_TextUI_TestRunner::run(self::suite());
	}

	public static function suite()
	{
		$suite = new PHPUnit_Framework_TestSuite('Date_HolidaysTest');
		/** Add testsuites.  */

		$suite->addTestSuite('Date_Holidays_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_TestSuite');

		$suite->addTestSuite('Date_Holidays_Driver_Austria_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_Christian_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_EnglandWales_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_Germany_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_Ireland_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_Jewish_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_PHPdotNet_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_Sweden_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_UNO_TestSuite');
		$suite->addTestSuite('Date_Holidays_Driver_USA_TestSuite');

		return $suite;
	}
}

if (PHPUnit_MAIN_METHOD == 'Date_Holidays_AllTests::main') {
	Date_Holidays_AllTests::main();
}
?>
