<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

require_once MAX_PATH . '/lib/OA/Dal.php';
require_once MAX_PATH . '/lib/OA/Dal/DataGenerator.php';

require_once 'XML/RPC.php';

// Include the info-object files
require_once MAX_PATH . '/lib/OA/Dll/AdvertiserInfo.php';
require_once MAX_PATH . '/lib/OA/Dll/AgencyInfo.php';
require_once MAX_PATH . '/lib/OA/Dll/BannerInfo.php';
require_once MAX_PATH . '/lib/OA/Dll/CampaignInfo.php';
require_once MAX_PATH . '/lib/OA/Dll/PublisherInfo.php';
require_once MAX_PATH . '/lib/OA/Dll/UserInfo.php';
require_once MAX_PATH . '/lib/OA/Dll/ZoneInfo.php';

// Initialise and load the base class, avoiding double includes
$api = file_get_contents(MAX_PATH . '/lib/xmlrpc/php/openads-api-xmlrpc.inc.php');
$api = preg_replace('/^.*(class OA_Api_Xmlrpc[ \t\r\n]+\{)/s', '$1', $api);
$fp = fopen(MAX_PATH .'/var/cache/test_api_openads-api-xmlrpc.php', 'w');
fwrite($fp, '<'.'?php '.$api);
require_once(MAX_PATH .'/var/cache/test_api_openads-api-xmlrpc.php');

/**
 * A common class for testing the webservices API
 *
 * It features a very hack-ish but working way to run webservices without the need to
 * start a real instance
 *
 * @package    Openads
 * @subpackage TestSuite
 * @author     Matteo Beccati <matteo.beccati@openads.org>
 */
class Test_OA_Api_XmlRpc extends UnitTestCase
{
    /**
     * @var OA_API_Xmlrpc
     */
    var $oApi;

    function Test_OA_Api_XmlRpc()
    {
        $this->UnitTestCase();

        $this->oApi = &Test_OA_Api_XmlRpc::staticGetApi();
    }

    function &staticGetApi()
    {
        $oApi = &$GLOBALS['_STATIC']['staticGetApi'];

        if (empty($oApi)) {
            define('OA_INSTALLATION_STATUS', OA_INSTALLATION_STATUS_INSTALLED);

            $doAccounts = OA_Dal::factoryDO('accounts');
            $doAccounts->account_type = OA_ACCOUNT_ADMIN;
            $accountId = DataGenerator::generateOne($doAccounts);

            $doUsers = OA_Dal::factoryDO('users');
            $doUsers->username = 'admin_'.md5(uniqid('', true));
            $doUsers->password = md5('secret');
            $doUsers->default_account_id = $accountId;
            $userId = DataGenerator::generateOne($doUsers);

            $doAUA = OA_Dal::factoryDO('account_user_assoc');
            $doAUA->account_id = $accountId;
            $doAUA->user_id    = $userId;
            DataGenerator::generateOne($doAUA);

            $oApi = &new Mocked_OA_Api_Xmlrpc($doUsers->username, 'secret');
        }

        return $oApi;
    }
}

class Mocked_OA_Api_Xmlrpc extends OA_Api_Xmlrpc
{
    function Mocked_OA_Api_Xmlrpc($username, $password)
    {
        parent::OA_Api_Xmlrpc('foo', 'bar', $username, $password);
    }

    function &_getClient($service)
    {
        $oClient = &Mocked_OA_Api_Xmlrpc::staticGetClient();
        $oClient->service = $service;
        return $oClient;
    }

    function &staticGetClient()
    {
        $oClient = &$GLOBALS['_STATIC']['staticGetClient'];

        if (empty($oClient)) {
            $oClient = &new Mocked_XML_RPC_Client();
        }

        return $oClient;
    }
}

class Mocked_XML_RPC_Client
{
    var $service;
    var $aServers = array();

    function send($msg)
    {
        // Only create the payload if it was not created previously
        if (empty($msg->payload)) {
            $msg->createPayload();
        }

        // Initialise XML_RPC_Server instances just once
        if (!isset($this->aServers[$this->service])) {
            // Do not require the file as it is, because it would automatically service
            $file = file_get_contents(MAX_PATH . '/www/api/v1/xmlrpc/'.$this->service);
            // Strip init
            $file = str_replace("require_once '../../../../init.php';", '', $file);
            // Don't service now
            $file = preg_replace('#1 +// *serviceNow#i', '0', $file);
            // Write modified file
            $fp = fopen(MAX_PATH .'/var/cache/test_api_'.$this->service, 'w');
            fwrite($fp, $file);
            // Require it
            require_once(MAX_PATH .'/var/cache/test_api_'.$this->service);
            $this->aServers[$this->service] = new XML_RPC_Server($server->dmap, 0);
        }

        $GLOBALS['HTTP_RAW_POST_DATA'] = $msg->payload;
        $this->aServers[$this->service]->createServerPayload();
        unset($GLOBALS['HTTP_RAW_POST_DATA']);

        $GLOBALS['_STATIC']['staticGetClient'] = &$this;

        return $msg->parseResponse($this->aServers[$this->service]->server_payload);
    }
}

?>