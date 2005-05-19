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
//    $Id$s

/**
 * uses PEAR_Errorstack
 */
require_once 'PEAR/ErrorStack.php';
require_once 'Date/Holidays/Filter.php';
require_once 'Date/Holidays/Filter/Whitelist.php';
require_once 'Date/Holidays/Filter/Blacklist.php';

/**
 * invalid internal name
 *
 * @access  public
 */
define('DATE_HOLIDAYS_INVALID_INTERNAL_NAME', 51);

/**
 * title for a holiday is not available
 *
 * @access  public
 */
define('DATE_HOLIDAYS_TITLE_UNAVAILABLE', 52);

/**
 * date could not be converted into a PEAR::Date object
 *
 * date was neither a timestamp nor a string
 *
 * @access  public
 * @deprecated   will certainly be removed
 */
define('DATE_HOLIDAYS_INVALID_DATE', 53);

/**
 * string that represents a date has wrong format
 *
 * format must be YYYY-MM-DD
 *
 * @access  public
 * @deprecated   will certainly be removed
 */
define('DATE_HOLIDAYS_INVALID_DATE_FORMAT', 54);

/**
 * date for a holiday is not available
 *
 * @access  public
 */
define('DATE_HOLIDAYS_DATE_UNAVAILABLE', 55);

/**
 * language-file doesn't exist
 *
 * @access  public
 */
define('DATE_HOLIDAYS_LANGUAGEFILE_NOT_FOUND', 56);

/**
 * class that helps you to locate holidays for a year
 *
 * @abstract
 * @category    Date
 * @package     Date_Holidays
 * @subpackage  Driver
 * @version     $Id$
 * @author      Carsten Lucke <luckec@tool-garage.de>
 */
class Date_Holidays_Driver
{
   /**
    * locale setting for output
    *
    * @access   protected
    * @var      string
    */
    var $_locale;
    
   /**
    * locales for which translations of holiday titles are available
    *
    * @access   private
    * @var      array
    */
    var $_availableLocales = array('C');
    
   /**
    * object's current year
    *
    * @access   protected
    * @var      int
    */
    var $_year;
    
   /**
    * internal names for the available holidays
    *
    * @access   protected
    * @var      array
    */
    var $_internalNames = array();
    
   /**
    * dates of the available holidays
    *
    * @access   protected
    * @var      array
    */
    var $_dates = array();
    
   /**
    * array of the available holidays indexed by date
    *
    * @access   protected
    * @var      array
    */
    var $_holidays = array();

   /**
    * localized names of the available holidays
    *
    * @access   protected
    * @var      array
    */
    var $_titles = array();
    
   /**
    * Array of holiday-properties indexed by internal-names and furthermore by locales.
    * 
    * <code>
    * $_holidayProperties = array(
    *       'internalName1' =>  array(
    *                               'de_DE' => array(),
    *                               'en_US' => array(),
    *                               'fr_FR' => array()
    *                           )
    *       'internalName2' =>  array(
    *                               'de_DE' => array(),
    *                               'en_US' => array(),
    *                               'fr_FR' => array()
    *                           )
    * );
    * </code>
    */
    var $_holidayProperties = array();
    
   /**
    * Constructor
    *
    * Use the Date_Holidays::factory() method to construct an object of a certain driver
    *
    * @access   protected
    */
    function Date_Holidays_Driver()
    {
    }
    
   /**
    * Sets the driver's current year
    *
    * Calling this method forces the object to rebuild the holidays
    *
    * @access   public
    * @param    int     $year   year
    * @return   boolean true on success, otherwise a PEAR_ErrorStack object
    * @throws   object PEAR_ErrorStack
    * @uses     _buildHolidays()
    */
    function setYear($year)
    {
        $this->_year    =   $year;
        return $this->_buildHolidays();
    }
    
   /**
    * Returns the driver's current year
    *
    * @access   public
    * @return   int     current year
    */
    function getYear()
    {
        return $this->_year;
    }
    
