<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Driver for determining holidays of some PHP.net members
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
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/**
 * Driver-class that calculates the birthdates of the PHP.net people. :)
 *
 * @category   Date
 * @package    Date_Holidays
 * @subpackage Driver
 * @author     Carsten Lucke <luckec@tool-garage.de>
 * @license    http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version    CVS: $Id$
 * @link       http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_PHPdotNet extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of a
     * certain driver
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
        $static = array(
            // Lukas Smith: 5 November 1977, Germany?
            'lsmith'   => array(
                'date'          => '11-05',
                'title'         => 'Lukas Smith'
            ),
            // Stephan Schmidt: 12 May 1974, Germany
            'schst'   => array(
                'date'          => '05-12',
                'title'         => 'Stephan Schmidt'
            ),
            // Carsten Lucke: 9 September 1980, Germany
            'luckec'   => array(
                'date'          => '09-09',
                'title'         => 'Carsten Lucke'
            ),
            // Arnaud Limbourg: 14 March 1976, France
            'arnaud'   => array(
                'date'          => '03-14',
                'title'         => 'Arnaud Limbourg'
            ),
            // Sebastian Bergmann: 22 April 1978, Germany
            'sebastian'   => array(
                'date'          => '04-22',
                'title'         => 'Sebastian Bergmann'
            ),
            // Akash Mahajan: 20 May 1981, India
            'akash'   => array(
                'date'          => '05-20',
                'title'         => 'Akash Mahajan'
            ),
            // Greg Beaver: 2 September 1976, USA
            'cellog'   => array(
                'date'          => '09-02',
                'title'         => 'Gregory Beaver'
            ),
            // Ryan King: 31 March 1982, USA
            'ryansking'   => array(
                'date'          => '03-31',
                'title'         => 'Ryan King'
            ),
            // Helgi Þormar Þorbjörnsson: 4 November 1986, Iceland
            'dufuz'   => array(
                'date'          => '11-04',
                'title'         => 'Helgi Þormar Þorbjörnsson'
            ),
            // Tobias Schlitt: 19 May 1980, Germany
            'toby'   => array(
                'date'          => '05-19',
                'title'         => 'Tobias Schlitt'
            ),
            // Sebastian Mordziol, 7 February 1975
            'argh'   => array(
                'date'          => '02-07',
                'title'         => 'Sebastian Mordziol'
            ),
            // Jeroen Steggink: 7 December 1981, Netherlands
            'steggink'   => array(
                'date'          => '12-07',
                'title'         => 'Jeroen Steggink'
            ),
            // Dylan Anderson: 21 October 1981, Canada
            'anderson'   => array(
                'date'          => '10-21',
                'title'         => 'Dylan Anderson'
            ),
            // James McGlinn: 10 January 1980, New Zealand
            'mcglinn'   => array(
                'date'          => '01-10',
                'title'         => 'James McGlinn'
            ),
            // Wilfredo Ignacio Pachón López: 31 July 1977, Colombia
            'lopez'   => array(
                'date'          => '07-31',
                'title'         => 'Wilfredo Ignacio Pachón López'
            ),
            //Chuck Burgess
            'ashnazg' => array(
                'date'          => '01-09',
                'title'         => 'Chuck Burgess'
            )
        );

        $this->_addStaticHolidays($static);
        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }
}
?>
