<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Driver for determining holidays in Romania.
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
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once 'Date/Holidays/Driver/EasternChristian.php';

/**
 * Driver class that calculates holidays in Romania.
 *
 * @category   Date
 * @package    Date_Holidays
 * @subpackage Driver
 * @author     Ken Guest <kguest@php.net>
 * @license    http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version    CVS: $Id$
 * @link       http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Romania extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of a
     * certain driver
     *
     * @access   protected
     */
    function Date_Holidays_Driver_Romania()
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


        $easterDate = Date_Holidays_Driver_Romania::calcEaster($this->_year);
        $this->_addHoliday('easter', $easterDate, "Velykden'/Easter");

        /**
         * Easter Monday
         */
        $this->_addHoliday('easterMonday',
                           $easterDate->getNextday(),
                           'Easter Monday');


        /**
         * Romanian Labour Day
         */
        $this->_addHoliday('labourDay', $this->_year . '-05-01', 'Labour Day');

        /**
         * National Day
         */
        $this->_addHoliday('nationalDay', $this->_year . '-12-01', 'National Day');

        /**
         * Christmas Eve
         */
        $this->_addHoliday('christmasEve', $this->_year . '-12-24', 'Christmas Eve');

        /**
         * Christmas day
         */
        $this->_addHoliday('christmasDay', $this->_year . '-12-25', 'Christmas Day');

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * Calculates the date for Easter (Orthodox).
     *
     * @param int $year year
     *
     * @static
     * @access   private
     * @return   object Date
     */
    function calcEaster($year)
    {
        return Date_Holidays_Driver_Eastern_Christian::calcEaster($year);
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
        return array('ro', 'rom');
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
