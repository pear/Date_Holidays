<?php
/**
 * Example how to create an own driver-class for Date_Holidays
 *
 * To test this class, you have to copy it into the drivers-directory.
 *
 * The classname has to be something like Date_Holidays_Driver_*.
 * Otherwise it won't be compatible to be used within PEAR's strict directory
 * structure.
 *
 * PHP Version 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Example extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of a
     * certain driver
     *
     * @access   protected
     */
    function Date_Holidays_Driver_Example()
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
         * If your driver is extending another driver-class and is not a direct
         * descendant of the Date_Holidays_Driver base-class you will want to
         * build this classes' holidays before you start with your turn.
         *
         * So just call the _buildHolidays() method of that class.
         */
        parent::_buildHolidays();

        /**
         * There are two methods to add a holiday. One for adding holidays in
         * general and on that can be used to add static holidays (every year
         * the same day).
         *
         * You always have to give the added holiday an unique internal name
         * within your driver.
         * This should describe the holiday as good as possible.
         *
         * Of course you need a date and a title (the default title should
         * always be in English)
         *
         * You can add as many translations as you want for your driver's
         * holidays.
         * Although the default title is in English you should add another one
         * with the correct locale setting.
         */

        /*
         * General method to add a holiday
         */

        // a static holiday
        $this->_addHoliday('jesusCircumcision',
                           $this->_year . '-01-01',
                           'Circumcision of Jesus');

        // a calculated holiday
        // if you are using helper methods to calculate movable holidays is
        // your own decision
        $fooDate = $this->_calcFirstMondayInJanuary();
        $this->_addHoliday('firstMondayInJan',
                           $fooDate,
                           'First monday in January');

        /*
         * Special method for adding static holidays:
         */
        $static = array('newYearsDay' => array('date'  => '01-01',
                                               'title' => 'New Year\'s Day'),
                        'valentinesDay'   => array('date' => '02-14',
                                              'title' => 'Valentine\'s Day'));
        $this->_addStaticHolidays($static);
        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * A helper method
     *
     * @access   private
     * @return   object Date date of first monday in actual years january
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
