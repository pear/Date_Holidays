<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Driver for determining holidays in Ireland.
 *
 * PHP Version 4
 *
 * Copyright (c) 1997-2002 The PHP Group
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
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once 'Date/Holidays/Driver/Christian.php';

/**
 * Driver class that calculates Irish holidays
 * deriving most calculations from 'Public holidays in Ireland' document 
 * on http://www.citizensinformation.ie/
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @subpackage  Driver
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Ireland extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of a 
     * certain driver
     *
     * @access   protected
     */
    function Date_Holidays_Driver_Ireland()
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
        $this->_addHoliday('newYearsDay', 
                           $this->_year . '-01-01',
                           'New Year\'s Day');

        /**
         * Epiphany
         */
        $this->_addHoliday('epiphany', $this->_year . '-01-06', 'Epiphany');

        /**
         * St Patrick's Day.
         */
        $this->_addHoliday('stPatricksDay', 
                           $this->_year . '-03-17',
                           'Saint Patrick\'s Day');

        /**
         * Easter Sunday
         */
        $easterDate = Date_Holidays_Driver_Ireland::calcEaster($this->_year);
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
        $this->_addHoliday('easterMonday', 
                           $easterDate->getNextDay(),
                           'Easter Monday');

        /**
         * May Bank Holiday
         */
        $dn = $this->_calcFirstMonday('05');
        $this->_addHoliday('mayDayBankHoliday', $dn, 'May Bank Holiday');

        /**
         * Pentecost (determines Whit Monday, Ascension Day and 
         * Feast of Corpus Christi)
         */
        $pentecostDate = new Date($easterDate);
        $pentecostDate->addSpan(new Date_Span('49, 0, 0, 0'));
        $this->_addHoliday('pentecost', $pentecostDate, 'Pentecost');

        /**
         * Ascension Day
         */
        $ascensionDayDate = new Date($pentecostDate);
        $ascensionDayDate->subtractSpan(new Date_Span('10, 0, 0, 0'));
        $this->_addHoliday('ascensionDay', $ascensionDayDate, 'Ascension Day');

        /**
         * June Bank Holiday
         */
        $dn = $this->_calcFirstMonday('06');
        $this->_addHoliday('juneBankHoliday', $dn, 'June Bank Holiday');

        /**
         * Midsummer
         * Saturday past 20th, June
         */
        $juneDate  = new Date($this->_year . '-06-20');
        $dayOfWeek = $juneDate->getDayOfWeek();
        $juneDate->addSpan(new Date_Span(sprintf('%d, 0, 0, 0', 6 - $dayOfWeek)));
        $midSummerDate = $juneDate;
        $this->_addHoliday('midSummer', $midSummerDate, 'Midsummer Day');
        
        /**
         * August Bank Holiday
         */
        $dn = $this->_calcFirstMonday('08');
        $this->_addHoliday('augustBankHoliday', $dn, 'August Bank Holiday');

        /**
         * October Bank Holiday
         */
        $dn = $this->_calcLastMonday('10');
        $this->_addHoliday('octoberBankHoliday', $dn, 'October Bank Holiday');

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
        $this->_addHoliday('newYearsEve', 
                           $this->_year . '-12-31',
                           'New Year\'s Eve');

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * Calculates the date for Easter. Actually this methods delegates the 
     * calculation to the {@link Date_Holidays_Driver_Christian#calcEaster()} 
     * method.
     *
     * @param int $year year
     *
     * @static
     * @access   private
     * @return   object Date
     */
    function calcEaster($year)
    {
        return Date_Holidays_Driver_Christian::calcEaster($year);
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
        return array('ie', 'irl');
    }
    /**
     * A helper method
     *
     * @param integer $month month
     *
     * @access   private
     * @return   object Date date of first monday in specified month.
     */
    function _calcFirstMonday($month) 
    {
        $date = new Date($this->_year . "-$month-01");
        while ($date->getDayOfWeek() != 1) {
            $date = $date->getNextDay();
        }
        return ($date);
    }
    /**
     * A helper method
     *
     * @param integer $month month
     *
     * @access   private
     * @return   object Date date of last monday in specified month.
     */
    function _calcLastMonday($month) 
    {
        //work backwards from the first day of the next month.
        $nm = ((int) $month ) + 1;
        if ($nm > 12) {
            $nm = 1;
        }
        $date = new Date($this->_year . "-$nm-01");
        $date = $date->getPrevDay();
        while ($date->getDayOfWeek() != 1) {
            $date = $date->getPrevDay();
        }
        return ($date);
    }
}
?>
