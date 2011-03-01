<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * This file contains only the Driver class for determining holidays in Queensland.
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
 * @author   Daniel O'Connor <daniel.oconnor@gmail.com>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link     http://pear.php.net/package/Date_Holidays
 */

require_once 'Date/Calc.php';

/**
 * This Driver class calculates holidays in Queensland.  It should be used in
 * conjunction with the Australia driver.
 *
 * @category   Date
 * @package    Date_Holidays
 * @subpackage Driver
 * @author     Daniel O'Connor <daniel.oconnor@gmail.com>
 * @license    http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link       http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_AustraliaQLD extends Date_Holidays_Driver
{
    /**
     * this driver's name
     *
     * @access   protected
     * @var      string
     */
    var $_driverName = 'AustraliaQLD';

    /**
     * Constructor
     *
     * @access   protected
     */
    function Date_Holidays_Driver_AustraliaQLD()
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
         * Labour Day - 1st Monday of May
         */
        $labourDay = Date_Calc::nWeekdayOfMonth(1, 1, 5, $this->_year);
        $this->_addHoliday('labourDay', $labourDay, "Labour Day");

        // Royal National Agricultural (RNA) Show Day (Brisbane only) usually held on second Wednesday in August except when there are five Wednesdays in August it is held on third Wednesday.
        $royalQueenslandShow = Date_Calc::nWeekdayOfMonth(2, 3, 8, $this->_year);
        $this->_addHoliday('royalQueenslandShow', $royalQueenslandShow, "Royal Queensland Show"); // Brisbane area only



    } // _buildHolidays()

} // Date_Holidays_Driver_AustraliaQLD
