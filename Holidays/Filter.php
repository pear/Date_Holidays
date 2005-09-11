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
 * Baseclass for a holiday-filter.
 *
 * @category Date
 * @package  Date_Holidays
 * @version  $Id$
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @abstract 
 */
class Date_Holidays_Filter
{
   /**
    * Internal names of holidays that are subject to the filter.
    * 
    * @access   private
    * @var      array
    */
    var $_internalNames = array();
    
    /**
     * Constructor.
     *
     * Creates a new filter that knows, which holidays the 
     * calculating driver shall be restricted to.
     * 
     * @param   array   numerical array that contains internal names of holidays
     */
    function __construct($holidays) 
    {
        if (! is_array($holidays)) {
            $holidays = array();
        }
        
        $this->_internalNames = $holidays;
    }
    
    /**
     * Constructor.
     *
     * Creates a new filter that knows, which holidays the 
     * calculating driver shall be restricted to.
     * 
     * @param   array   numerical array that contains internal names of holidays
     */
    function Date_Holidays_Filter($holidays)
    {
        $this->__construct($holidays);
    }
    
   /**
    * Returns the internal names of holidays that are subject to the filter.
    * 
    * @return   array   internal holiday-names
    */
    function getFilteredHolidays() {
        return $this->_internalNames;
    }
    
   /**
    * Sets the internal names of holidays that are subject to the filter.
    * 
    * @param    array   internal holiday-names
    */
    function setFilteredHolidays($holidays) {
        if (! is_array($holidays)) {
            $holidays = array();
        }
        
        $this->_internalNames = $holidays;
    }
    
   /**
    * Lets the filter decide whether a holiday shall be processed or not.
    * 
    * @abstract 
    * @param    string $internalName  a holidays' internal name
    * @return   boolean true, if a holidays shall be processed, false otherwise
    */
    function accept($internalName) {}
}
?>
