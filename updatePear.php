<?php
/**
 * updatePear.php
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

if ($_SERVER['argc'] != 4) {
    echo 'Wrong execution of file. ';
    echo 'Call like that: FILENAME <project-name> <php-interpreter path> <pear-executable path>';
    echo '<pear executable path>';
    exit;
}
$PACKAGENAME = $_SERVER['argv'][1];
$PHPCMD      = $_SERVER['argv'][2];
$PEARCMD     = $_SERVER['argv'][3];


$ret    = null;
$output = array();


echo 'Removing old pear-package-version ';
exec($PEARCMD . ' uninstall ' . $PACKAGENAME, $output, $ret);
echo printStatus($ret) . "\n";

echo 'Packaging new pear-package-version ';
$lastLine = exec($PEARCMD . ' package -n package.xml', $output, $ret);
echo printStatus($ret) . "\n";

echo 'Installing new pear-package-version ';
exec($PEARCMD . ' install -o ' . $lastLine, $output, $ret);
echo printStatus($ret) . "\n";


/**
 * given a numeric value, return '[OK]' (if zero)  or '[FAILED]'.
 * 
 * @param mixed $returnCode numeric value
 *
 * @access public
 * @return string
 */
function printStatus($returnCode) 
{
    return 0 == $returnCode ? '[OK]' : '[FAILED]';
}
?>
