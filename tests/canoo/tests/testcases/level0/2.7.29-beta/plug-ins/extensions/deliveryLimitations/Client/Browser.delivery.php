<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 * @author     Chris Nutting <chris.nutting@openx.org>
 * @author     Andrzej Swedrzynski <andrzej.swedrzynski@openx.org>
 */

require_once MAX_PATH . '/lib/max/Delivery/limitations.delivery.php';

/**
 * Check to see if this impression contains the valid browser.
 *
 * @param string $limitation The browser (or comma list of browsers) limitation
 * @param string $op The operator ('==', '!=', '=~', '!~')
 * @param array $aParams An array of additional parameters to be checked
 * @return boolean Whether this impression's browser passes this limitation's test.
 */
function MAX_checkClient_Browser($limitation, $op, $aParams = array())
{
    return MAX_limitationsMatchArray('browser', $limitation, $op, $aParams);
}

/**
 * A function to set the viewer's useragent information in the
 * $GLOBALS['_MAX']['CLIENT'] global variable, if the option to use
 * phpSniff to extract useragent information is set in the
 * configuration file.
 */
function MAX_remotehostSetClientInfo()
{
    if ($GLOBALS['_MAX']['CONF']['Client']['sniff'] && isset($_SERVER['HTTP_USER_AGENT'])) {
        if (!class_exists('phpSniff')) {
            include MAX_PATH.$GLOBALS['_MAX']['CONF']['pluginPaths']['extensions'].'deliveryLimitations/Client/lib/phpSniff/phpSniff.class.php';
        }
        $client = new phpSniff($_SERVER['HTTP_USER_AGENT']);
        $GLOBALS['_MAX']['CLIENT'] = $client->_browser_info;
    }
}


?>
