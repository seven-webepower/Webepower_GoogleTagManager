<?php
/**
 * Copyright © WebePower LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.webepower.biz | support@webepower.biz
 */

namespace Webepower\GoogleTagManager\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    /**
     * Active flag
     */
    const XML_PATH_ACTIVE = 'googletagmanager/general/active';

    /**
     * Account number
     */
    const XML_PATH_ACCOUNT = 'googletagmanager/general/account';   

    /**
     * Whether Tag Manager is ready to use
     *
     * @param null $store_id
     * @return bool
     */
    public function isEnabled($store_id = null)
    {
        $accountId = $this->scopeConfig->getValue(
            self::XML_PATH_ACCOUNT,
            ScopeInterface::SCOPE_STORE,
            $store_id
        );

        $active = $this->scopeConfig->isSetFlag(
            self::XML_PATH_ACTIVE,
            ScopeInterface::SCOPE_STORE,
            $store_id
        );

        return $accountId && $active;
    }    

    /**
     * Get Tag Manager Account ID
     *
     * @param null $store_id
     * @return null | string
     */
    public function getAccountId($store_id = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ACCOUNT,
            ScopeInterface::SCOPE_STORE,
            $store_id
        );
    }   
}