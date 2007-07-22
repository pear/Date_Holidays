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

require_once 'PHPUnit.php';
require_once 'Date_Holidays_TestSuite.php';
require_once 'Date_Holidays_Driver_TestSuite.php';
require_once 'Date_Holidays_Driver_Christian_TestSuite.php';
require_once 'Date_Holidays_Driver_Germany_TestSuite.php';
require_once 'Date_Holidays_Driver_Jewish_TestSuite.php';
require_once 'Date_Holidays_Driver_PHPdotNet_TestSuite.php';
require_once 'Date_Holidays_Driver_UNO_TestSuite.php';
require_once 'Date_Holidays_Driver_USA_TestSuite.php';
require_once 'Date_Holidays_Driver_Sweden_TestSuite.php';

define('PEAR_DATADIR', '/var/lib/pear5/data');

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
