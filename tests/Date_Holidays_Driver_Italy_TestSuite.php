<?php
/**
 * Test class for running unit tests related to the driver for holidays in Italy
 *
 * PHP Versions 4 and 5
 *
 * @uses     PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in Italy
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Italy_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2006;
    var $testDates2007;
    var $testDates2008;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testTranslations = array(
            'newYearsDay'     =>  'Capodanno',
            'epiphany'        =>  'Epifania',
            'easter'          =>  'Pasqua',
            'goodFriday'      =>  'Venerdi` Santo',
            'easterMonday'    =>  'Lunedi` dell\'Angelo',
            'dayOfWork'       =>  'Festa del Lavoro',
            'republicDay'     =>  'Festa della Repubblica',
            'endofwarDay'     =>  'Festa della Liberazione',
            'mariaAscension'  =>  'Assunzione di Maria Vergine',
            'mariaConception' =>  'Immacolata Concezione',
            'allSaintsDay'    =>  'Ognissanti',
            'allSoulsDay'     =>  'Commemorazione dei Defunti',
            'christmasEve'    =>  'Vigilia di Natale',
            'christmasDay'    =>  'Santo Natale',
            'StStephensDay'   =>  'Santo Stefano',
            'newYearsEve'     =>  'San Silvestro',
        );

        $this->testDates2006 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2006),
                'epiphany' => array ('day' => 6,
                    'month' => 1,
                    'year' => 2006),
                'easter' => array ('day' => 16,
                    'month' => 4,
                    'year' => 2006),
                'goodFriday' => array ('day' => 14,
                    'month' => 4,
                    'year' => 2006),
                'easterMonday' => array ('day' => 17,
                    'month' => 4,
                    'year' => 2006),
                'dayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2006),
                'republicDay' => array ('day' => 2,
                    'month' => 6,
                    'year' => 2006),
                'endofwarDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2006),
                'mariaAscension' => array ('day' => 15,
                    'month' => 8,
                    'year' => 2006),
                'mariaConception' => array ('day' => 8,
                    'month' => 12,
                    'year' => 2006),
                'allSaintsDay' => array ('day' => 1,
                    'month' => 11,
                    'year' => 2006),
                'allSoulsDay' => array ('day' => 2,
                    'month' => 11,
                    'year' => 2006),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2006),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2006),
                'StStephensDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2006),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2007),
                'epiphany' => array ('day' => 6,
                    'month' => 1,
                    'year' => 2007),
                'easter' => array ('day' => 8,
                    'month' => 4,
                    'year' => 2007),
                'goodFriday' => array ('day' => 6,
                    'month' => 4,
                    'year' => 2007),
                'easterMonday' => array ('day' => 9,
                    'month' => 4,
                    'year' => 2007),
                'dayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2007),
                'republicDay' => array ('day' => 2,
                    'month' => 6,
                    'year' => 2007),
                'endofwarDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2007),
                'mariaAscension' => array ('day' => 15,
                    'month' => 8,
                    'year' => 2007),
                'mariaConception' => array ('day' => 8,
                    'month' => 12,
                    'year' => 2007),
                'allSaintsDay' => array ('day' => 1,
                    'month' => 11,
                    'year' => 2007),
                'allSoulsDay' => array ('day' => 2,
                    'month' => 11,
                    'year' => 2007),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2007),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2007),
                'StStephensDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2007),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2008),
                'epiphany' => array ('day' => 6,
                    'month' => 1,
                    'year' => 2008),
                'easter' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2008),
                'goodFriday' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2008),
                'easterMonday' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2008),
                'dayOfWork' => array ('day' => 1,
                    'month' => 5,
                    'year' => 2008),
                'republicDay' => array ('day' => 2,
                    'month' => 6,
                    'year' => 2008),
                'endofwarDay' => array ('day' => 25,
                    'month' => 4,
                    'year' => 2008),
                'mariaAscension' => array ('day' => 15,
                    'month' => 8,
                    'year' => 2008),
                'mariaConception' => array ('day' => 8,
                    'month' => 12,
                    'year' => 2008),
                'allSaintsDay' => array ('day' => 1,
                    'month' => 11,
                    'year' => 2008),
                'allSoulsDay' => array ('day' => 2,
                    'month' => 11,
                    'year' => 2008),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2008),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2008),
                'StStephensDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2008),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2008),
                );

    }

    /**
     * test Italian Translations
     *
     * @access public
     * @return void
     */
    function testItalianTranslations()
    {
        $drv = Date_Holidays::factory('Italy', 2007, 'it_IT');
        $this->assertFalse(Date_Holidays::isError($drv));
        foreach ($this->testTranslations as $name => $translation) {
            $day  = $drv->getHoliday($name);
            $name = $day->getInternalName();
            $this->assertEquals($translation,
                $day->getTitle(),
                "Translated title for '$name'");
        }
    }

    /**
     * test Holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('Italy', 2008, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv), "Driver construction");

        foreach ($this->testDates2008 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('Italy', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv), "Driver construction");

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    /**
     * test Holidays for 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {
        $drv = Date_Holidays::factory('Italy', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2006 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

}

?>
