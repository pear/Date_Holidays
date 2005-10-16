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
$version = '0.14.0';

/**
 * current state
 */
$state = 'alpha';

/**
 * release notes
 */
$notes = <<<EOT
- Switched from using INI files for translation to XML files
- Added script to convert INI files to XML files
- Added script to compile XML based language files
- Holidays can now have various properties (see "languagefile-with-properties.xml" in examples-directory)
- removed "againstNoiseDay" !BC break! from Germany driver, cannot be calculated automatically
- new driver-methods:
   = addCompiledTranslationFile(), allows adding compiled language-data files for performance improvements
   = getHolidaysForDatespan(), returns holidays within a given time span
- several bugfixes
- Added filters for german federal states (contributed by Mark Wiesemann)
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
    'ignore'            => array('mkSource.php', 'package.php', 'package.xml', 'package2.xml', 'test.php', 'doc/', 'tests/',
	'test2.php', '*.zargo', '*.pdf', '*.sh', 'data/', 'util/', 'TODO', 'updatePear.php', 'changelog'),
    'notes'             => $notes,
    'simpleoutput'      => true,
    'baseinstalldir'    => 'Date',
    'packagedirectory'  => './',
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
$package->addMaintainer('schst', 'helper', 'Stephan Schmidt', 'schst@php.net');
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
