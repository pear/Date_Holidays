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
// | Authors:   Carsten Lucke <luckec@tool-garage.de>                     |
// +----------------------------------------------------------------------+
//
//    $Id$

/**
 * Driver-class that calculates the birthdates of the PHP.net people. :)
 *
 * @category    Date
 * @package     Date_Holidays
 * @subpackage  Driver
 * @version     $Id$
 * @author      Carsten Lucke <luckec@tool-garage.de>
 */
class Date_Holidays_Driver_PHPdotNet extends Date_Holidays_Driver  
{
   /**
    * Constructor
    *
    * Use the Date_Holidays::factory() method to construct an object of a certain driver
    *
    * @access   protected
    */
    function Date_Holidays_Driver_PHPdotNet()
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
        // Lukas Smith: 5th of November 1977
        $this->_addHoliday('lsmith', $this->_year . '-11-05', 'Lukas Smith');
        
        // Stephan Schmidt: 12th of May 1974
        $this->_addHoliday('schst', $this->_year . '-05-12', 'Stephan Schmidt');
        
        // Carsten Lucke: 9th of September 1980
        $this->_addHoliday('luckec', $this->_year . '-09-09', 'Carsten Lucke');
        
        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }
}
?>
