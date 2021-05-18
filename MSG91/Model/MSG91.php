<?php
namespace Excellence\MSG91\Model;

use Magento\Framework\Model\Context;

class MSG91 extends \Magento\Framework\Model\AbstractModel
{

    const AUTHORIZATION_KEY = 'msg91/msg91_settings/auth_key';
    const ROUTE = 'msg91/msg91_settings/route';
    const SENDER_NAME = 'msg91/msg91_settings/senderid';
    const SMS_ORDER_VERIFICATION = 'smssection/advancesetting/orderverification';
    const COUNTRY_CODE = 'msg91/msg91_settings/country_code';

    protected $_smsFactory;

    public function __construct(Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Excellence\Sms\Model\SmsFactory $smsFactory
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->_smsFactory = $smsFactory;
    }

    public function sendSMS($to, $message)
    {
        $auth_key = $this->scopeConfig->getValue(self::AUTHORIZATION_KEY, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $route = $this->scopeConfig->getValue(self::ROUTE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $sender_name = $this->scopeConfig->getValue(self::SENDER_NAME, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $country_code = $this->scopeConfig->getValue(self::COUNTRY_CODE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $mess = urlencode($message);
        $smsModel = $this->_smsFactory->create();
        $code = $smsModel->getCountryCode();
        if (strpos($to, $code) !== false) {
            $pos = strpos($to, $code);
            $codelen = strlen($code);
            $to = substr($to, $codelen, 10);
        }
        $ch = curl_init('https://control.msg91.com/api/postsms.php');
        curl_setopt_array($ch, array(
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => "<MESSAGE>
                <AUTHKEY>$auth_key</AUTHKEY>
                <SENDER>$sender_name</SENDER>
                <ROUTE>$route</ROUTE>
                <COUNTRY>$country_code</COUNTRY>
                <SMS TEXT='$mess' >
                <ADDRESS TO='$to' ></ADDRESS>
                </SMS>
            </MESSAGE>",
        ));

        $result = curl_exec($ch);
        return $result;
    }

    public function testSMS($user_number)
    {
        $message = __('This is a Test Message. Your API is Working Fine.');
        try {
            $sms = $this->sendSMS($user_number, $message);
            return 1;
        } catch (\Exception $e) {
            return 0;
        }
    }
    public function isModuleActive()
    {
        $smsModule = $this->scopeConfig->getValue(self::SMS_ORDER_VERIFICATION, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $auth_key = $this->scopeConfig->getValue(self::AUTHORIZATION_KEY, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $route = $this->scopeConfig->getValue(self::ROUTE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        if ($smsModule && trim($auth_key) != '' && trim($route) != '') {
            return true;
        } else {
            return false;
        }
    }

}
