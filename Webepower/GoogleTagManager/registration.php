<?php
/**
 * Copyright © WebePower LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.webepower.biz | support@webepower.biz
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Webepower_GoogleTagManager',
    __DIR__
);