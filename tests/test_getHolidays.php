<?php
error_reporting(E_ALL);

require_once 'Date/Holidays.php';

$driver     = &Date_Holidays::factory('Germany', date('Y', time()), 'de');

$driver->addTranslationFile('/var/www/devel/pear/Date_Holidays/lang/Christian/de_DE.ini', 'de');
$driver->addTranslationFile('/var/www/devel/pear/Date_Holidays/lang/Germany/de_DE.ini', 'de');

$holidays   = $driver->getHolidays();

$driver->isHoliday( '2004-12-12' );

echo '<table>';
foreach (array_keys($holidays) as $internalName) {
    $title  = $holidays[$internalName]->getTitle();
    $date   = &$holidays[$internalName]->getDate();
    
    echo sprintf('<tr> <td>%s</td> <td>%s</td></tr>', $title, strftime('%x', $date->getTime()));
}
echo '</table';
?>
