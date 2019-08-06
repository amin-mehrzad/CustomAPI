<?php

namespace XCode\Api\Model;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use \XCode\Api\Helper\Data;
use \Magento\Framework\App\Filesystem\DirectoryList;
use \Magento\Framework\Stdlib\CookieManagerInterface;
use \Magento\Framework\Controller\ResultFactory;

/**
 * Marketplace Product Model.
 *
 * @method \XCode\Marketplace\Model\ResourceModel\Product _getResource()
 * @method \XCode\Marketplace\Model\ResourceModel\Product getResource()
 */
class Api implements \XCode\Api\Api\Data\ApiInterface
{
    protected $_resultFactory;
    protected $_cookieManager;
    protected $helper;
    protected $directory_list;
    protected $custmperSession;
    public function __construct(
        CookieManagerInterface $cookieManager,
        DirectoryList $directory_list,
        Data $helper,
        \Magento\Framework\UrlInterface $url,
        \Magento\Framework\App\ResponseFactory $responseFactory,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Framework\Controller\ResultFactory $resultFactory

    ) {
        $this->_resultFactory = $responseFactory;
        $this->checkoutSession = $checkoutSession;
        $this->_cookieManager = $cookieManager;
        $this->helper = $helper;
        $this->directory_list = $directory_list;
        $this->_url = $url;
        $this->_responseFactory = $responseFactory;

        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
    }

    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
    {
        return 10;
    }

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \XCode\Marketplace\Api\Data\ProductInterface
     */
    public function setId($id)
    {
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return 'this is test title';
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \XCode\Marketplace\Api\Data\ProductInterface
     */
    public function setTitle($title)
    {
    }

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return 'this is test api description';
    }

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \XCode\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc)
    {
    }
    /**
     * Get ApiInformation.
     *
     * @param mixed $session_data
     *
     * @return mixed
     */
   
     public function loginAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/entrance';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function inquiryAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/inquiry';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function createAccountAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/signup';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function confirmCodeAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
            $url = 'http://192.168.222.241/cya/public/api/confirm';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function skipAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/skip';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function validateAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/validatex';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }
    
    public function finalizeAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/finalize';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function orderInfoAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/orderinfo';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }


    public function changeStateAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/changestate';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }

    public function easyCheckAction($session_data)
    {
        $key = $this->helper->ageverification_publicKey();
        $secretKey = $this->helper->ageverification_secretKey();
        $session_data["website_key"]= $key;
             $url = 'http://192.168.222.241/cya/public/api/easycheck';
            
            $authorization = "Authorization: Bearer ".$secretKey;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($session_data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }
}
