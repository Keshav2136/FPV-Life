<?php
/**
 * --------------------------------------------------------------------------
 * Banggood API
 *
 * --------------------------------------------------------------------------
 */

//============ example ===============

$banggoodAPI = new BanggoodAPI();

// getCategoryList
$params = array('page' => 1);
$banggoodAPI->setParams($params);
$result = $banggoodAPI->getCategoryList();
var_dump($result);

// getProductInfo
$params = array('product_id' => 966064);
$banggoodAPI->setParams($params);
$result = $banggoodAPI->getProductInfo();
var_dump($result);

//importOrder
$params = array();
$params['sale_record_id']           = 122111;  //your db record id
$params['delivery_country']         = 'United States';
$params['delivery_name']            = 'jason';
$params['delivery_street_address']  = '1064 Hasper Drive';
$params['delivery_street_address2'] = '';
$params['delivery_state']           = 'Michigan';
$params['delivery_city']            = 'Ann Arbor';
$params['delivery_postcode']        = '48103';
$params['delivery_telephone']       = '2383858322';
$params['currency']                 = 'USD';
$params['remark']                   = 'some remark';
$params['product_total']            = 2; 
$params['product_list'] = array(
    array(
        'product_id' => 1084531,
        'quantity' => 5,
        'warehouse' => 'CN',
        'poa_id' => '12288',
        'shipmethod_code' => 'airmail_airmail',
    ),
    array(
        'product_id' => 1084531,
        'quantity' => 3,
        'warehouse' => 'CN',
        'poa_id' => '32',
        'shipmethod_code' => 'airmail_airmail',
    ),
); 
$banggoodAPI->setParams($params);
$result = $banggoodAPI->importOrder();
var_dump($result); 


class BanggoodAPI {
	
    private $__appId = '';
    private $__appSecret = '';
    private $__domain = 'https://api.banggood.com/';

    private $__accessToken = '';
    private $__tokenCacheFile = '';
    
    private $__task = '' ;
    private $__method = 'GET';
    private $__params = array();
    private $__lang = 'en';
    private $__currency = 'USD';

    private $__waitingTaskInfo = array();
    private $__ch = null;
    private $__curlExpireTime = 10;

	/**
	 * @desc Construct
	 * @access public
	 */
	public function __construct(){
        $this->__ch = curl_init(); 
        $this->__tokenCacheFile = __DIR__.'/banggoodAPI.token.php';
	}

    /**
     * @desc category/getCategoryList
     * @access public
     */
    public function getCategoryList() {
        $this->__task = 'category/getCategoryList'; 
        $this->__method = 'GET';
        $result = $this->__doRequest();

        return $result;
    } 

    /**
     * @desc product/getProductInfo
     * @access public
     */
    public function getProductInfo() {
        $this->__task = 'product/getProductInfo'; 
        $this->__method = 'GET';
        $result = $this->__doRequest();

        return $result;
    }

    /**
     * @desc product/getProductList
     * @access public
     */
    public function getProductList() {
        $this->__task = 'product/getProductList'; 
        $this->__method = 'GET';
        $result = $this->__doRequest();

        return $result; 
    }

    /**
     * @desc product/getProductStock
     * @access public
     */
    public function getProductStock() {
        $this->__task = 'product/getProductStock'; 
        $this->__method = 'GET';
        $result = $this->__doRequest();

        return $result; 
    }

    /**
     * @desc product/getShipments
     * @access public
     */
    public function getShipments() {
        $this->__task = 'product/getShipments'; 
        $this->__method = 'GET';
        $result = $this->__doRequest(); 

        return $result; 
    }

    /**
     * @desc order/importOrder
     * @access public
     */
    public function importOrder() {
        $this->__task = 'order/importOrder'; 
        $this->__method = 'POST';
        $result = $this->__doRequest(); 

        return $result; 
    }
	
    /**
     * @desc order/getOrderInfo
     * @access public
     */
    public function getOrderInfo() {
        $this->__task = 'order/getOrderInfo'; 
        $this->__method = 'GET';
        $result = $this->__doRequest(); 

        return $result; 
    }

    /**
     * @desc order/getOrderHistory
     * @access public
     */
    public function getOrderHistory() {
        $this->__task = 'order/getOrderHistory'; 
        $this->__method = 'GET';
        $result = $this->__doRequest(); 

        return $result; 
    }

