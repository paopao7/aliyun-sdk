<?php
/**
 * @author: axios
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:49
 */

namespace aliyun\sdk\core\sign;


class Signature
{
    const HMAC_SHA1 = 0;

    public static function create($sign_method = self::HMAC_SHA1)
    {
        return new self($sign_method);
    }

    private $sign_method;

    public function __construct($sign_method)
    {
        $this->sign_method = $sign_method;
    }

    public function make($param, $http_method)
    {
        $sign = "";
        switch ($this->sign_method) {
            case self::HMAC_SHA1:
                $sign = self::hmacSha1($param, $http_method);
                break;
        }

        return $sign;
    }

    private static function hmacSha1($param, $method = "POST")
    {
        return HmacSHA1::create($param, $method);
    }
}