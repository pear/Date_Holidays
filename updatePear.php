#!/usr/bin/php
<?php

$PACKAGENAME    = 'Date_Holidays';
$PEARCMD        = 'C:\Programme\php\php-5.1.1\pear.bat';
$PHPCMD         = 'C:\Programme\php\php-5.1.1\php.exe';





$ret = null;
$output = array();

echo 'Generating package.xml ';
exec($PHPCMD . ' package.php make', $output, $ret);
echo printStatus($ret) . "\n";

echo 'Removing old pear-package-version ';
exec($PEARCMD . ' uninstall ' . $PACKAGENAME, $output, $ret);
echo printStatus($ret) . "\n";

echo 'Packaging new pear-package-version ';
$lastLine = exec($PEARCMD . ' package -n', $output, $ret);
echo printStatus($ret) . "\n";

echo 'Installing new pear-package-version ';
exec($PEARCMD . ' install -o ' . $lastLine, $output, $ret);
echo printStatus($ret) . "\n";


function printStatus($returnCode) 
{
    if ($returnCode == 0) {
        return '[OK]';
    } 
    return '[FAILED]';
}
?>
