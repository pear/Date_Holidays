<?php
/**
 * Test class for running unit tests related to the driver for holidays in Sweden
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in Sweden
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Sweden_TestSuite extends PHPUnit_Framework_TestCase
{


    var $testDates2005 = array(
        'newYearsDay'           => array('day'=>1,
                                         'month'=>1,
                                         'year'=>2005),
        'epiphany'              => array('day' => 6,
                                         'month'=>1,
                                         'year'=>2005),
        'goodFriday'            => array('day'=>25,
                                         'month'=>3,
                                         'year'=>2005),
        'easter'                => array('day'=>27,
                                         'month'=>3,
                                         'year'=>2005),
        'easterMonday'          => array('day'=>28,
                                         'month'=>3,
                                         'year'=>2005),
        'mayDay'                => array('day'=>1,
                                         'month'=>5,
                                         'year'=>2005),
        'ascensionDay'          => array('day'=>5,
                                         'month'=>5,
                                         'year'=>2005),
        'pentecost'             => array('day'=>15,
                                         'month'=>5,
                                         'year'=>2005),
        'swedenNationalDay'     => array('day'=>6,
                                         'month'=>6,
                                         'year'=>2005),
        'midSummerEve'          => array('day'=>24,
                                         'month'=>6,
                                         'year'=>2005),
        'midSummer'             => array('day'=>25,
                                         'month'=>6,
                                         'year'=>2005),
        'allSaintsDay'          => array('day'=>5,
                                         'month'=>11,
                                         'year'=>2005),
        'christmasEve'               => array('day'=>24,
                                         'month'=>12,
                                         'year'=>2005),
        'christmasDay'               => array('day'=>25,
                                         'month'=>12,
                                         'year'=>2005),
        'boxingDay'             => array('day'=>26,
                                         'month'=>12,
                                         'year'=>2005),
        'newYearsEve'           => array('day'=>31,
                                         'month'=>12,
                                         'year' => 2005)
    );

    var $testDates2006 = array(
        'newYearsDay'           => array('day'=>1,
                                         'month'=>1,
                                         'year'=>2006),
        'epiphany'              => array('day' => 6,
                                         'month'=>1,
                                         'year'=>2006),
        'goodFriday'            => array('day'=>14,
                                         'month'=>4,
                                         'year'=>2006),
        'easter'                => array('day'=>16,
                                         'month'=>4,
                                         'year'=>2006),
        'easterMonday'          => array('day'=>17,
                                         'month'=>4,
                                         'year'=>2006),
        'mayDay'                => array('day'=>1,
                                         'month'=>5,
                                         'year'=>2006),
        'ascensionDay'          => array('day'=>25,
                                         'month'=>5,
                                         'year'=>2006),
        'pentecost'             => array('day'=>4,
                                         'month'=>6,
                                         'year'=>2006),
        'swedenNationalDay'     => array('day'=>6,
                                         'month'=>6,
                                         'year'=>2006),
        'midSummerEve'          => array('day'=>23,
                                         'month'=>6,
                                         'year'=>2006),
        'midSummer'             => array('day'=>24,
                                         'month'=>6,
                                         'year'=>2006),
        'allSaintsDay'          => array('day'=>4,
                                         'month'=>11,
                                         'year'=>2006),
        'christmasEve'               => array('day'=>24,
                                         'month'=>12,
                                         'year'=>2006),
        'christmasDay'               => array('day'=>25,
                                         'month'=>12,
                                         'year'=>2006),
        'boxingDay'             => array('day'=>26,
                                         'month'=>12,
                                         'year'=>2006),
        'newYearsEve'           => array('day'=>31,
                                         'month'=>12,
                                         'year' => 2006));

    protected $lang_dir;

    /**
     * setup
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->lang_dir = helper_get_lang_dir('Date_Holidays_Sweden');
    }

    /**
     * test Holidays for 2005
     *
     * @access public
     * @return void
     */
    function testHolidays2005()
    {
        $drv = Date_Holidays::factory('Sweden', 2005, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2005 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
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
        $drv = Date_Holidays::factory('Sweden', 2006, 'en_EN');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

    /**
     * test German translations of Swedish Holidays.
     *
     * @access public
     * @return void
     */
    function testGermanTranslations()
    {
        $locale = 'de_DE';

        $drv = Date_Holidays::factory('Sweden', 2005, $locale);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        $result = $drv->addTranslationFile(
            $this->lang_dir . '/Sweden/de_DE.xml', $locale
        );
        if ($result !== true) {
            $this->fail(helper_get_error_message($result));
        }

        $easter = $drv->getHoliday('easter');
        $this->assertEquals(
            'Ostersonntag',
            $easter->getTitle(),
            'Translated title for \'easter\''
        );
    }

    /**
     * test compiled German translations of Swedish Holidays.
     *
     * @access public
     * @return void
     */
    function testcompiledGermanTranslations()
    {
        $locale = 'de_DE';

        $drv = Date_Holidays::factory('Sweden', 2005, $locale);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        $result = $drv->addCompiledTranslationFile(
            $this->lang_dir . '/Sweden/de_DE.ser', $locale
        );
        if ($result !== true) {
            $this->fail(helper_get_error_message($result));
        }

        $easter = $drv->getHoliday('easter');
        $this->assertEquals(
            'Ostersonntag',
            $easter->getTitle(),
            'Translated title for \'easter\''
        );

        $midsummerEve = $drv->getHoliday('midSummerEve');
        $this->assertEquals(
            'Mittsommerabend',
            $midsummerEve->getTitle(),
            'Translated title for \'midSummerEve\''
        );
    }

    /**
     * test Swedish translations of Swedish Holidays.
     *
     * @access public
     * @return void
     */
    function testSwedishTranslations()
    {
        $locale = 'de_DE';

        $drv = Date_Holidays::factory('Sweden', 2005, $locale);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        $result = $drv->addTranslationFile(
            $this->lang_dir . '/Sweden/de_DE.xml', $locale
        );
        if ($result !== true) {
            $this->fail(helper_get_error_message($result));
        }

        $easter = $drv->getHoliday('easter');
        $this->assertEquals(
            'Ostersonntag',
            $easter->getTitle(),
            'Translated title for \'easter\''
        );
    }

    /**
     * test compiled Swedish translations of Swedish Holidays.
     *
     * @access public
     * @return void
     */
    function testcompiledSwedishTranslations()
    {
        $locale = 'sv_SE';

        $drv = Date_Holidays::factory('Sweden', 2005, $locale);
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }
        $result = $drv->addCompiledTranslationFile(
            $this->lang_dir . '/Sweden/sv_SE.ser', $locale
        );
        if ($result !== true) {
            $this->fail(helper_get_error_message($result));
        }

        $easter = $drv->getHoliday('easter');
        $this->assertEquals(
            'Påskdagen',
            $easter->getTitle(),
            'Translated title for \'easter\''
        );

        $midsummerEve = $drv->getHoliday('midSummerEve');
        $this->assertEquals(
            'Midsommarafton',
            $midsummerEve->getTitle(),
            'Translated title for \'midSummerEve\''
        );
    }

}
// vim:set et ts=4 sw=4:
?>
