<?php
/**
 * script for testing a driver's getHolidays method.
 *
 * PHP Version 4
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once 'Date/Holidays.php';

$driver = Date_Holidays::factory('Germany', date('Y', time()), 'de');
$langer = "/var/www/devel/pear/Date_Holidays/lang";
$driver->addTranslationFile($langer . '/Christian/de_DE.ini', 'de');
$driver->addTranslationFile($langer . '/Germany/de_DE.ini', 'de');

$holidays = $driver->getHolidays();

$driver->isHoliday('2004-12-12');

echo '<table>';
foreach (array_keys($holidays) as $internalName) {
    $title = $holidays[$internalName]->getTitle();
    $date  = $holidays[$internalName]->getDate();

    echo sprintf('<tr> <td>%s</td> <td>%s</td></tr>', $title, strftime('%x',
                                                            $date->getTime()));
}
echo '</table>';
?>
