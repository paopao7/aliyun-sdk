<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($Identifier)
 * @method string getIdentifier()
 * @method $this setArgs($Args)
 * @method string getArgs()
 */
final class InvokeThingService extends IotCommon
{
    public $action = 'InvokeThingService';
}
