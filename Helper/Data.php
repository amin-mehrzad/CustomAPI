<?php 

namespace XCode\Api\Helper; 

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{ 	
 	protected $_scopeConfig;
	protected $_reportCollectionFactory;    

    const XML_PATH_AGE_VERIFICATION_SECRET_KEY	= 'ageverification_tab/ageverification_setting/ageverification_secretKey';
    const XML_PATH_AGE_VERIFICATION_PUBLIC_KEY	= 'ageverification_tab/ageverification_setting/ageverification_publicKey';

 	public function __construct (
			\Magento\Framework\App\Helper\Context $context,
			\Magento\Reports\Model\ResourceModel\Product\Sold\CollectionFactory  $reportCollectionFactory,
			\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig 

		) {
 		$this->_reportCollectionFactory = $reportCollectionFactory;
		parent::__construct($context);
		$this->_scopeConfig = $scopeConfig;
    }
    
    public function ageverification_secretKey() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFICATION_SECRET_KEY);
	}
	public function ageverification_publicKey() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFICATION_PUBLIC_KEY);
	}

	public function setOrderNumber( $orderId){
		Mage::getSingleton('core/session')->setCyaOrderId($orderId);
	} 

	public function getOrderNumber(){
		$cyaOrderId = Mage::getSingleton('core/session')->getCyaOrderId($orderId);
		return $cyaOrderId;
	} 
    
}