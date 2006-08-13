<?php
/**
 * script to automate the generation of the
 * package.xml file.
 *
 * $Id$
 *
 * @author      Stephan Schmidt <schst@php-tools.net>
 * @package     Date_Holidays
 * @subpackage  Tools
 */

/**
 * uses PackageFileManager
 */
require_once 'PEAR/PackageFileManager.php';

/**
 * current version
 */
$version = '0.16.1';

/**
 * current state
 */
$state = 'alpha';

/**
 * release notes
 */
$notes = <<<EOT
- bugfix for Date_Holidays::factoryISO3166(), which did return null instead of a PEAR_Error on failure (luckec)
EOT;

/**
 * package description
 */
$description = <<<EOT
Date_Holidays helps you calculating the dates and titles of holidays and other special celebrations. The calculation is driver-based so it is easy to add new drivers that calculate a country's holidays. The methods of the class can be used to get a holiday's date and title in various languages.
EOT;

$package = new PEAR_PackageFileManager();

$result = $package->setOptions(array(
    'package'           => 'Date_Holidays',
    'summary'           => 'Driver based class to calculate holidays.',
    'description'       => $description,
    'version'           => $version,
    'state'             => $state,
    'license'           => 'PHP License',
    'filelistgenerator' => 'cvs',
    'ignore'            => array(
            'mkSource.php', 'package.php', 'package.xml', 'package2.xml', 'test.php', 'docs/',
            'tests/test_missingLocale.php', 'tests/test_getHolidays.php',
            'tests/testHolidays2005stampsAndSavingsDay.php', '*.zargo', '*.pdf', '*.sh', 'data/',
            'util/', 'TODO', 'updatePear.php', 'changelog'),
    'notes'             => $notes,
    'simpleoutput'      => true,
    'baseinstalldir'    => 'Date',
    'packagedirectory'  => dirname(__FILE__),
    'dir_roles'         => array(
                                 'examples' => 'doc',
                                 'tests' => 'test',
                                 'lang' => 'data'
                                 )
    ));

if (PEAR::isError($result)) {
    echo $result->getMessage();
    die();
}

$package->addMaintainer('luckec', 'lead', 'Carsten Lucke', 'luckec@php.net');
$package->addMaintainer('schst', 'developer', 'Stephan Schmidt', 'schst@php.net');
$package->addMaintainer('wiesemann', 'contributor', 'Mark Wiesemann', 'wiesemann@php.net');

$package->addDependency('PEAR', '1.3.1', 'ge', 'pkg', false);
$package->addDependency('Date', '', 'has', 'pkg', false);
$package->addDependency('XML_Serializer', '', 'has', 'pkg', false);
$package->addDependency('Console_Getargs', '', 'has', 'pkg', true);

if (isset($_GET['make']) || (isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] == 'make')) {
    $result = $package->writePackageFile();
} else {
    $result = $package->debugPackageFile();
}

if (PEAR::isError($result)) {
    echo 'ERROR: ';
    echo $result->getMessage();
    die();
}

echo '[INFO]: Date_Holidays-' . $version . '.tgz' . "\n";
?>
