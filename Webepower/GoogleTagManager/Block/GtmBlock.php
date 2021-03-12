<?php
/**
 * Copyright © WebePower LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.webepower.biz | support@webepower.biz
 */

namespace Webepower\GoogleTagManager\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Webepower\GoogleTagManager\Helper\Data as GtmHelper;

class GtmBlock extends Template
{
    /**
     * @var GtmHelper
     */
    protected $_gtmHelper = null;

    /**
     * @param Context $context
     * @param GtmHelper $gtmHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        GtmHelper $gtmHelper,
        array $data = []
    ) {
        $this->_gtmHelper = $gtmHelper;
        parent::__construct($context, $data);
    }


    /**
     * Get Account Id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->_gtmHelper->getAccountId();
    }

    /**
     * Render tag manager JS
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->_gtmHelper->isEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }

}