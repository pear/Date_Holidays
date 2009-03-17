<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Driver for holidays in Austria
 *
 * PHP Version 4
 *
 * Copyright (c) 1997-2008 The PHP Group
 *
 * This source file is subject to version 3.0 of the PHP license,
 * that is bundled with this package in the file LICENSE, and is
 * available at through the world-wide-web at
 * http://www.php.net/license/3_01.txt.
 * If you did not receive a copy of the PHP license and are unable to
 * obtain it through the world-wide-web, please send a note to
 * license@php.net so we can mail you a copy immediately.
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Stephan Schmidt <schst@php-tools.net>
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/**
 * Requires Christian driver
 */
require_once 'Date/Holidays/Driver/Christian.php';

/**
 * class that calculates Austrian holidays
 *
 * @category   Date
 * @package    Date_Holidays
 * @subpackage Driver
 * @author     Klemens Ullmann <klemens@ull.at>
 * @license    http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version    CVS: $Id$
 * @link       http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Austria extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of a certain
     * driver
     *
     * @access   protected
     */
    function Date_Holidays_Driver_Austria()
    {
    }

    /**
     * Build the internal arrays that contain data about the calculated holidays
     *
     * @access   protected
     * @return   boolean true on success, otherwise a PEAR_ErrorStack object
     * @throws   object PEAR_ErrorStack
     */
    function _buildHolidays()
    {
        /**
         * New Year's Day
         */
        $this->_addHoliday('newYearsDay', $this->_year . '-01-01', 'Neujahr');

        /**
         * Epiphanias
         */
        $this->_addHoliday('epiphany',
                           $this->_year . '-01-06',
                           'Heilige Drei Könige');

        /**
         * Valentine´s Day
         */
        $this->_addHoliday('valentinesDay',
                           $this->_year . '-02-14',
                           'Valentinstag');

        /**
         * Easter Sunday
         */
        $easterDate = Date_Holidays_Driver_Christian::calcEaster($this->_year);
        $this->_addHoliday('easter', $easterDate, 'Ostersonntag');

        /**
         * Ash Wednesday
         */
        $ashWednesday = new Date($easterDate);
        $ashWednesday->subtractSpan(new Date_Span('46, 0, 0, 0'));
        $this->_addHoliday('ashWednesday', $ashWednesday, 'Aschermittwoch');

        /**
         * Palm Sunday
         */
        $palmSunday = new Date($easterDate);
        $palmSunday->subtractSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('palmSunday', $palmSunday, 'Palmsonntag');

        /**
         * Maundy Thursday
         */
        $maundyThursday = new Date($easterDate);
        $maundyThursday->subtractSpan(new Date_Span('3, 0, 0, 0'));
        $this->_addHoliday('maundyThursday', $maundyThursday, 'Gründonnerstag');

        /**
         * Good Friday
         */
        $goodFriday = new Date($easterDate);
        $goodFriday->subtractSpan(new Date_Span('2, 0, 0, 0'));
        $this->_addHoliday('goodFriday', $goodFriday, 'Karfreitag');

        /**
         * Easter Monday
         */
        $this->_addHoliday('easterMonday', $easterDate->getNextDay(), 'Ostermontag');

        /**
         * Day of Work
         */
        $this->_addHoliday('dayOfWork', $this->_year . '-05-01', 'Staatsfeiertag Österreich');

        /**
         * Saint Florian
         */
        $this->_addHoliday('saintFlorian', $this->_year . '-05-04', 'St. Florian');

        /**
         * Mothers Day
         */
        $mothersDay = $this->_calcFirstMonday("05");
        $mothersDay = $mothersDay->getPrevDay();
        $mothersDay->addSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('mothersDay',
                           $mothersDay,
                           'Muttertag');

        /**
         * Ascension Day
         */
        $ascensionDate = new Date($easterDate);
        $ascensionDate->addSpan(new Date_Span('39, 0, 0, 0'));
        $this->_addHoliday('ascensionDate', $ascensionDate, 'Christi Himmelfahrt');

        /**
         * Ascension Day
         */
        //$ascensionDayDate = new Date($whitsunDate);
        //$ascensionDayDate->subtractSpan(new Date_Span('10, 0, 0, 0'));
        //$this->_addHoliday('ascensionDay',
        //                   $ascensionDayDate,
        //                   'Christi Himmelfahrt');

        /**
         * Whitsun (determines Whit Monday, Ascension Day and
         * Feast of Corpus Christi)
         */
        $whitsunDate = new Date($easterDate);
        $whitsunDate->addSpan(new Date_Span('49, 0, 0, 0'));
        $this->_addHoliday('whitsun', $whitsunDate, 'Pfingstsonntag');

        /**
         * Whit Monday
         */
        $this->_addHoliday('whitMonday', $whitsunDate->getNextDay(), 'Pfingstmontag');

        /**
         * Corpus Christi
         */
        $corpusChristi = new Date($easterDate);
        $corpusChristi->addSpan(new Date_Span('60, 0, 0, 0'));
        $this->_addHoliday('corpusChristi', $corpusChristi, 'Fronleichnam');

        /**
         * Fathers Day
         */
        $fathersDay = $this->_calcFirstMonday("06");
        $fathersDay = $fathersDay->getPrevDay();
        $fathersDay->addSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('fathersDay',
                           $fathersDay,
                           'Vatertag');

        /**
         * Ascension of Maria
         */
        $this->_addHoliday('mariaAscension',
                           $this->_year . '-08-15',
                           'Maria Himmelfahrt');

        /**
         * Österreichischer Nationalfeiertag
         */
        $this->_addHoliday('nationalDayAustria',
                           $this->_year . '-10-26',
                           'Österreichischer Nationalfeiertag');

        /**
         * All Saints' Day
         */
        $this->_addHoliday('allSaintsDay',
                           $this->_year . '-11-01',
                           'Allerheiligen');

        /**
         *All Souls´ Day
         */
        $this->_addHoliday('allSoulsDay',
                           $this->_year . '-11-02',
                           'Allerseelen');

        /**
         * Santa Claus
         */
        $this->_addHoliday('santasDay',
                           $this->_year . '-12-06',
                           'St. Nikolaus');

        /**
         * Immaculate Conception
         */
        $this->_addHoliday('immaculateConceptionDay',
                           $this->_year . '-12-08',
                           'Maria Empfängnis');

        /**
         * Sunday in commemoration of the dead (sundayIcotd)
         */
        $sundayIcotd = $this->_calcFirstMonday(12);
        $sundayIcotd = $sundayIcotd->getPrevDay();
        $sundayIcotd->subtractSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('sundayIcotd',
                           $sundayIcotd,
                           'Totensonntag');

        /**
         * 1. Advent
         */
        $firstAdv = $this->_calcFirstMonday(12);
        $firstAdv = $firstAdv->getPrevDay();
        $this->_addHoliday('firstAdvent',
                           $firstAdv,
                           '1. Advent');

        /**
         * 2. Advent
         */
        $secondAdv = new Date($firstAdv);
        $secondAdv->addSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('secondAdvent',
                           $secondAdv,
                           '2. Advent');

        /**
         * 3. Advent
         */
        $thirdAdv = new Date($firstAdv);
        $thirdAdv->addSpan(new Date_Span('14, 0, 0, 0'));
        $this->_addHoliday('thirdAdvent',
                           $thirdAdv,
                           '3. Advent');

        /**
         * 4. Advent
         */
        $fourthAdv = new Date($firstAdv);
        $fourthAdv->addSpan(new Date_Span('21, 0, 0, 0'));
        $this->_addHoliday('fourthAdvent',
                           $fourthAdv,
                           '4. Advent');

        /**
         * Christmas Eve
         */
        $this->_addHoliday('christmasEve',
                           $this->_year . '-12-24',
                           'Heiliger Abend');

        /**
         * Christmas day
         */
        $this->_addHoliday('christmasDay',
                           $this->_year . '-12-25',
                           'Christtag');

        /**
         * Boxing day
         */
        $this->_addHoliday('boxingDay',
                           $this->_year . '-12-26',
                           'Stefanitag');

        /**
         * New Year´s Eve
         */
        $this->_addHoliday('newYearsEve',
                           $this->_year . '-12-31',
                           'Silvester');

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * Method that returns an array containing the ISO3166 codes that may possibly
     * identify a driver.
     *
     * @static
     * @access public
     * @return array possible ISO3166 codes
     */
    function getISO3166Codes()
    {
        return array('at');
    }
}
?>
