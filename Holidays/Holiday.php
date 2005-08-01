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
 * Simple class that wraps a holiday's data
 *
 * @category Date
 * @package  Date_Holidays
 * @version  $Id$
 * @author   Carsten Lucke <luckec@tool-garage.de>
 */
class Date_Holidays_Holiday
{
   /**
    * Internal name
    *
    * @access   private
    * @var      string
    */
    var $_internalName;
    
   /**
    * Title
    *
    * @access   private
    * @var      string
    */
    var $_title;
    
   /**
    * Date
    *
    * @access   private
    * @var      object Date
    */
    var $_date;
    
   /**
    * Additional holiday properties like a more detailed description, etc.
    * 
    * @access   private
    * @var      array
    */
    var $_properties;
    
   /**
    * Constructor
    *
    * @access   public
    * @param    string      $internalName   internal name
    * @param    string      $title          title
    * @param    object Date $date           date
    * @param    array       properties for this holiday
    */
    function Date_Holidays_Holiday($internalName, $title, &$date, $properties)
    {
        $this->_internalName = $internalName;
        $this->_title        = $title;
        $this->_date         = null;
        $this->_properties   = array();
        
        if (is_a($date, 'Date')) {
            $this->_date = &$date;
        }
        
        if (is_array($properties)) {
            $this->_properties   = $properties;
        }
    }
    
   /**
    * Returns the internal name
    *
    * @access   public
    * @return   string  internal name
    */
    function getInternalName()
    {
        return $this->_internalName;
    }
    
   /**
    * Returns the title
    *
    * @access   public
    * @return   string  title
    */
    function getTitle()
    {
        return $this->_title;
    }
    
   /**
    * Returns the date
    *
    * @access   public
    * @return   object Date date
    */
    function getDate()
    {
        return $this->_date;
    }
    
   /**
    * Set the internal name
    *
    * @access   public
    * @param    string  $internalName   internal name
    */
    function setInternalName($internalName)
    {
        $this->_internalName = $internalName;
    }
    
   /**
    * Set the title
    *
    * @access   public
    * @param    string  $title  title
    */
    function setTitle($title)
    {
        $this->_title = $title;
    }
    
   /**
    * Set the date
    *
    * @access   public
    * @param    object Date date
    */
    function setDate(&$date)
    {
        $this->_date = &$date;
    }
    
   /**
    * Returns the holiday data as an array.
    *
    * Format:
    * <pre>
    *   array(
    *       'internalName'  => 'easter'
    *       'title'         => 'Easter Sunday'
    *       'date'          => Object of type Date
    *   )
    * </pre>
    * 
    * @access   public
    * @return   array   holiday-data
    */
    function &toArray()
    {
        $data                   = array();
        $data['internalName']   = $this->_internalName;
        $data['title']          = $this->_title;
        $data['date']           = &$this->_date;
        return $data;
    }
    
   /**
    * Returns the holidays additional properties that contain information like a more detailed description, etc.
    * 
    * @access   public
    * @return   array   associative array with corresponding pairs of propertyName => $propertyValue
    */
    function getProperties() 
    {
        return $this->_properties;
    }
}
?>