   /**
    * Build the internal arrays that contain data about the calculated holidays
    *
    * @abstract
    * @access   protected
    * @return   boolean true on success, otherwise a PEAR_ErrorStack object
    * @throws   object PEAR_ErrorStack
    */
    function _buildHolidays()
    {
    }
    
   /**
    * Add a driver component
    *
    *
    *
    * @abstract
    * @access   public
    * @param    object Date_Holidays_Driver $driver driver-object
    */
    function addDriver($driver)
    {
    }
    
   /**
    * Remove a driver component
    *
    * @abstract
    * @access   public
    * @param    object Date_Holidays_Driver $driver driver-object
    * @return   boolean true on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   DATE_HOLIDAYS_DRIVER_NOT_FOUND
    */
    function removeDriver($driver)
    {
    }
    
   /**
    * Returns the internal names of holidays that were calculated
    *
    * @access   public
    * @return   array
    */
    function getInternalHolidayNames()
    {
        return $this->_internalNames;
    }
    
   /**
    * Returns localized titles of all holidays or those specififed in $restrict array
    *
    * @access   public
    * @param    Date_Holidays_Filter    filter-object (or an array !DEPRECATED!)
    * @param    string  $locale         locale setting that shall be used by this method
    * @return   array   array with localized holiday titles on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_INTERNAL_NAME
    * @uses     getHolidayTitle()
    */
    function getHolidayTitles($filter = null, $locale = null)
    {
        if (is_null($filter)) {
            $filter = &new Date_Holidays_Filter_Blacklist(array());
        } elseif (is_array($filter)) {
            $filter = &new Date_Holidays_Filter_Whitelist($filter);
        }
        
        $titles =   array();
        
        foreach ($this->_internalNames as $internalName) {
            if ($filter->accept($internalName)) {
                $title = $this->getHolidayTitle($internalName, $locale);
                if (Date_Holidays::isError($title)) {
                    return $title;
                }
                $titles[$internalName] = $title;
            }
        }
        
        return $titles;
    }
    
