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
    * @access   public
    * @var      string
    */
    var $internalName;
    
   /**
    * Title
    *
    * @access   public
    * @var      string
    */
    var $title;
    
   /**
    * Date
    *
    * @access   public
    * @var      object Date
    */
    var $date;
    
   /**
    * Constructor
    *
    * @access   public
    * @param    string      $internalName   internal name
    * @param    string      $title          title
    * @param    object Date $date           date
    */
    function Date_Holidays_Holiday($internalName, $title, &$date)
    {
        $this->internalName = $internalName;
        $this->title        = $title;
        $this->date         = &$date;
    }
    
   /**
    * Returns the internal name
    *
    * @access   public
    * @return   string  internal name
    */
    function getInternalName()
    {
        return $this->internalName;
    }
    
   /**
    * Returns the title
    *
    * @access   public
    * @return   string  title
    */
    function getTitle()
    {
        return $this->title;
    }
    
   /**
    * Returns the date
    *
    * @access   public
    * @return   object Date date
    */
    function getDate()
    {
        return $this->date;
    }
    
   /**
    * Set the internal name
    *
    * @access   public
    * @param    string  $internalName   internal name
    */
    function setInternalName($internalName)
    {
        $this->internalName = $internalName;
    }
    
   /**
    * Set the title
    *
    * @access   public
    * @param    string  $title  title
    */
    function setTitle($title)
    {
        $this->title = $title;
    }
    
   /**
    * Set the date
    *
    * @access   public
    * @param    object Date date
    */
    function setDate(&$date)
    {
        $this->date = &$date;
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
    function toArray()
    {
        $data                   = array();
        $data['internalName']   = $this->internalName;
        $data['title']          = $this->title;
        $data['date']           = &$this->date;
        return $data;
    }
}
?>
