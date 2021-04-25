<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\ObserverExample\Observer\Test;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Index implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        die('test observer');
    }
}