   /**
    * Returns localized title for a holiday
    *
    * @access   public
    * @param    string  $internalName   internal name for holiday
    * @param    string  $locale         locale setting that shall be used by this method
    * @return   string  title on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_INTERNAL_NAME, DATE_HOLIDAYS_TITLE_UNAVAILABLE
    */
    function getHolidayTitle($internalName, $locale = null)
    {
        if (! in_array($internalName, $this->_internalNames)) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 'Invalid internal name: ' . $internalName);
        }
        
        if (is_null($locale)) {
            $locale =   $this->_findBestLocale($this->_locale);
        } else {
            $locale =   $this->_findBestLocale($locale);
        }
        
        if (! isset($this->_titles[$locale][$internalName])) {
            if (Date_Holidays::staticGetProperty('DIE_ON_MISSING_LOCALE')) {
                return Date_Holidays::raiseError(DATE_HOLIDAYS_TITLE_UNAVAILABLE, 'The internal name (' . $internalName . 
                    ') for the holiday was correct but no localized title could be found');
            }
        }

        return isset($this->_titles[$locale][$internalName]) ? 
            $this->_titles[$locale][$internalName] : $this->_titles['C'][$internalName];
    }
    
   /**
    * Returns all holidays that the driver knows.
    *
    * You can limit the holidays by setting the $restrict array, then only those
    * will be returned, whose internal name occurrs in this array.
    *
    * Return format:
    * <pre>
    *   array(
    *       'easter'        =>  object of type Date_Holidays_Holiday,
    *       'eastermonday'  =>  object of type Date_Holidays_Holiday,
    *       ...
    *   )
    * </pre>
    *
    * @access   public
    * @param    Date_Holidays_Filter    filter-object (or an array !DEPRECATED!)
    * @return   array   numeric array containing objects of Date_Holidays_Holiday on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_INTERNAL_NAME
    * @see      getHoliday()
    * @uses     getHoliday()
    */
    function getHolidays($filter = null)
    {
        if (is_null($filter)) {
            $filter = &new Date_Holidays_Filter_Blacklist(array());
        } elseif (is_array($filter)) {
            $filter = &new Date_Holidays_Filter_Whitelist($filter);
        }
        
        $holidays       = array();
        
        foreach ($this->_internalNames as $internalName) {
            if ($filter->accept($internalName)) {
                if (! in_array($internalName, $this->_internalNames)) {
                    return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 
                            'Invalid internal name: ' . $internalName);
                }
                $holidays[$internalName] = &$this->getHoliday($internalName);
            }
        }
        
        return $holidays;
    }
    
   /**
    * Returns the specified holiday
    *
    * Return format:
    * <pre>
    *   array(
    *       'title' =>  'Easter Sunday'
    *       'date'  =>  '2004-04-11'
    *   )
    * </pre>
    *
    * @access   public
    * @param    string  $internalName   internal name of the holiday
    * @param    string  $locale         locale setting that shall be used by this method
    * @return   object Date_Holidays_Holiday    holiday's information on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error       DATE_HOLIDAYS_INVALID_INTERNAL_NAME
    * @uses     getHolidayTitle()
    * @uses     getHolidayDate()
    */
    function getHoliday($internalName, $locale = null)
    {
        if (! in_array($internalName, $this->_internalNames)) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 
                'Invalid internal name: ' . $internalName);
        }
        if (is_null($locale)) {
            $locale = $this->_locale;
        }
        
        $title      = $this->getHolidayTitle($internalName, $locale);
        if (Date_Holidays::isError($title)) {
            return $title;
        }
        $date       = &$this->getHolidayDate($internalName);
        if (Date_Holidays::isError($date)) {
            return $date;
        }
        
        $properties = null;
        if (isset($this->_holidayProperties[$internalName][$locale])) {
            $properties = $this->_holidayProperties[$internalName][$locale];
        }
        
        return new Date_Holidays_Holiday($internalName, $title, $date, $properties);
    }
    
   /**
    * Determines whether a date represents a holiday or not
    *
    * @access   public
    * @param    mixed   $date       date (can be a timestamp, string or PEAR::Date object)
    * @param    array   $restrict   internal-names of holidays to limit search on
    * @return   boolean true if date represents a holiday, otherwise false
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_DATE, DATE_HOLIDAYS_INVALID_DATE_FORMAT
    */
    function isHoliday($date, $restrict = array())
    {
        if (! is_a($date, 'Date')) {
            $date   =& $this->_convertDate($date);
            if (Date_Holidays::isError($date)) {
                return $date;
            }
        }

        if (empty($restrict)) {
            $restrict = $this->_internalNames;
        }
        
        foreach (array_keys($this->_dates) as $internalName) {
            if (in_array($internalName, $restrict)) {
                if ($date->compare($date, $this->_dates[$internalName]) != 0) {
                    continue;
                }
                return true;
            }
        }
        return false;
    }
    
   /**
    * Returns the title of the holiday, if any was found, matching the specified date.
    *
    * Normally the method will return the title/data for the first holiday matching the date.
    * If you want the mthod to continue searching holidays for the specified date, set the 4th param to true
    * If multiple holidays match your date, the return value will be an array of the titles/data.
    * <pre>
    * array(
    *   array(
    *       'title' => 'New Year',
    *       'date'  => Object of type Date
    *   ),
    *   array(
    *       'title' => 'Circumcision of Jesus',
    *       'date'  => Object of type Date
    *   )
    * )
    * </pre>
    *
    * @access   public
    * @param    mixed   $date       date (timestamp | string | PEAR::Date object)
    * @param    string  $locale     locale setting that shall be used by this method
    * @param    boolean $multiple   
    * @return   object  object of type Date_Holidays_Holiday on success 
    *                   (numeric array of those on multiple search), 
    *                   if no holiday was found, matching this date, null is returned
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_DATE, DATE_HOLIDAYS_INVALID_DATE_FORMAT
    * @uses     getHoliday()
    * @uses     getHolidayTitle()
    * @see      getHoliday()
    **/
    function getHolidayForDate($date, $locale = null, $multiple = false)
    {
        if (!is_a($date, 'Date')) {
            $date = &$this->_convertDate($date);
            if (Date_Holidays::isError($date)) {
                return $date;
            }
        }
        $isodate = $date->format('%Y-%m-%d');
        unset($date);
        if (is_null($locale)) {
            $locale = $this->_locale;
        }
        if (array_key_exists($isodate, $this->_holidays)) {
            if (!$multiple) {
                //get only the first feast for this day
                $internalName = $this->_holidays[$isodate][0];
                $result = &$this->getHoliday($internalName, $locale);
                return Date_Holidays::isError($result) ? null : $result;
            }
            // array that collects data, if multiple searching is done
            $data = array();
            foreach($this->_holidays[$isodate] as $internalName) {
                $result = &$this->getHoliday($internalName, $locale);
                if (Date_Holidays::isError($result)) {
                    continue;
                }
                $data[] =& $result;
            }
            return $data;
        }
        return null;
    }
    
   /**
    * Converts timestamp or date-string into da PEAR::Date object
    *
    * @static
    * @access   private
    * @param    mixed   $date   date
    * @return   object PEAR_Date
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_DATE, DATE_HOLIDAYS_INVALID_DATE_FORMAT
    */
    function _convertDate($date)
    {
        if (is_string($date)) {
            if (! preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}/', $date)) {
                return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_DATE_FORMAT, 
                    'Date-string has wrong format (must be YYYY-MM-DD)');
            }
            return new Date($date);
        }
        
        if (is_int($date)) {
            return new Date($date);
        }
        
        return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_DATE, 
            'The date you specified is invalid');
    }
    
   /**
    * Adds all holidays in the array to the driver's internal list of holidays.
    * 
    * Format of the array:
    * <pre>
    *   array(
    *       'newYearsDay'   => array(
    *           'date'          => '01-01',
    *           'title'         => 'New Year\'s Day',
    *           'translations'  => array(
    *               'de_DE' =>  'Neujahr',
    *               'en_EN' =>  'New Year\'s Day'
    *           )
    *       ), 
    *       'valentinesDay' => array(
    *           ...
    *       )
    *   );
    * </pre>      
    * 
    * @access   protected
    * @param    array       $holidays   static holidays' data
    * @uses     _addHoliday()
    */
    function _addStaticHolidays($holidays)
    {
        foreach ($holidays as $internalName => $holiday) {
            // add the holiday's basic data
            $this->_addHoliday($internalName, $this->_year . '-' . $holiday['date'], $holiday['title']);
        }
    }
    
   /**
    * Adds a holiday to the driver's holidays
    *
    * @access   protected
    * @param    string  $internalName   internal name - must not contain characters that aren't allowed as variable-names
    * @param    mixed   $date           date (timestamp | string | PEAR::Date object)
    * @param    string  $title          holiday title
    */
    function _addHoliday($internalName, $date, $title)
    {
        if (! is_a($date, 'Date')) {
            $date   =&  new Date($date);
        }
        
        $this->_dates[$internalName]        = &$date;
        $this->_titles['C'][$internalName]  = $title;
        $isodate = $date->format('%Y-%m-%d');
        if (!isset($this->_holidays[$isodate])) {
            $this->_holidays[$isodate] = array();
        }
        array_push($this->_holidays[$isodate], $internalName);
        array_push($this->_internalNames, $internalName);
    }
    
   /**
    * Add a localized translation for a holiday's title
    *
    * @access   protected
    * @param    string  $internalName   internal name of an existing holiday
    * @param    string  $locale         locale setting that shall be used by this method
    * @param    string  $title          title
    * @return   true on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error       DATE_HOLIDAYS_INVALID_INTERNAL_NAME
    */
    function _addTranslationForHoliday($internalName, $locale, $title)
    {
        if (! in_array($internalName, $this->_internalNames)) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 
                'Couldn\'t add translation (' . $locale . ') for holiday with this internal name: ' . $internalName);
        }
        
        if (! in_array($locale, $this->_availableLocales)) {
            array_push($this->_availableLocales, $locale);
        }
        $this->_titles[$locale][$internalName]  = $title;
        return true;
    }
    
    
   /**
    * Adds a localized (regrading translation etc.) string-property for a holiday.
    *  
    * @access   public
    * @param    string  internal-name
    * @param    string  locale-setting
    * @param    string  property-identifier
    * @param    mixed   property-value
    * @return   boolean true on success, false otherwise
    * @throws   PEAR_ErrorStack if internal-name does not exist
    */ 
    function _addStringPropertyForHoliday($internalName, $locale, $propId, $propVal) 
    {
        if (! in_array($internalName, $this->_internalNames)) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 
                'Couldn\'t add property (locale: ' . $locale . ') for holiday with this internal name: ' . $internalName);
        }
        
        if (!isset($this->_holidayProperties[$internalName]) || 
                !is_array($this->_holidayProperties[$internalName])) {

            $this->_holidayProperties[$internalName] = array();
        }
        
        if (! isset($this->_holidayProperties[$internalName][$locale]) ||
                !is_array($this->_holidayProperties[$internalName][$locale])) {
                    
            $this->_holidayProperties[$internalName][$locale] = array();
        }
        
        $this->_holidayProperties[$internalName][$locale][$propId] = $propVal;
        return true;
    }
    
   /**
    * Adds a arbitrary number of localized string-properties for the specified holiday.
    * 
    * @access   public
    * @param    string  internal-name
    * @param    string  locale-setting
    * @param    array   associative array: array(propId1 => value1, propid2 => value2, ...)
    * @return   boolean true on success, false otherwise
    * @throws   PEAR_ErrorStack if internal-name does not exist
    */
    function _addStringPropertiesForHoliday($internalName, $locale, $properties) 
    {        
        foreach ($properties as $propId => $propValue) {
        	return $this->_addStringPropertyForHoliday($internalName, $locale, 
        	       $propId, $propValue);
        }
        
        return true;
    }
    
   /**
    * Add a translation-file's content
    * 
    * The translation-file's content will be parsed and translations for
    * holidays will be made available with the specified locale.
    * 
    * @access   public
    * @param    string  $file   filename of the language file
    * @param    string  $locale locale-code of the translation
    * @return   boolean true on success, otherwise a PEAR_ErrorStack object
    * @throws   object PEAR_Errorstack
    */
    function addTranslationFile($file, $locale)
    {
        if (! file_exists($file)) {
            Date_Holidays::raiseError(DATE_HOLIDAYS_LANGUAGEFILE_NOT_FOUND, 'Language-file not found');
            return Date_Holidays::getErrorStack();
        }
        
        $content    = parse_ini_file($file);
        foreach ($content as $internalName => $translation) {
        	$this->_addTranslationForHoliday($internalName, $locale, $translation);
        }
        
        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }
    
   /**
    * Add a language-file's content
    * 
    * The language-file's content will be parsed and translations, properties, etc. for
    * holidays will be made available with the specified locale.
    * 
    * @access   public
    * @param    string  $file   filename of the language file
    * @param    string  $locale locale-code of the translation
    * @return   boolean true on success, otherwise a PEAR_ErrorStack object
    * @throws   object PEAR_Errorstack
    * @todo     Could also accept a Unserializer object as parameter
    */
    function addLanguageFile($file, $locale)
    {
        if (! file_exists($file)) {
            Date_Holidays::raiseError(DATE_HOLIDAYS_LANGUAGEFILE_NOT_FOUND, 'Language-file not found');
            return Date_Holidays::getErrorStack();
        }
        
        require_once 'XML/Unserializer.php';
        $options = array(
                            'parseAttributes'   =>  false,
                            'attributesArray'   =>  false,
                            'keyAttribute'      => array('property' => 'id')
                        );
        $unserializer = &new XML_Unserializer($options);
    
        // userialize the document
        $status = $unserializer->unserialize($file, true);    
    
        if (PEAR::isError($status)) {
            return Date_Holidays::raiseError($status->getCode(), $status->getMessage());
        } else {
            $content = $unserializer->getUnserializedData();
            
            foreach ($content['holidays']['holiday'] as $holiday) {
                $this->_addTranslationForHoliday($holiday['internal-name'], $locale, 
                        $holiday['translation']);
                    
                foreach ($holiday['properties'] as $propId => $propVal) {
                    $this->_addStringPropertyForHoliday($holiday['internal-name'], $locale, 
                        $propId, $propVal);
                }
                
            }
        }
        
        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        
        return true;
    }
    
   /**
    * Remove a holiday from internal storage
    *
    * This method should be used within driver classes to unset holidays that were inherited from
    * parent-drivers
    *
    * @access   protected
    * @param    $string     $internalName   internal name
    * @return   boolean     true on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_INTERNAL_NAME
    */
    function _removeHoliday($internalName)
    {
        if (! in_array($internalName, $this->_internalNames)) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 
                'Couldn\'t remove holiday with this internal name: ' . $internalName);
        }
        
        if (isset($this->_dates[$internalName])) {
            unset($this->_dates[$internalName]);
        }
        $locales    = array_keys($this->_titles);
        foreach ($locales as $locale) {
            if (isset($this->_titles[$locale][$internalName])) {
                unset($this->_titles[$locale][$internalName]);
            }
        }
        $index      = array_search($internalName, $this->_internalNames);
        if (! is_null($index)) {
            unset($this->_internalNames[$index]);
        }
        return true;
    }
    
   /**
    * Finds the best internally available locale for the specified one
    *
    * @access   protected
    * @param    string  $locale locale
    * @return   string  best locale available
    */
    function _findBestLocale($locale)
    {
        /* exact locale is available */
        if (in_array($locale, $this->_availableLocales)) {
            return $locale;
        }
        
        /* first two letter are equal */
        foreach ($this->_availableLocales as $aLocale) {
            if (strncasecmp($aLocale, $locale, 2) == 0) {
                return $aLocale;
            }
        }
        
        /* no appropriate locale available, will use driver's internal locale */
        return 'C';
    }
    
   /**
    * Returns date of a holiday
    *
    * @access   public
    * @param    string  $internalName   internal name for holiday
    * @return   object Date             date of the holiday as PEAR::Date object on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error       DATE_HOLIDAYS_INVALID_INTERNAL_NAME, DATE_HOLIDAYS_DATE_UNAVAILABLE
    */
    function getHolidayDate($internalName)
    {
        if (! in_array($internalName, $this->_internalNames)) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_INVALID_INTERNAL_NAME, 'Invalid internal name: ' . $internalName);
        }
        
        if (! isset($this->_dates[$internalName])) {
            return Date_Holidays::raiseError(DATE_HOLIDAYS_DATE_UNAVAILABLE, 'Date for holiday with internal name ' . $internalName . 
                ' is not available');
        }
        
        return $this->_dates[$internalName];
    }
    
   /**
    * Returns dates of all holidays or those accepted by the applied filter.
    *
    * Structure of the returned array:
    * <pre>
    * array(
    *   'internalNameFoo' => object of type date, 
    *   'internalNameBar' => object of type date
    * )
    * </pre>
    *
    * @access   public
    * @param    Date_Holidays_Filter    filter-object (or an array !DEPRECATED!)
    * @return   array with holidays' dates on success, otherwise a PEAR_Error object
    * @throws   object PEAR_Error   DATE_HOLIDAYS_INVALID_INTERNAL_NAME
    * @uses     getHolidayDate()
    */
    function getHolidayDates($filter = null)
    {
        if (is_null($filter)) {
            $filter = &new Date_Holidays_Filter_Blacklist(array());
        } elseif (is_array($filter)) {
            $filter = &new Date_Holidays_Filter_Whitelist($filter);
        }
        
        $dates = array();
        
        foreach ($this->_internalNames as $internalName) {
            if ($filter->accept($internalName)) {
                $date = &$this->getHolidayDate($internalName);
                if (Date_Holidays::isError($date)) {
                    return $date;
                }
                $dates[$internalName] = &$this->getHolidayDate($internalName);
            }
        }
        return $dates;
    }
    
   /**
    * Sets the driver's locale
    *
    * @access   public
    * @param    string  $locale locale
    */
    function setLocale($locale)
    {
        $this->_locale  =   $locale;
    }
}
?>
