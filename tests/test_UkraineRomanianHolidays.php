<?php
/**
 * @author      Ken Guest <ken@linux.ie>
 * @license     GPL (see http://www.gnu.org/licenses/gpl.txt)
 *
 * Quick and dirty  tests for holidays in the Ukraine and Romania - phpunit tests
 * will follow shortly.
 * Check against data in the docs directory.
 */

require_once "Date/Holidays.php";

$countries = array("Romania", "Ukraine");
foreach($countries as $country) {
    echo  "\n$country\n";
    echo str_pad("", strlen($country),"="), "\n";
    $date = getdate();
    $year = $date['year'];
    $year = 2007;
    for ($year = 2006; $year <= 2008; $year++) {
        echo "\nYEAR: $year\n";

        $d1 = "$year-01-01";
        $d2 = "$year-12-31";
        $t1 = strtotime($d1);
        $t2 = strtotime($d2);

        $driver = &Date_Holidays::factory($country, $year, 'en_EN');
        $hols   = ($driver->getHolidaysForDatespan($t1,$t2));

        foreach($hols as $holiday) {
            echo  str_pad($holiday->getTitle(), 30, ' ') , $holiday->getDate()->format("%d %b %Y"),"\n";
        }

    }
}
?>
