<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 */
final class GetSubAccountPermission extends CloudwfCommon
{
    public $action = 'GetSubAccountPermission';
}
