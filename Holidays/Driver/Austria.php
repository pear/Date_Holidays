<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2002 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors:   Stephan Schmidt <schst@php-tools.net>                     |
// |            Carsten Lucke <luckec@tool-garage.de>                     |
// +----------------------------------------------------------------------+
//
//    $Id$

/**
 * Requires Christian driver
 */
require_once 'Date/Holidays/Driver/Christian.php';

/**
 * class that calculates Austrian holidays
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Klemens Ullmann <klemens@ull.at>
 * @subpackage  Driver
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  $Id$
 * @link     http://pear.php.net/package/Date_Holidays
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
         * Easter Sunday
         */
        $easterDate = Date_Holidays_Driver_Christian::calcEaster($this->_year);
        $this->_addHoliday('easter', $easterDate, 'Ostersonntag');

        /**
         * Easter Monday
         */
        $this->_addHoliday('easterMonday', $easterDate->getNextDay(), 'Ostermontag');

        /**
         * Day of Work
         */
        $this->_addHoliday('dayOfWork', $this->_year . '-05-01', 'Tag der Arbeit');

        /**
         * Whitsun (determines Whit Monday, Ascension Day and 
         * Feast of Corpus Christi)
         */
        $whitsunDate = new Date($easterDate);
        $whitsunDate->addSpan(new Date_Span('49, 0, 0, 0'));
        $this->_addHoliday('whitsun', $whitsunDate, 'Pfingstsonntag');

        /**
         * Ascension Day
         */
        $ascensionDayDate = new Date($whitsunDate);
        $ascensionDayDate->subtractSpan(new Date_Span('10, 0, 0, 0'));
        $this->_addHoliday('ascensionDay', 
                           $ascensionDayDate, 
                           'Christi Himmelfahrt');

        /**
         * Whit Monday
         */
        $this->_addHoliday('whitMonday', 
                           $whitsunDate->getNextDay(), 
                           'Pfingstmontag');

        /**
         * Feast of Corpus Christi
         */
        $corpusChristiDate = new Date($whitsunDate);
        $corpusChristiDate->addSpan(new Date_Span('11, 0, 0, 0'));
        $this->_addHoliday('corpusChristi', 
                           $corpusChristiDate, 
                           'Fronleichnam');

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
         * Christmas day
         */
        $this->_addHoliday('xmasDay', 
                           $this->_year . '-12-25', 
                           '1. Weihnachtsfeiertag');

        /**
         * Boxing day
         */
        $this->_addHoliday('boxingDay', 
                           $this->_year . '-12-26', 
                           '2. Weihnachtsfeiertag');


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