    /**
     * @desc order/getTrackInfo
     * @access public
     */
    public function getTrackInfo() {
        $this->__task = 'order/getTrackInfo'; 
        $this->__method = 'GET';
        $result = $this->__doRequest(); 

        return $result; 
    }

    /**
     * @desc set params
     * @access public
     */
    public function setParams(Array $params) {
        if (!empty($params)) {
            $this->__params = $params;
        } 
    }

    /**
     * @desc get access_token
     * @access private
     */
    private function __getAccessToken($useCache = true) {

        //get accessToken from cache
        if (file_exists($this->__tokenCacheFile) && $useCache == true) {

            $accessTokenArr = @include($this->__tokenCacheFile);
            if ($accessTokenArr['expireTime'] > $_SERVER['REQUEST_TIME']) {
                $this->__accessToken = $accessTokenArr['accessToken'];
            }
        }

        //if access_token is empty, send request to get accessToken
        if (empty($this->__accessToken)) {

            if (!empty($this->__task)) {

                $this->__waitingTaskInfo = array(
                    'task' => $this->__task,
                    'method' => $this->__method,
                    'params' => $this->__params, 
                );
            }

            $this->__task = 'getAccessToken';
            $this->__params = array('app_id' => $this->__appId, 'app_secret' => $this->__appSecret);
            $this->__method = 'GET';

            $result = $this->__doRequest();
            if ($result['code'] == 0) {

                $expireTime = $_SERVER['REQUEST_TIME'] + $result['expires_in'];
                $accessTokenArr = array(
                    'accessToken' => $result['access_token'],
                    'expireTime' => $expireTime,
                    'expireDateTime' => date('Y-m-d H:i:s', $expireTime),
                );

                $cacheStr = "<?php \r\n";
                $cacheStr.= 'return '.var_export($accessTokenArr, true).';';

                $fp = fopen($this->__tokenCacheFile, 'wb+');
                fwrite($fp, $cacheStr);
                fclose($fp);
                
                $this->__accessToken = $result['access_token'];

                //resend request 
                if (!empty($this->__waitingTaskInfo)) {

                    $this->__task = $this->__waitingTaskInfo['task'];
                    $this->__params = $this->__waitingTaskInfo['params'];
                    $this->__method = $this->__waitingTaskInfo['method']; 

                    $this->__waitingTaskInfo = array();
                    return $this->__doRequest();
                } 

            } else { 

                $this->__requestError($result); 
            }
        } 
    }

    /**
     * @desc handle request error
     * @access private
     */
    private function __requestError($error) { 
        
        var_dump($error); 
        exit;
    }
	
	/**
	 * @desc send api request
	 * @access private
	 */
    private function __doRequest() {

        if (empty($this->__params)) {
            $this->__requestError(array('params is empty'));
        } 

        if ($this->__task != 'getAccessToken') { 

            if (empty($this->__accessToken)) {
                $this->__getAccessToken(); 
            }
            $this->__params['access_token'] = $this->__accessToken;
            
            if (empty($this->__params['lang']))
                $this->__params['lang'] = $this->__lang;

            if (empty($this->__params['currency']))
                $this->__params['currency'] = $this->__currency;
        } 

        $apiUrl = $this->__domain . $this->__task;

        if ($this->__method == 'GET') {

            $quote = '?';
            foreach ($this->__params as $k => $v) {
                $apiUrl .= $quote . $k .'='. $v;
                $quote = '&';
            }
        } 

        curl_setopt($this->__ch, CURLOPT_URL, $apiUrl );
		curl_setopt($this->__ch, CURLOPT_HEADER, 0);
		curl_setopt($this->__ch, CURLOPT_USERAGENT, $_SERVER ['HTTP_USER_AGENT']);
		curl_setopt($this->__ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($this->__ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->__ch, CURLOPT_SSL_VERIFYPEER, false);

        if ($this->__method == 'POST') {
            curl_setopt($this->__ch, CURLOPT_POST, 1 ); 
			curl_setopt($this->__ch, CURLOPT_POSTFIELDS, http_build_query($this->__params));
        } 

        if ($this->__curlExpireTime > 0) {
            curl_setopt($this->__ch, CURLOPT_TIMEOUT, $this->__curlExpireTime); 
        }

		$result = curl_exec($this->__ch);
        $result = json_decode($result, true);

        // access_token expired ,get new access_token
        if ($result['code'] == 21020) {
            $this->__accessToken = null;
            $result = $this->__getAccessToken(false); 
        }

        return $result;
    }
}
