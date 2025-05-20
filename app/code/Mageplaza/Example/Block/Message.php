<?php

namespace Mageplaza\Example\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    public function getMessage()
    {
        return "This is a nested child block!";
    }
}
