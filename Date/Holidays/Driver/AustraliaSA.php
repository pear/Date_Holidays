<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * This file contains only the Driver class for determining holidays in Western
 * Australia.
 *
 * PHP Version 4
 *
 * Copyright (c) 1997-2008 The PHP Group
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Sam Wilson <sam@archives.org.au>
 * @license  BSD http://www.opensource.org/licenses/bsd-license.php
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once 'Date/Calc.php';

/**
 * This Driver class calculates holidays in Western Australia.  It should be used in
 * conjunction with the Australia driver.
 *
 * @category   Date
 * @package    Date_Holidays
 * @subpackage Driver
 * @author     Sam Wilson <sam@archives.org.au>
 * @license    BSD http://www.opensource.org/licenses/bsd-license.php
 * @link       http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_AustraliaSA extends Date_Holidays_Driver
{
    /**
     * this driver's name
     *
     * @access   protected
     * @var      string
     */
    var $_driverName = 'AustraliaSA';

    /**
     * Constructor
     *
     * @access   protected
     */
    function Date_Holidays_Driver_AustraliaSA()
    {
    }

    /**
     * Build the internal arrays that contain data about holidays.
     *
     * @access   protected
     * @return   boolean true on success, otherwise a PEAR_ErrorStack object
     * @throws   object PEAR_ErrorStack
     */
    function _buildHolidays()
    {
        parent::_buildHolidays();

        /*
         * Labour Day - 1st Monday of October
         */
        $labourDay = Date_Calc::nWeekdayOfMonth(1, 1, 10, $this->_year);
        $this->_addHoliday('labourDay', $labourDay, "Labour Day");

        /*
         * See http://en.wikipedia.org/wiki/Queen%27s_Official_Birthday#Australia
         */
        $foundationDay = Date_Calc::nWeekdayOfMonth(2, 1, 6, $this->_year);
        $this->_addHoliday('queensBirthday', $foundationDay, "Queen's Birthday");

    } // _buildHolidays()

} // Date_Holidays_Driver_AustraliaSA
