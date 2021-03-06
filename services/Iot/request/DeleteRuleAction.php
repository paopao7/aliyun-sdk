<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($ActionId)
 * @method integer getActionId()
 */
final class DeleteRuleAction extends IotCommon
{
    public $action = 'DeleteRuleAction';
}
