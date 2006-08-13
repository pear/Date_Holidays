#!/usr/local/bin/php5
<?php

$PACKAGENAME    = 'Date_Holidays';
$PEARCMD        = '/usr/local/bin/pear5';
$PHPCMD         = '/usr/local/bin/php5';


$ret = null;
$output = array();


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
    return 0 == $returnCode ? '[OK]' : '[FAILED]';
}
?>
