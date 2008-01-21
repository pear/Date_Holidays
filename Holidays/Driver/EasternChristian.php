<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Driver for Eastern Christian holidays
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
 * @author   Ken Guest <ken@linux.ie>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/**
 * class that calculates Eastern Christian holidays
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <ken@linux.ie>
 * @subpackage Driver
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Eastern_Christian extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of a
     * certain driver
     *
     * @access   protected
     */
    function Date_Holidays_Driver_Eastern_Christian()
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
         * Circumcision of Jesus
         */
        $this->_addHoliday('jesusCircumcision',
                           $this->_year . '-01-01',
                           'Circumcision of Jesus');

        /**
         * Epiphanias
         */
        $this->_addHoliday('epiphany', $this->_year . '-01-06', 'Epiphany');

        /**
         * Cleaning of Mariä
         */
        $this->_addHoliday('mariaCleaning',
                           $this->_year . '-02-02',
                           'Cleaning of Maria');

        /**
         * Josef's Day
         */
        $this->_addHoliday('josefsDay',
                           $this->_year . '-03-19',
                           'Josef\'s Day');

        /**
         * Maria Announcement
         */
        $this->_addHoliday('mariaAnnouncement',
                            $this->_year . '-03-25',
                            'Maria Announcement');

        /**
         * Easter Sunday
         */
        $easterDate = Date_Holidays_Driver_EasternChristian::calcEaster($this->_year);
        $this->_addHoliday('easter', $easterDate, 'Easter Sunday');

        /**
         * Palm Sunday
         */
        $palmSundayDate = new Date($easterDate);
        $palmSundayDate->subtractSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('palmSunday', $palmSundayDate, 'Palm Sunday');

        /**
         * Passion Sunday
         */
        $passionSundayDate = new Date($palmSundayDate);
        $passionSundayDate->subtractSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('passionSunday', $passionSundayDate, 'Passion Sunday');

        /**
         * Painful Friday
         */
        $painfulFridayDate = new Date($palmSundayDate);
        $painfulFridayDate->subtractSpan(new Date_Span('2, 0, 0, 0'));
        $this->_addHoliday('painfulFriday', $painfulFridayDate, 'Painful Friday');

        /**
         * White Sunday
         */
        $whiteSundayDate = new Date($easterDate);
        $whiteSundayDate->addSpan(new Date_Span('7, 0, 0, 0'));
        $this->_addHoliday('whiteSunday', $whiteSundayDate, 'White Sunday');

        /**
         * Ash Wednesday
         */
        $ashWednesdayDate = new Date($easterDate);
        $ashWednesdayDate->subtractSpan(new Date_Span('46, 0, 0, 0'));
        $this->_addHoliday('ashWednesday', $ashWednesdayDate, 'Ash Wednesday');

        /**
         * Good Friday / Black Friday
         */
        $goodFridayDate = new Date($easterDate);
        $goodFridayDate->subtractSpan(new Date_Span('2, 0, 0, 0'));
        $this->_addHoliday('goodFriday', $goodFridayDate, 'Good Friday');

        /**
         * Green Thursday
         */
        $this->_addHoliday('greenThursday',
                           $goodFridayDate->getPrevDay(),
                           'Green Thursday');

        /**
         * Easter Monday
         */
        $this->_addHoliday('easterMonday',
                           $easterDate->getNextDay(),
                           'Easter Monday');

        /**
         * Triytsia
         */
        $triyDate = new Date($easterDate);
        $triyDate->addSpan(new Date_Span('49, 0, 0, 0'));
        $this->_addHoliday('Triytsia', $triyDate, 'Triytsia');

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * Calculates date for Easter using the Gaussian algorithm.
     *
     * @param int $year year
     *
     * @static
     * @access   public
     * @return   object Date
     */
    function calcEaster($year)
    {
        //Use A variation of Gauss' algorithm
        //http://www.smart.net/~mmontes/ortheast.html
        $julianOffset = 13;
        if ($year > 2100) {
            $julianOffset = 14;
        }
        $a = $year % 19;
        $b = $year % 4;
        $c = $year % 7;
        $ra = (19 * $a + 16);
        $r4 = $ra % 30;
        $rb = 2 * $b + 4 * $c + 6 * $r4;
        $r5 = $rb % 7;
        $rc = $r4 + $r5 + $julianOffset;

        $offset = new Date("$year-03-21");
        $offset->addSpan(new Date_Span("$rc, 0, 0, 0"));
        return $offset;




        $date = new Date(sprintf('%04d-%02d-%02d', $year, $month, $day));
        return $date;
    }
}
?>
