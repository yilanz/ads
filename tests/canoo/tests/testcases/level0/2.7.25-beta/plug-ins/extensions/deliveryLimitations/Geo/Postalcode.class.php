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

require_once LIB_PATH . '/Extension/deliveryLimitations/DeliveryLimitations.php';

/**
 * A Geo delivery limitation plugin, for filtering delivery of ads on the
 * basis of the viewer's postal code (US/Canada only).
 *
 * Valid comparison operators:
 * ==, !=,=~,!~,=x,!x
 *
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 * @author     Andrew Hill <andrew@m3.net>
 * @author     Chris Nutting <chris@m3.net>
 */
class Plugins_DeliveryLimitations_Geo_Postalcode extends Plugins_DeliveryLimitations
{

    function Plugins_DeliveryLimitations_Geo_Postalcode()
    {
        $this->Plugins_DeliveryLimitations();
        $this->columnName = 'geo_postal_code';
    }

    /**
     * Return name of plugin
     *
     * @return string
     */
    function getName()
    {
        return MAX_Plugin_Translation::translate('US/Canada Postal Code', $this->extension, $this->group);
    }

    /**
     * Return if this plugin is available in the current context
     *
     * @return boolean
     */
    function isAllowed()
    {
        return ((isset($GLOBALS['_MAX']['GEO_DATA']['postal_code']))
            || $GLOBALS['_MAX']['CONF']['geotargeting']['showUnavailable']);
    }
}

?>
