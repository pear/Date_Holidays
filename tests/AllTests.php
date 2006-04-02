<?php

error_reporting(E_ALL);

require_once 'PHPUnit.php';
require_once 'Date_Holidays_Driver_TestSuite.php';
require_once 'Date_Holidays_Driver_Christian_TestSuite.php';
require_once 'Date_Holidays_Driver_Germany_TestSuite.php';
require_once 'Date_Holidays_Driver_Jewish_TestSuite.php';
require_once 'Date_Holidays_Driver_PHPdotNet_TestSuite.php';
require_once 'Date_Holidays_Driver_UNO_TestSuite.php';
require_once 'Date_Holidays_Driver_USA_TestSuite.php';
require_once 'Date_Holidays_Driver_Sweden_TestSuite.php';

define('PEAR_DATADIR', '@data_dir@');

$allTestsSuite = new PHPUnit_TestSuite();

$allTestsSuite->addTestSuite('Date_Holidays_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_TestSuite');

$allTestsSuite->addTestSuite('Date_Holidays_Driver_Christian_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_Germany_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_Jewish_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_PHPdotNet_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_UNO_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_USA_TestSuite');
$allTestsSuite->addTestSuite('Date_Holidays_Driver_Sweden_TestSuite');

$result = PHPUnit::run($allTestsSuite);
echo $result->toString(); 

?>
