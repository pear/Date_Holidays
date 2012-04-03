<?php
/**
 * Example how to use a driver to determine holidays
 *
 * PHP Version 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Stephan Schmidt <schst@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once '../Holidays.php';

echo "Fetching drivers:\n";
$drivers = Date_Holidays::getInstalledDrivers();
print_r($drivers);

echo "\n\nFetching filters:\n";
$filters = Date_Holidays::getInstalledFilters();
print_r($filters);
?>
