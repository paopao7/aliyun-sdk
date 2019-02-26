<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setUploadFile($UploadFile)
 * @method string getUploadFile()
 */
final class UserDataCreate extends CloudwfCommon
{
    public $action = 'UserDataCreate';
}
