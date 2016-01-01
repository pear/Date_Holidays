<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Driver for determining holidays in Russia
 *
 * PHP Version 4 5
 *
 * Copyright (c) 2011 The PHP Group
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Veronica Morales Marquez <veronica.morales.marquez@lut.fi>
 * @author   Poorang Vosough <poorang.vosough@lut.fi>
 * @license  BSD http://www.opensource.org/licenses/bsd-license.php
 * @version  Russia.php v 0.0.4
 * @link     http://pear.php.net/package/Date_Holidays
 */
require_once 'Date/Calc.php';
require_once 'Date/Holidays/Driver/Christian.php';

/**
 * Driver class that calculates Russia holidays
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Veronica Morales Marquez <veronica.morales.marquez@lut.fi>
 * @author   Poorang Vosough <poorang.vosough@lut.fi>
 * @license  BSD http://www.opensource.org/licenses/bsd-license.php
 * @version  Russia.php v 0.0.4
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Russia extends Date_Holidays_Driver
{
    /**
     * this driver's name
     *
     * @access   protected
     * @var      string
     */
    var $_driverName = 'Russia';

    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of
     * a certain driver
     *
     * @access   protected
     */
    public function __construct()
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
        parent::_buildHolidays();

        /**
         * New Year's Day and Christmas
         */
        $newYearsDay1 = new DateTime($this->_year . '-01-01');
        $this->_addHoliday('newYearsDay1', $newYearsDay1, 'New Year\'s Day');
        if ($newYearsDay1->format('w') == 0) { // 0 = Sunday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-01-02',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-03',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-04',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-05',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay6',
                $this->_year . '-01-06',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
        } elseif ($newYearsDay1->format('w') == 1) { // 1 = Monday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-01-02',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-03',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-04',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-05',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
            $this->_addHoliday(
                'newYearsDay6',
                $this->_year . '-01-08',
                'New Year\'s Day'
            );
        } elseif ($newYearsDay1->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-01-02',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-03',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-04',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-08',
                'New Year\'s Day'
            );
        } elseif ($newYearsDay1->format('w') == 3) { // 3 = Wednesday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-01-02',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-03',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-06',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-08',
                'New Year\'s Day'
            );
        } elseif ($newYearsDay1->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-01-02',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-05',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-06',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-08',
                'New Year\'s Day'
            );
        } elseif ($newYearsDay1->format('w') == 5) { // 5 = Friday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-01-04',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-05',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-06',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-08',
                'New Year\'s Day'
            );
        } elseif ($newYearsDay1->format('w') == 6) { // 6 = Saturday
            $this->_addHoliday(
                'newYearsDay2',
                $this->_year . '-03-03',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay3',
                $this->_year . '-01-04',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay4',
                $this->_year . '-01-05',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'newYearsDay5',
                $this->_year . '-01-06',
                'New Year\'s Day'
            );
            $this->_addHoliday(
                'christmasDay',
                $this->_year . '-01-07',
                'Christmas Day'
            );
            $this->_addHoliday(
                'newYearsDay6',
                $this->_year . '-01-08',
                'New Year\'s Day'
            );
        }

        /**
         * International Women's Day
         */
        $womensDay = new DateTime($this->_year . '-03-08');
        /*bridge and moving holidays*/
        if ($womensDay->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday(
                'womensDay1',
                $this->_year . '-03-07',
                'International Women\'s Day'
            );
            $this->_addHoliday(
                'womensDay2',
                $this->_year . '-03-08',
                'International Women\'s Day'
            );
        } elseif ($womensDay->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday(
                'womensDay1',
                $this->_year . '-03-08',
                'International Women\'s Day'
            );
            $this->_addHoliday(
                'womensDay2',
                $this->_year . '-03-09',
                'International Women\'s Day'
            );
        } else {
            if ($womensDay->format('w') == 6) { // 6=Saturday
                $womensDay = $this->_year . '-03-10';
            } elseif ($womensDay->format('w') == 0) { // 0=Sunday
                $womensDay = $this->_year . '-03-09';
            }
            $this->_addHoliday(
                'womensDay',
                $womensDay,
                'International Women\'s Day'
            );
        }

        /**
         * Defender of the Fatherland Day
         */
        $defenderFatherlandDay = new DateTime($this->_year . '-02-23');
        /*bridge and moving holidays*/
        if ($defenderFatherlandDay->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday(
                'defenderFatherlandDay1',
                $this->_year . '-02-22',
                'Defender of the Fatherland Day'
            );
            $this->_addHoliday(
                'defenderFatherlandDay2',
                $this->_year . '-02-23',
                'Defender of the Fatherland Day'
            );
        } elseif ($defenderFatherlandDay->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday(
                'defenderFatherlandDay1',
                $this->_year . '-02-23',
                'Defender of the Fatherland Day'
            );
            $this->_addHoliday(
                'defenderFatherlandDay2',
                $this->_year . '-02-24',
                'Defender of the Fatherland Day'
            );
        } else {
            if ($defenderFatherlandDay->format('w') == 6) { // 6=Saturday
                $defenderFatherlandDay = $this->_year . '-02-25';

            } elseif ($defenderFatherlandDay->format('w') == 0) { // 0=Sunday
                $defenderFatherlandDay = $this->_year . '-02-24';
            }
            $this->_addHoliday(
                'defenderFatherlandDay',
                $defenderFatherlandDay,
                'Defender of the Fatherland Day'
            );
        }

        /**
         * Spring and Labour Day
         */
        $springLabourDay = new DateTime($this->_year . '-05-01');
        /*bridge and moving holidays*/
        if ($springLabourDay->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday(
                'springLabourDay1',
                $this->_year . '-04-30',
                'Spring and Labour Day'
            );
            $this->_addHoliday(
                'springLabourDay2',
                $this->_year . '-05-01',
                'Spring and Labour Day'
            );
        } elseif ($springLabourDay->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday(
                'springLabourDay1',
                $this->_year . '-05-01',
                'Spring and Labour Day'
            );
            $this->_addHoliday(
                'springLabourDay2',
                $this->_year . '-05-02',
                'Spring and Labour Day'
            );
        } else {
            if ($springLabourDay->format('w') == 6) { // 6=Saturday
                $springLabourDay = $this->_year . '-05-03';

            } elseif ($springLabourDay->format('w') == 0) { // 0=Sunday
                $springLabourDay = $this->_year . '-05-02';
            }
            $this->_addHoliday(
                'springLabourDay',
                $springLabourDay,
                'Spring and Labour Day'
            );
        }

        /**
         * Victory Day
         */
        $victoryDay = new DateTime($this->_year . '-05-09');
        /*bridge and moving holidays*/
        if ($victoryDay->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday(
                'victoryDay1',
                $this->_year . '-05-08',
                'Victory Day'
            );
            $this->_addHoliday(
                'victoryDay2',
                $this->_year . '-05-09',
                'Victory Day'
            );
        } elseif ($victoryDay->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday(
                'victoryDay1',
                $this->_year . '-05-09',
                'Victory Day'
            );
            $this->_addHoliday(
                'victoryDay2',
                $this->_year . '-05-10',
                'Victory Day'
            );
        } else {
            if ($victoryDay->format('w') == 6) { // 6=Saturday
                $victoryDay = $this->_year . '-05-11';

            } elseif ($victoryDay->format('w') == 0) { // 0=Sunday
                $victoryDay = $this->_year . '-05-10';
            }
            $this->_addHoliday('victoryDay', $victoryDay, 'Victory Day');
        }

        /**
         * Russia Day
         */
        $russiaDay = new DateTime($this->_year . '-06-12');
        /*bridge and moving holidays*/
        if ($russiaDay->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday('russiaDay1', $this->_year . '-06-11', 'Russia Day');
            $this->_addHoliday('russiaDay2', $this->_year . '-06-12', 'Russia Day');
        } elseif ($russiaDay->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday('russiaDay1', $this->_year . '-06-12', 'Russia Day');
            $this->_addHoliday('russiaDay2', $this->_year . '-06-13', 'Russia Day');
        } else {
            if ( $russiaDay->format('w') == 6) { // 6=Saturday
                $russiaDay = $this->_year . '-06-14';

            } elseif ($russiaDay->format('w') == 0) { // 0=Sunday
                $russiaDay = $this->_year . '-06-13';
            }
            $this->_addHoliday('russiaDay', $russiaDay, 'Russia Day');
        }

        /**
         * Unity Day
         */
        $unityDay = new DateTime($this->_year . '-11-04');
        /*bridge and moving holidays*/
        if ($unityDay->format('w') == 2) { // 2 = Tuesday
            $this->_addHoliday('unityDay1', $this->_year . '-11-03', 'Unity Day');
            $this->_addHoliday('unityDay2', $this->_year . '-11-04', 'Unity Day');
        } elseif ($unityDay->format('w') == 4) { // 4 = Thursday
            $this->_addHoliday('unityDay1', $this->_year . '-11-04', 'Unity Day');
            $this->_addHoliday('unityDay2', $this->_year . '-11-05', 'Unity Day');
        } else {
            if ($unityDay->format('w') == 6) { // 6=Saturday
                $unityDay = $this->_year . '-11-06';

            } elseif ($unityDay->format('w') == 0) { // 0=Sunday
                $unityDay = $this->_year . '-11-05';
            }
            $this->_addHoliday('unityDay', $unityDay, 'Unity Day');
        }

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }

    /**
     * Method that returns an array containing the ISO3166 codes that may possibly
     * identify a driver.
     *
     * @static
     * @access public
     * @return array possible ISO3166 codes
     */
    function getISO3166Codes()
    {
        return array('ru', 'RU');
    }
}
?>
