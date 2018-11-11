<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:46
 */

namespace aliyun\sdk\core\http;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\auth\Credential;
use aliyun\sdk\core\exception\SignErrorException;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\Signature;
use api\tool\Http;
use api\tool\lib\HttpResponse;

class Request
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "openAPI";

    protected $request_method = "POST";

    protected $header = [];

    protected $path = "/";

    protected $param = [];

    protected $auth = false;

    protected $sign_method_array = [
        "HMAC-SHA1" => Signature::HMAC_SHA1
    ];

    protected $sign_method = Signature::HMAC_SHA1;

    protected $sign_version = "1.0";

    public function __construct()
    {
        $this->region = Aliyun::$region_id;
        if (empty($this->domain)) {
            $this->domain = Product::domain($this->product, $this->region);
        }

        $this->locationServiceCode = $this->product;
        $this->setSignMethod("HMAC-SHA1", "1.0");

        $this->setParam('Format', "JSON");
        $this->setParam('Version', "0000-00-00");
        $this->setParam('AccessKeyId', Aliyun::$access_key_id);
        $this->setParam("Timestamp", gmdate("Y-m-d\TH:i:s\Z"));
    }

    protected function setSignMethod($sign_method, $sign_version = null)
    {
        if (!is_null($sign_version)) {
            $this->sign_version = $sign_version;
            $this->setParam("SignatureVersion", "1.0");
        }

        if (isset($this->sign_method_array[$sign_method])) {
            $this->setParam("SignatureMethod", $sign_method);
            $this->sign_method = $this->sign_method_array[$sign_method];
            return $this->sign_method_array[$sign_method];
        }
        throw new SignErrorException("Sign Method Not Exist : " . $sign_method);
    }

    protected function setActionName($action_name)
    {
        $this->setParam("Action", $action_name);
    }

    protected function setRequestHeader($key, $value)
    {
        $this->header[$key] = $value;
    }

    public function setRequestMethod($method = "GET")
    {
        $this->request_method = $method;
    }

    private function uuid($salt = "")
    {
        return md5($salt . uniqid(md5(microtime(true)), true));
    }

    /**
     * @return HttpResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request()
    {
        $signature_nonce = $this->uuid("SignatureNonce");
        $this->setParam("SignatureNonce", $signature_nonce);
        if ($this->auth) {
            Credential::auth($this->product, $signature_nonce, $this->params('Timestamp'));
        }
        $signature = Signature::create($this->sign_method)->make($this->param, $this->request_method);
        $this->setParam("Signature", $signature);

        if (false === strpos($this->domain, 'http')) {
            $this->domain = 'http://' . $this->domain;
        }

        $response = Http::instance()
            ->setMethod($this->request_method)
            ->setDomain($this->domain)
            ->setHeader($this->header)
            ->setParam($this->param)
            ->curl($this->path);

        return Aliyun::response($response);
    }

    public static function getHttpHeaders($headers)
    {
        $httpHeader = [];
        foreach ($headers as $key => $value) {
            array_push($httpHeader, $key . ":" . $value);
        }
        return $httpHeader;
    }

    public function params($key = null, $default = "")
    {
        if (!is_null($key)) {
            return isset($this->param[$key]) ? $this->param[$key] : $default;
        }
        return $this->param;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setParam($key, $value = '')
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->param[$k] = $v;
            }
        } else {
            $this->param[$key] = $value;
        }
    }
}