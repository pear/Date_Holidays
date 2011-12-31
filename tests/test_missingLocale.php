<?php
/**
 * script for testing behaviour when locale is missing
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

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

Date_Holidays::staticSetProperty('DIE_ON_MISSING_LOCALE', true);

$germany = Date_Holidays::factory('Germany', 2004, 'fr');
$langer = helper_get_lang_dir('Date_Holidays');
$germany->addTranslationFile($langer . '/Germany/de_DE.ini', 'de');
$germany->addTranslationFile($langer . '/Germany/fr_FR.ini', 'fr_FR');

echo '<pre> $germany->getHolidayTitles(): ';
print_r($germany->getHolidayTitles());
echo '</pre>';
?>
