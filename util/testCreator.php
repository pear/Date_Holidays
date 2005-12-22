<?php

//
// Little script that creates the test-code for all 
// holidays the specified driver can calculate
//
// Usage: php testCreator.php <drivername> <year>
// 
// Placeholders:
// --
// [%1] internal-name
// [%2] year
// 

if ($_SERVER['argc'] != 3) {
    die("Usage: php {$_SERVER['argv'][0]} <drivername> <year>");
}

$template = <<<EOT

// test [%1] 
\$day = \$drv->getHoliday('[%1]');
\$this->assertFalse(Date_Holidays::isError(\$day));
if (Date_Holidays::isError(\$day)) {
    die(\$day->getMessage());
}
\$this->assertEquals('[%1]', \$day->getInternalName());
\$date = \$day->getDate();
\$this->assertEquals(, \$date->getDay(), '[%1]');
\$this->assertEquals(, \$date->getMonth(), '[%1]');
\$this->assertEquals([%2], \$date->getYear(), '[%1]');

EOT;

require_once 'Date/Holidays.php';
$output = '';

$driver = Date_Holidays::factory($_SERVER['argv'][1], $_SERVER['argv'][2]);
if (Date_Holidays::isError($driver)) {
    die($driver->getMessage());
}

$internalNames = $driver->getInternalHolidayNames();
foreach ($internalNames as $internalName) {
    $tmp = str_replace('[%1]', $internalName, $template);
    $tmp = str_replace('[%2]', $_SERVER['argv'][2], $tmp);
    
    $output .= $tmp;
}

echo $output;


?>
