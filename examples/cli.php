<?php
/**
 * Rudimentary example of using Date_Holiday packages from the command line.
 *
 * PHP Version 4
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once "Date/Holidays.php";

$params = $_SERVER['argv'];
array_shift($params);
$countries = $params;

foreach ($countries as $country) {
    $date = getdate();
    $year = $date['year'];
    $minyear = 2009;
    $maxyear = 2010;
    $maxyear = $date['year'];
    $minyear = $date['year'] - 3;
    $driver = Date_Holidays::factory($country, $minyear, 'en_EN');
    if (Date_Holidays::isError($driver)) {
        echo  $driver->getMessage(), "!\n";
        continue;
    }
    echo "\n$country\n";
    echo str_pad("", strlen($country), "="), "\n";
    for ($year = $minyear; $year <= $maxyear; $year++) {
        $driver = Date_Holidays::factory($country, $year, 'en_EN');

        if ($driver instanceof PEAR_ErrorStack) {
            $errors = $driver->getErrors();
            foreach ($errors as $error) {
                echo  $error['message'], "\n";
            }
            continue;

        }
        echo "\nYEAR: $year\n";

        $d1 = "$year-01-01";
        $d2 = "$year-12-31";
        $t1 = strtotime($d1);
        $t2 = strtotime($d2);

        $hols = ($driver->getHolidaysForDatespan($t1, $t2));

        foreach ($hols as $holiday) {
            if ($holiday === '') {
                break;
            }
            if (Date_Holidays::isError($holiday)) {
                echo $holiday->getMessage(), "\n";
            } else {
                echo str_pad($holiday->getTitle(), 30, ' '),
                    $holiday->getDate()->format("%d %b %Y"),"\n";
            }
        }

    }
}
?>
