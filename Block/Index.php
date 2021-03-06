<?php
namespace Hoan\TestPlugin\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }    

    public function getDetail($name, $age)
    {
        $detail = "Name: " . $name . "<br>Age: " . $age;
        return $detail;
    }
}
