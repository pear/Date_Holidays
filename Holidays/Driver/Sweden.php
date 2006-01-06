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
// | Authors:   Anders Karlsson <anders.x.karlsson@tdcsong.se>            |
// | Authors:   Carsten Lucke <luckec@php.net>                            |
// +----------------------------------------------------------------------+
//
//    $Id$

require_once 'Date/Holidays/Driver/Christian.php';

/**
 * Driver class that calculates Swedish holidays
 *
 * @category    Date
 * @package     Date_Holidays
 * @subpackage  Driver
 * @version     $Id$
 * @author      Anders Karlsson <anders.x.karlsson@tdcsong.se>
 */
class Date_Holidays_Driver_Sweden extends Date_Holidays_Driver
{
   /**
    * Constructor
    *
    * Use the Date_Holidays::factory() method to construct an object of a certain driver
    *
    * @access   protected
    */
    function Date_Holidays_Driver_Sweden() {}

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
        $this->_addHoliday('newYearsDay', $this->_year . '-01-01', 'New Year\'s Day');

       /**
        * Epiphanias
        */
        $this->_addHoliday('epiphany', $this->_year . '-01-06', 'Epiphany');

       /**
        * Easter Sunday
        */
        $easterDate = Date_Holidays_Driver_Sweden::calcEaster($this->_year);
        $this->_addHoliday('easter', $easterDate, 'Easter Sunday');

       /**
        * Good Friday / Black Friday
        */
        $goodFridayDate = new Date($easterDate);
        $goodFridayDate->subtractSpan(new Date_Span('2, 0, 0, 0'));
        $this->_addHoliday('goodFriday', $goodFridayDate, 'Good Friday');

       /**
        * Easter Monday
        */
        $this->_addHoliday('easterMonday', $easterDate->getNextDay(), 'Easter Monday');

       /**
        * May Day
        */
        $this->_addHoliday('mayDay', $this->_year . '-05-01', 'May Day');

       /**
        * Pentecost (determines Whit Monday, Ascension Day and Feast of Corpus Christi)
        */
        $pentecostDate = new Date($easterDate);
        $pentecostDate->addSpan(new Date_Span('49, 0, 0, 0'));
        $this->_addHoliday('pentecost', $pentecostDate, 'pentecost');

       /**
        * Ascension Day
        */
        $ascensionDayDate = new Date($pentecostDate);
        $ascensionDayDate->subtractSpan(new Date_Span('10, 0, 0, 0'));
        $this->_addHoliday('ascensionDay', $ascensionDayDate, 'Ascension Day');

       /**
        * Swedish National Day and the Swedish Flag's Day
        */
        $this->_addHoliday('swedenNationalDay', $this->_year . '-06-06', 
                'Swedish National Day and the Swedish Flag\'s Day');

       /**
        * Midsummer
        * Saturday past 20th, June
        */
        $juneDate       = new Date($this->_year . '-06-20');
        $dayOfWeek      = $juneDate->getDayOfWeek();
        $juneDate->addSpan(new Date_Span(sprintf('%d, 0, 0, 0', 6 - $dayOfWeek)));
        $midSummerDate  = $juneDate;
        $this->_addHoliday('midSummer', $midSummerDate, 'Midsummer Day');

       /**
        * All Saints' Day
        */
        $saintspanDate  = new Date($this->_year . '-10-31');
        $dayOfWeek      = $saintspanDate->getDayOfWeek();
        $saintspanDate->addSpan(new Date_Span(sprintf('%d, 0, 0, 0', 6 - $dayOfWeek)));
        $allSaintsDate  = $saintspanDate;
        $this->_addHoliday('allSaintsDay', $allSaintsDate, 'All Saints\' Day');

       /**
        * Christmas Eve
        */
        $this->_addHoliday('xmasEve', $this->_year . '-12-24', 'Christmas Eve');

       /**
        * Christmas day
        */
        $this->_addHoliday('xmasDay', $this->_year . '-12-25', 'Christmas Day');

       /**
        * Boxing day
        */
        $this->_addHoliday('boxingDay', $this->_year . '-12-26', 'Boxing Day');

       /**
        * New Year's Eve
        */
        $this->_addHoliday('newYearsEve', $this->_year . '-12-31', 'New Year\'s Eve');

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

   /**
    * Calculates the date for Easter. Actually this methods delegates the calculation to
    * the {@link Date_Holidays_Driver_Christian#calcEaster()} method.
    *
    * @static
    * @access   private
    * @param    int     $year   year
    * @return   object Date
    */
    function calcEaster($year)
    {
        Date_Holidays_Driver_Christian::calcEaster($year);
    }
}
?>