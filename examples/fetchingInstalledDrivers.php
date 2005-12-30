<?php
/**
 * Example how to use a driver to determine holidays
 *
 * @author      Stephan Schmidt <schst@php.net>
 * @package     Date_Holidays
 * @subpackage  Examples
 */ 

require_once '../Holidays.php';

echo "Fetching drivers:\n";
$drivers = Date_Holidays::getInstalledDrivers();
print_r($drivers);

echo "\n\nFetching filters:\n";
$filters = Date_Holidays::getInstalledFilters();
print_r($filters);
?>