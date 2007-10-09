<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2002 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors:   Jos van der Woude <jos@veerkade.com>                      |
// +----------------------------------------------------------------------+
//
//    $Id$

/**
 * Filter that only accepts official Dutch holidays.
 *
 * @category    Date
 * @package     Date_Holidays
 * @subpackage  Filter
 * @version     $Id$
 * @author      Jos van der Woude <jos@veerkade.com>
 */
class Date_Holidays_Filter_Netherlands_Official extends Date_Holidays_Filter_Whitelist 
{
    /**
     * Constructor.
     * 
     * @param   array   numerical array that contains internal names of holidays
     */
    function __construct() 
    {
        parent::__construct(
            array(
                'newYearsDay',
		'queenDay',
                'goodFriday',
                'easterMonday',
                'whitMonday',
		'ascensionDay',
                'secondXmasDay',
            )
        );
    }
    
    /**
     * Constructor.
     * 
     * Only accepts official Dutch public holidays as described on 
     * http://ec.europa.eu/taxation_customs/dds/cgi-bin/cshoquer?Lang=EN&Country=NL/
     */
    function Date_Holidays_Filter_Netherlands_Official()
    {
        $this->__construct();
    }
}
?>
