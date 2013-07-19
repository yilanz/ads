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

require_once MAX_PATH . '/lib/OX/M2M/M2MProtectedRpc.php';
require_once dirname(__FILE__) . '/oxPublisherConsoleClientException.php';

/**
 *  OpenX Market plugin - Publisher Console API client
 *
 * @package    OpenXPlugin
 * @subpackage openXMarket
 * @author     Andriy Petlyovanyy <apetlyovanyy@lohika.com>
 */

class Plugins_admin_oxMarket_PublisherConsoleClient
{
    /**
     * @var OX_M2M_M2MProtectedRpc
     */
    private $xml_rpc_client;

    /**
     * @var integer
     */
    private $publisher_account_id;

    private function ensurePublisherAccountIdIsSet()
    {
        if (!isset($this->publisher_account_id)) {
            throw new Plugins_admin_oxMarket_PublisherConsoleClientException(
                'publisher_account_id can not be null');
        }
    }

    protected function callXmlRpcFunctionWithPCAccount($function, $params = array())
    {
        $this->ensurePublisherAccountIdIsSet();
        $paramsWithPCAccount = array_merge(
            array($this->publisher_account_id), $params);
        return $this->xml_rpc_client->call($function, $paramsWithPCAccount);
    }

    /**
     * @param OX_M2M_M2MProtectedRpc $xml_rpc_client
     * @param integer $publisher_account_id
     */
    public function __construct(OX_M2M_M2MProtectedRpc $xml_rpc_client,
        $publisher_account_id = null)
    {
        $this->publisher_account_id = $publisher_account_id;
        $this->xml_rpc_client       = $xml_rpc_client;
    }

    /**
     * @param integer $publisher_account_id
     */
    public function setPublisherAccountId($publisher_account_id)
    {
        $this->publisher_account_id = $publisher_account_id;
        $this->ensurePublisherAccountIdIsSet();
    }

    /**
     * @param string $username
     * @param string $password
     * @return integer publisher_account_id
     */
    public function linkOxp($username, $password)
    {
        return $this->xml_rpc_client->call('linkOxp',
            array($username, md5($password)));
    }

    /**
     * @param integer $lastUpdate
     * @return string statistics file content
     */
    public function oxmStatistics($lastUpdate)
    {
        return $this->callXmlRpcFunctionWithPCAccount('oxmStatistics',
            array($lastUpdate));
    }

    /**
     * @param string $websiteUrl
     * @return integer website id
     */
    public function newWebsite($websiteUrl)
    {
        return $this->callXmlRpcFunctionWithPCAccount('newWebsite', array(
            $websiteUrl));
    }

    /**
     * @param integer $websiteId
     * @param string $websiteUrl
     * @param array $att_ex
     * @param array $cat_ex
     * @param array $typ_ex
     * @return integer website id
     *      */
    public function updateWebsite($websiteId, $websiteUrl, $att_ex,
        $cat_ex, $typ_ex)
    {
        return $this->callXmlRpcFunctionWithPCAccount('updateWebsite',
            array($websiteId, $websiteUrl, $att_ex, $cat_ex, $typ_ex));
    }

    /**
     * Get Publisher Console account status
     *
     * @return integer account status
     */
    public function getAccountStatus()
    {
        return $this->callXmlRpcFunctionWithPCAccount('getAccountStatus',
            array());
    }
}