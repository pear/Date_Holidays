<?php
error_reporting(E_ALL);

require_once 'Date/Holidays.php';

Date_Holidays::staticSetProperty('DIE_ON_MISSING_LOCALE', true);

$germany    = &Date_Holidays::factory('Germany', 2004, 'fr');

$germany->addTranslationFile('/var/www/devel/pear/Date_Holidays/lang/Germany/de_DE.ini', 'de');
$germany->addTranslationFile('/var/www/devel/pear/Date_Holidays/lang/Germany/fr_FR.ini', 'fr_FR');
//$germany->addTranslationFile('/var/www/devel/pear/Date_Holidays/lang/Christian/fr_FR.ini', 'fr_FR');

echo '<pre> $germany->getHolidayTitles(): ';
print_r($germany->getHolidayTitles());
echo '</pre>';
?>