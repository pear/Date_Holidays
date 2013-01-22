<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Testing class Date_Holidays_Driver_Serbia</title>
</head>
<body>
<?php
ini_set('include_path', '/Applications/MAMP/bin/php/php5.2.17/lib/php');
require_once 'Date/Holidays.php';
require_once 'Date/Holidays/Driver/Serbia.php';

$serbia = Date_Holidays::factory('Serbia', 2011, 'sr_RS');
if (Date_Holidays::isError($serbia)) {
    die('Factory was unable to produce driver-object');
}

$internal_names = $serbia->getInternalHolidayNames();
foreach ($internal_names as $internal_name) {
    $holiday = $serbia->getHoliday($internal_name, 'sr_RS');
    if (!Date_Holidays::isError($holiday)) {
        //print_r(get_class_methods($holiday));
        echo $holiday->getInternalName() . ' ' .
             '<b>"' . $holiday->getTitle() . '"</b> ' .
             $holiday->getDate()->getDate();
        echo '<br>' . PHP_EOL;
    }
}
?>
</body>
</html>