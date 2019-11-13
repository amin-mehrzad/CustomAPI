<?php

namespace ValidAge\Api\Model\Api;
use \Magento\Framework\Controller\ResultFactory;
class ApiManagement implements \ValidAge\Api\Api\ApiManagementInterface
{
    const SEVERE_ERROR = 0;
    const SUCCESS = 1;
    const LOCAL_ERROR = 2;

    protected $_ApiFactory;

    public function __construct(
        \ValidAge\Api\Model\ApiFactory $ApiFactory,
        \Magento\Framework\Controller\ResultFactory $resultFactory
        

    ) {
        $this->_resultFactory = $resultFactory;
        $this->_ApiFactory = $ApiFactory;
    }

    /**
     * get test Api data.
     *
     * @api
     *
     * @param mixed $session_data
     *
     * @return \ValidAge\Api\Api\Data\ApiInterface
     */
    public function login($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->loginAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function inquiry($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->inquiryAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function create_account($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->createAccountAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function confirm_code($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->confirmCodeAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function skip($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->skipAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function validate($session_data)
    {
        $model = $this->_ApiFactory
        ->create();
        
        if (!$model->getId()) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('no data found')
            );
        }   
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
    
        $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
        $origin_address = $_SERVER['REMOTE_ADDR'];
        if (strpos($store_address,$origin_address)>0){
            return $model->validateAction($session_data);
        }
        return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }
  
    public function finalize($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->finalizeAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function order_info($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->orderInfoAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }


    public function change_state($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->changeStateAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }

    public function easy_check($session_data)
    {

            $model = $this->_ApiFactory
                ->create();
                
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }   
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           
            $store_address = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
            $origin_address = $_SERVER['REMOTE_ADDR'];
            if (strpos($store_address,$origin_address)>0){
                return $model->easyCheckAction($session_data);
            }
            return "{'code':'401','Message':'Unauthorized Access. Your ip address will be reported to site administrator'}";
    }


    public function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }
		
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
    }
}