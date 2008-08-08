--TEST--
bug13395.phpt: Unit tests for bug 13395

--FILE--
<?php
require_once 'Date/Holidays.php';
echo "Test bug 13395\n";
echo "**************\n";

Date_TimeZone::setDefault("UTC");

$driver = &Date_Holidays::factory('USA', 2007);

$workday = new Date('2010-04-26');
if ($driver->isHoliday($workday)) {
    echo  "-workday\n";
}


$hols = $driver->getHolidays();
print_r($hols['christmasDay']);
exit(0);
?>

--EXPECT--
Test bug 13395
**************
Date_Holidays_Holiday Object
(
    [_internalName] => christmasDay
    [_title] => Christmas Day
    [_date] => Date Object
        (
            [year] => 2007
            [month] => 12
            [day] => 25
            [hour] => 0
            [minute] => 0
            [second] => 0
            [partsecond] => 0
            [tz] => Date_TimeZone Object
                (
                    [id] => UTC
                    [longname] => Coordinated Universal Time
                    [shortname] => UTC
                    [hasdst] => 
                    [dstlongname] => Coordinated Universal Time
                    [dstshortname] => UTC
                    [offset] => 0
                    [default] => 
                )

            [getWeekdayAbbrnameLength] => 3
        )

    [_properties] => Array
        (
        )

)
