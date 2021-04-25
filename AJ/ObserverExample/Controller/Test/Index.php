<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\ObserverExample\Controller\Test;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        $this->_eventManager->dispatch('aj_observerexample_test_index');
        die('test');
    }
}
