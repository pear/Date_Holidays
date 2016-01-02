<?php
error_reporting(E_ALL ^ E_STRICT);
// if (! $fp = @fopen('Date.php', 'r', true)) {
//     die("skip PEAR_Date is required for these tests to run.\n");
// }

if ($fp = @fopen('PHPUnit/Autoload.php', 'r', true)) {
    require_once 'PHPUnit/Autoload.php';
} elseif ($fp = @fopen('PHPUnit/Framework.php', 'r', true)) {
    require_once 'PHPUnit/Framework.php';
    require_once 'PHPUnit/TextUI/TestRunner.php';
} else {
    if (!class_exists("PHPUnit_Framework_TestCase")) {
        die('skip could not find PHPUnit');
    }
}
if ($fp !== false) {
    fclose($fp);
}

if ('@data_dir@' == '@'.'data_dir'.'@') {
    // This package hasn't been installed.
    // Adjust path to ensure includes find files in working directory.
    set_include_path(dirname(dirname(__FILE__))
        . PATH_SEPARATOR . dirname(__FILE__)
        . PATH_SEPARATOR . get_include_path());
}

require_once 'Date/Holidays.php';

function helper_get_lang_dir($package) {
    if ('@data_dir@' == '@'.'data_dir'.'@') {
        return dirname(dirname(__FILE__)) . '/lang';
    } else {
        return "@data_dir@/$package/lang";
    }
}

/**
 * Gets messages from error objects
 *
 * Needed because Date_Holidays is inconsistent about error returns.
 *
 * @param $obj  PEAR_Error|PEAR_ErrorStack
 * @return string  the human readable error message
 */
function helper_get_error_message($obj) {
    if ($obj instanceof PEAR_ErrorStack) {
        $errors = $obj->getErrors(true);
        $msgs = array();
        foreach ($errors as $err) {
            $msgs[] = $err['message'];
        }
        return implode("\n", $msgs);
    } elseif ($obj instanceof PEAR_Error) {
        return $obj->getMessage();
    } elseif (is_scalar($obj)) {
        return (string)$obj;
    }
    die("helper_get_error() got unexpected data type.\n");
}
