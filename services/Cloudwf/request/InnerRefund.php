<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setdata($data)
 * @method string getdata()
 */
final class InnerRefund extends CloudwfCommon
{
    public $action = 'InnerRefund';
}
