<?php
 
namespace Quantity\ButtonModule\Helper;
use Magento\Framework\App\Config\ScopeConfigInterface;
 
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
     
    /**
     * Admin configuration paths
     *
     */
    const IS_ENABLED            = 'button_module/general/enable';
 
    const DISPLAY_QTY         	= 'button_module/general/qty';	
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;
 
    /**
     * Data constructor
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
            
    }
 
    /**
     * @return $isEnabled
     */
    public function isEnabled()
    {
        $isEnabled = $this->scopeConfig->getValue(self::IS_ENABLED, 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
 
        return $isEnabled;
    }
 
    /**
     * @return $displayQty
     */
    public function getDisplayQty()
    {
        $displayQty = $this->scopeConfig->getValue(self::DISPLAY_QTY,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
 
        return $displayQty;
    }
}