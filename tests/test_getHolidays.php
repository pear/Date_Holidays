<?php
error_reporting(E_ALL);

require_once 'Date/Holidays.php';

$driver = &Date_Holidays::factory('Germany', date('Y', time()), 'de');

$f1     = &new Date_Holidays_Filter_Blacklist(array('easter', 'xmas'));
$f2     = &new Date_Holidays_Filter_Blacklist(array('day1', 'day2', 'd-day'));
$f3     = &new Date_Holidays_Filter_Whitelist(array('abc', 'acb', 'bca', 'cbc'));

$driver->addFilter($f1);
$driver->addFilter($f2);
$driver->addFilter($f3);

$driver->removeFilter($f2);

$driver->unsetFilters();


?>
