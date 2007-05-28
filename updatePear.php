<?php

if ($_SERVER['argc'] != 4) {
    echo 'Wrong execution of file. Call like that: FILENAME <project-name> <php-interpreter path> <pear executable path>';
    exit;
}
$PACKAGENAME    = $_SERVER['argv'][1];
$PHPCMD         = $_SERVER['argv'][2];
$PEARCMD        = $_SERVER['argv'][3];


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
