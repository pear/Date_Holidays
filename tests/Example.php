<?php
/**
 * Example of writing a test.
 *
 * PHP Version 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
/**
 * Example test class.
 *
 * @uses Date_Holidays_Driver
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
require_once 'Date/Holidays.php';
class Example extends Date_Holidays_Driver
{
    /**
     * _buildHolidays
     *
     * @access protected
     * @return boolean
     */
    function _buildHolidays()
    {
        // call holiday-calculation method from baseclass
        parent::_buildHolidays();

        // add a static holiday
        $this->_addHoliday('jesusCircumcision',
                           $this->_year . '-01-01',
                           'Circumcision of Jesus');

        // a calculated holiday
        // Whether to use helper methods to calculate movable holidays
        // is your own decision
        $fooDate = $this->_calcFirstMondayInJanuary();
        $this->_addHoliday('firstMondayInJan', $fooDate, 'First monday in January');

        // Special way of adding static holidays:
        $static = array(
                'newYearsDay'   => array(
                    'date'        => '01-01',
                    'title'       => 'New Year\'s Day'
                    ),
                'valentinesDay' => array(
                    'date'        => '02-14',
                    'title'       => 'Valentine\'s Day'
                    ),
                );
        $this->_addStaticHolidays($static);

        // Check if errors occurred.
        // If yes, return the errorstack.
        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * Helper method to calcuate the date of the first Monday in January
     *
     * @access protected
     * @return string
     */
    function _calcFirstMondayInJanuary()
    {
        $date = new Date($this->_year . '-01-01');
        while ($date->getDayOfWeek() != 1) {
            $date = $date->getNextDay();
        }
        return $date;
    }
}
?>
