<?php

namespace Mageplaza\Example\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getWelcomeText()
    {
        return "Hello from block class!";
    }

    public function getTodayDate()
    {
        return date('Y-m-d');
    }
}
