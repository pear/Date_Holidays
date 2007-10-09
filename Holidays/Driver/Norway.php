<?php

require_once 'Christian.php';

/**
 * Driver class that calculates Norwegian holidays
 *
 * Sensorlink AS (c) 2006
 * Vegard Fiksdal <fiksdal@sensorlink.no>
 */

class Date_Holidays_Driver_Norway extends Date_Holidays_Driver
{
   /**
    * Constructor
    *
    * Use the Date_Holidays::factory() method to construct an object of a certain driver
    *
    * @access   protected
    */
    function Date_Holidays_Driver_Norway () 
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
        $this->_addHoliday('newYearsDay', $this->_year . '-01-01', 'New Year\'s Day');

       /**
        * Easter Sunday
        */
        $easterDate = Date_Holidays_Driver_Norway::calcEaster($this->_year);
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
        $this->_addHoliday('pentecost', $pentecostDate, 'Pentecost');

       /**
        * Ascension Day
        */
        $ascensionDayDate = new Date($pentecostDate);
        $ascensionDayDate->subtractSpan(new Date_Span('10, 0, 0, 0'));
        $this->_addHoliday('ascensionDay', $ascensionDayDate, 'Ascension Day');

       /**
        * Norwegian National Day
        */
        $this->_addHoliday('norwayNationalDay', $this->_year . '-05-17', 
                'Norwegian National Day');

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
    function getISO3166Codes() {
        return array('no', 'nor');
    }
}
?>
