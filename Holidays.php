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
 * uses PEAR errors
 */
require_once 'PEAR.php';

/**
 * uses PEAR::Date
 */
require_once 'Date.php';

/**
 * Class that wraps a holiday's data
 */
require_once 'Date/Holidays/Holiday.php';

/**
 * Driver baseclass
 */
require_once 'Date/Holidays/Driver.php';
    
/**
 * could not find file of driver-class
 *
 * @access  public
 */
define('DATE_HOLIDAYS_ERROR_DRIVERFILE_NOT_FOUND', 1);
    
/**
 * invalid argument was passed to a method
 *
 * @access  public
 */
define('DATE_HOLIDAYS_ERROR_INVALID_ARGUMENT', 2);

/**
 * class that helps you to locate holidays for a year
 *
 * @abstract
 * @category Date
 * @package  Date_Holidays
 * @version  $Id$
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @author   Stephan Schmidt <schst@php.net>
 */
class Date_Holidays 
{
  /**
    * Constructor
    *
    * Use the Date_Holidays::factory() method to construct an object of a certain driver
    *
    * @access   protected
    */
    function Date_Holidays()
    {
    }
    
   /**
    * Factory method that creates a driver-object
    *
    * @static
    * @access   public
    * @param    string  $driverId   driver-name
    * @param    string  $year       year    
    * @param    string  $locale     locale name
    * @return   object  Date_Holidays driver-object on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   
    */
    function factory($driverId, $year = null, $locale = null, $external = false)
    {
        if (! isset($GLOBALS['_DATE_HOLIDAYS']['DIE_ON_MISSING_LOCALE'])) {
            Date_Holidays::staticSetProperty('DIE_ON_MISSING_LOCALE', true);
        }
        
        $driverClass        = 'Date_Holidays_Driver_' . $driverId;
        if ($external) {
            $driverClass    = $driverId;
        }
        
        if (! class_exists($driverClass)) {
            $driverFile     = 'Date' . DIRECTORY_SEPARATOR . 'Holidays' . DIRECTORY_SEPARATOR . 
                    'Driver' . DIRECTORY_SEPARATOR . $driverId . '.php';
            if ($external) {
                $driverFile = str_replace('_', DIRECTORY_SEPARATOR, $driverClass) . '.php';
            }

            @include_once $driverFile;
            if (! class_exists($driverClass)) {
                return Date_Holidays::raiseError(DATE_HOLIDAYS_ERROR_DRIVERFILE_NOT_FOUND, 
                    'Couldn\'t find file of the driver-class,  filename: ' . $driverFile);
            }
        }
        $driver             =&  new $driverClass;
        
        if (is_null($year)) {
            $year           =   date('Y');
        }
        // sets internal var $_year and performs _buildHolidays()
        $res                =   $driver->setYear($year);
        if (Date_Holidays::isError($res)) {
            return $res;
        }

        if (is_null($locale)) {
            $locale         =   setlocale(LC_ALL, null);
        }
        $driver->setLocale($locale);
        return $driver;
    }
    
   /**
    * Returns the error-stack
    *
    * @static
    * @access   public
    * @return   object PEAR_ErrorStack  error-stack
    */
    function &getErrorStack()
    {
        return PEAR_ErrorStack::singleton('Date_Holidays', false, false, true);
    }
    
   /**
    * Pushes a new error on the error-stack and returns a PEAR_Error object
    *
    * @static
    * @access   public
    * @param    int     $code   error-code
    * @param    string  $msg    error-message
    * @return   object PEAR_Error
    */
    function raiseError($code, $msg = null)
    {
        $errorStack = &Date_Holidays::getErrorStack();
        return $errorStack->push($code, 'error', array(), $msg, false, debug_backtrace());
    }
    
   /**
    * Checks a variable to determine whether it represnts an error object or not
    *
    * @static
    * @access   public
    * @param    mixed   $data   variable to test
    * @param    int     $code   if $data is an PEAR_Error object, return true
    *                           only if $code is a string and
    *                           $obj->getMessage() == $code or
    *                           $code is an integer and $obj->getCode() == $code
    * @return   boolean true if $subject is an error object
    */
    function isError($data, $code = null)
    {
        $errorClass = get_class($data);
        switch (strtolower($errorClass)) {
            case 'pear_error':
                return PEAR::isError($data, $code);
                break;
            case 'pear_errorstack':
                return $data->hasErrors();
                break;
        }
        return false;
    }
    
   /**
    * Checks whether errors occured
    *
    * @static
    * @access   public
    * @return   boolean true if errors occurred
    */
    function errorsOccurred()
    {
        $errorStack = &Date_Holidays::getErrorStack();
        return $errorStack->hasErrors();
    }
    
   /**
    * Returns the errors the error-stack contains
    * 
    * @static
    * @access   public
    * @param    boolean $purge  true if the stall shall be purged
    * @return   array   errors
    */
    function getErrors($purge = false)
    {
        $errorStack = &Date_Holidays::getErrorStack();
        return $errorStack->getErrors($purge);
    }
    
   /**
    * Set a property for the Date_Holidays drivers
    *
    * Available properties:
    * <pre>
    * DIE_ON_MISSING_LOCALE = boolean
    *   false: if no localized holiday-title is found an error will be returned
    *   true: if no localized holiday-title is found the default translation (English) will be used
    * </pre>
    * 
    * @static
    * @access   public
    * @param    string  $prop   property
    * @param    string  $value  property-value
    */
    function staticSetProperty($prop, $value)
    {
        if (! isset($GLOBALS['_DATE_HOLIDAYS'])) {
            $GLOBALS['_DATE_HOLIDAYS'] = array();
        }
        
        switch ($prop) {
            case 'DIE_ON_MISSING_LOCALE':
                if (is_bool($value)) {
                    $GLOBALS['_DATE_HOLIDAYS'][$prop] = $value;
                }
                break;
        }
    }
    
   /**
    * Returns an internal property value
    *
    * @static
    * @access   public
    * @param    string  $prop   property-name
    * @return   mixed   property value on success, otherwise null
    */
    function staticGetProperty($prop)
    {
        if (! isset($GLOBALS['_DATE_HOLIDAYS'])) {
            return null;
        }
        
        switch ($prop) {
            case 'DIE_ON_MISSING_LOCALE':
                if (isset($GLOBALS['_DATE_HOLIDAYS'][$prop])) {
                    return $GLOBALS['_DATE_HOLIDAYS'][$prop];
                }
        }
        
        return null;
    }
}
?>