#!/usr/bin/php
<?php

exec('rm package.xml');
exec('php package.php make');
exec('sudo pear uninstall Date_Holidays');
$lastLine = exec('pear package -n');
exec('sudo pear install ' . $lastLine);


?>

