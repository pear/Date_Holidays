<?php
/**
 * Example how to use a driver to determine holidays
 *
 * PHP Version 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once 'Date/Holidays.php';

/**
 * Create a driver object using the factory method
 *
 * You must determine a valid driver-name.
 * If you don't specify a locale, your system's locale will be used.
 * If you don't specify a year, the current one will be used.
 */
$germany = Date_Holidays::factory('Germany', 2004, 'en_EN');
if (Date_Holidays::isError($germany)) {
    die('Factory was unable to produce driver-object');
}

/**
 * Now that you have created a driver, all the methods that Date_Holidays_Driver
 * defines are available for usage. {@link Date_Holidays_Driver}
 */


/**
 * Date holidays uses an internal name for each holiday and many methods
 * require one as a parameter.
 * The following method returns an array with internal names of all holidays
 * the driver knows.
 */
$internalNames = $germany->getInternalHolidayNames();
print_r($internalNames);

/**
 * Let's retrieve holiday data for Easter.
 *
 * On success an object will be returned, that contains
 * the data about the requested holiday.
 *
 * You may specify a locale that differs from the driver's one
 * to get data in other languages for single method calls.
 */
$easter = $germany->getHoliday('easter', 'de_DE');
if (! Date_Holidays::isError($easter)) {
    print_r($easter->toArray());
}

/**
 * This methods checks whether a specific date is a holiday.
 *
 * Valid params for $date are a string (YYYY-MM-DD),
 * a timestamp and a PEAR::Date object
 */
$holiday = $germany->getHolidayForDate('2004-06-10', 'de_DE', false);
if (! Date_Holidays::isError($holiday) && ! is_null($holiday)) {
    print_r($holiday->toArray());
}

/**
 * Although you will certainly not use it very often, you may change the
 * driver's locale setting. This will affect all methods that are executed
 * after changing the locale!
 *
 * Many methods also accept a locale setting that
 * will be temporarily used during the method's processing time.
 */
$germany->setLocale('de_DE');

/**
 * As many driver may contain lots of holidays, most methods
 * accept a param $restrict that allows you to limit the relevant holidays.
 *
 * If you don't specify $restrict, all holidays the driver knows will be processed.
 */
$restrict = array(
    'goodFriday',
    'easter',
    'easterMonday',
    'whitsun',
    'whitMonday'
);
$titles = $germany->getHolidayTitles($restrict);
if (! Date_Holidays::isError($titles)) {
    print_r($titles);
}

/**
 * When you produce a driver the current year or the one you specified will be
 * set and the holidays for this year will be calculated.
 *
 * To change the year at a later point you can use Date_Holidays_Driver::setYear().
 * When doing so, the driver-class will automatically calculate the new year's
 * holidays.
 */
echo $germany->getYear() . "\n";
$whitsun2004 = $germany->getHoliday('whitsun');
if (! Date_Holidays::isError($whitsun2004)) {
    print_r($whitsun2004->toArray());
}
$germany->setYear(2005);
$whitsun2005 = $germany->getHoliday('whitsun');
if (! Date_Holidays::isError($whitsun2005)) {
    print_r($whitsun2005->toArray());
}
?>
