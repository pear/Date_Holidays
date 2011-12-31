<?php
/**
 * Test class for running unit tests that make sure bugs that have been
 * reported and fixed don't make it back into the package. ;-)
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests that make sure bugs that have been
 * reported and fixed don't make it back into the package. ;-)
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Bugfix_Retests_TestSuite extends PHPUnit_Framework_TestCase
{

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp() {}

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testBug12807()
    {
        $drv = Date_Holidays::factory('Denmark');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        $this->assertTrue($drv->isHoliday(mktime(1, 1, 1, 12, 25, 2007)));
        $this->assertTrue($drv->isHoliday(mktime(1, 1, 1, 1, 1, 2007)));
        $this->assertTrue($drv->isHoliday(mktime(1, 1, 1, 1, 1, 2009)));
        $this->assertTrue($drv->isHoliday(mktime(1, 1, 1, 12, 25, 2007)));
        $this->assertTrue($drv->isHoliday(mktime(1, 1, 1, 12, 25, 2009)));

    }

}

?>
