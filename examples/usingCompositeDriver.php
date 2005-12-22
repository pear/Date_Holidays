<?php
/**
 * Example how to use a composite driver to determine holidays from
 * several combined drivers
 *
 * @author      Carsten Lucke <luckec@tool-garage.de>
 * @package     Date_Holidays
 * @subpackage  Examples
 */ 

require_once 'Date/Holidays.php';

/**
 * First thing to do is creating a Composite driver object 
 * and some other drivers.
 *
 * You must determine a valid driver-name.
 * If you don't specify a locale, your system's locale will be used.
 * If you don't specify a year, the current one will be used.
 */
$comp       = Date_Holidays::factory('Composite');
$germany03  = Date_Holidays::factory('Germany', 2003, 'en_EN');
$germany    = Date_Holidays::factory('Germany', 2004, 'en_EN');
$uno        = Date_Holidays::factory('UNO', 2004, 'en_EN');
if (Date_Holidays::isError($comp) || 
        Date_Holidays::isError($germany03) || 
        Date_Holidays::isError($germany) || 
        Date_Holidays::isError($uno)) {
    die('Factory was unable to produce driver-object');
}

/**
 * Adding the drivers to the composite driver object
 * 
 * For some methods of the composite driver the importance of
 * the added drivers is relevant for the returned result.
 * The rule of priority is pretty easy, the earlier you add a
 * driver, the more important it is (First come, first serve).
 */
$comp->addDriver($germany03);
$comp->addDriver($germany);
$comp->addDriver($uno);

/**
 * Drivers can be removed from the composite by using removeDriver()
 */
//$comp->removeDriver($germany03);

/**
 * Now that you have created a driver, all the methods that Date_Holidays_Driver
 * defines are available for usage. {@link Date_Holidays_Driver}
 *
 * However some of the methods won't do anything, like setYear() or getYear().
 * You should execute those ones on a standalone driver.
 */
 
 
/**
 * Date holidays uses an internal name for each holiday and many mthods
 * require one as a param . The following method returns an array with all available internal names.
 *
 * It returns the internal names of all drivers in the compound. Higher priorized
 * drivers overwrite equal internal names of lower ones.
 */
$internalNames  = $comp->getInternalHolidayNames();
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
$easter     = $comp->getHoliday('easter', 'de_DE');
if (! Date_Holidays::isError($easter)) {
    print_r($easter->toArray());
}

$restrict   = array();
$easter     = $comp->getHolidayDates($restrict);
echo '<pre>';
//print_r($easter);
echo '</pre>';

/**
 * This methods checks whether a specific date is a holiday.
 *
 * Valid params for $date are a string (YYYY-MM-DD),
 * a timestamp and a PEAR::Date object
 */
$holiday    = $comp->getHolidayForDate('2004-01-01', 'de_DE', true);
if (! Date_Holidays::isError($holiday) && ! is_null($holiday)) {
    if (is_array($holiday)) {
        for ($i = 0; $i < count($holiday); $i++) {
            print_r($holiday[$i]->toArray());
        }
    } else {
        print_r($holiday->toArray());
    }
}


/**
 * As many driver may contain lots of holidays, most methods 
 * accept a param $restrict that allows you to limit the relevant holidays.
 *
 * If you don't specify $restrict, all holidays the driver knows will be processed.
 *
 * If the composite drivers contains two or more drivers with equal internal holiday names
 * the one of the driver with the highest priority will be returned (the one who was added earliest).
 */
$restrict   = array(
    'goodFriday',
    'easter',
    'easterMonday',
    'whitsun',
    'whitMonday'
);
$titles     = $comp->getHolidayTitles($restrict, 'fr_FR');
if (! Date_Holidays::isError($titles)) {
    print_r($titles);
}
?>
