<?php
/**
 * Example that shows how to get localized holiday titles
 *
 * @author      Carsten Lucke <luckec@tool-garage.de>
 * @package     Date_Holidays
 * @subpackage  Examples
 */ 

require_once 'Date/Holidays.php';

/**
 * Set static property concerning the behaviour when translations for a holiday-title is missing
 * 
 * If DIE_ON_MISSING_LOCALE is true, you will get an error if you request a holiday/ holiday-title.
 * If this is set false, the driver's internal default title (English) will be returned. When you 
 * are using another locale-setting than English, you could get mixed translations. 
 * Default this option is set true.
 */
Date_Holidays::staticSetProperty('DIE_ON_MISSING_LOCALE', true);

/**
 * Create a driver object using the factory method
 *
 * You must determine a valid driver-name.
 * If you don't specify a locale, your system's locale will be used.
 * If you don't specify a year, the current one will be used.
 */
$germany    = Date_Holidays::factory('Germany', 2004, 'fr_FR');
if (Date_Holidays::isError($germany)) {
    die('Factory was unable to produce driver-object');
}

// translations for the christian holidays
$germany->addTranslationFile('/var/lib/pear/data/Date_Holidays/lang/Christian/de_DE.xml', 'de_DE');
$germany->addTranslationFile('/var/lib/pear/data/Date_Holidays/lang/Christian/en_EN.xml', 'en_EN');
$germany->addTranslationFile('/var/lib/pear/data/Date_Holidays/lang/Christian/fr_FR.xml', 'fr_FR');

// translations for the german holidays
$germany->addCompiledTranslationFile('/var/lib/pear/data/Date_Holidays/lang/Germany/de_DE.ser', 'de_DE');
$germany->addCompiledTranslationFile('/var/lib/pear/data/Date_Holidays/lang/Germany/en_EN.ser', 'en_EN');
$germany->addCompiledTranslationFile('/var/lib/pear/data/Date_Holidays/lang/Germany/fr_FR.ser', 'fr_FR');

$easter = $germany->getHoliday('easter');
if (Date_Holidays::isError($easter)) {
    echo '<pre> Error: ';
    print_r($easter);
    echo '</pre>';
} else {
    echo '<pre> easter with driver\'s locale: ';
    print_r($easter->toArray());
    echo '</pre>';
}

$easter = $germany->getHoliday('easter', 'de');
if (Date_Holidays::isError($easter)) {
    echo '<pre> Error: ';
    print_r($easter);
    echo '</pre>';
} else {
    echo '<pre> easter with German locale: ';
    print_r($easter->toArray());
    echo '</pre>';
}
?>
