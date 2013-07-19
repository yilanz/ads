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
 * @author     Matteo Beccati <matteo.beccati@openx.org>
 */

if (!isset($GLOBALS['_MAX']['_GEOCACHE']['country'])) {
    $pathPlugins = MAX_PATH.$GLOBALS['_MAX']['CONF']['pluginPaths']['plugins'].'/deliveryLimitations/Geo/data/';
    require $pathPlugins.'res-iso3166.inc.php';

    $res = array();

    foreach ($OA_Geo_ISO3166 as $k => $v) {
        if (!in_array($k, $OA_Geo_ISO3166_Deprecated) && !in_array($k, $OA_Geo_ISO3166_MaxMind)) {
            $res[$k] = MAX_Plugin_Translation::translate($v, $this->extension, $this->group);
        }
    }

    asort($res);

    foreach ($OA_Geo_ISO3166_MaxMind as $k => $v) {
        $res[$k] = MAX_Plugin_Translation::translate($v, $this->extension, $this->group);
    }

    $GLOBALS['_MAX']['_GEOCACHE']['country'] = $res;
} else {
    $res = $GLOBALS['_MAX']['_GEOCACHE']['country'];
}

?>
