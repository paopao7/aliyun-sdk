<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeClass($NodeClass)
 * @method string getNodeClass()
 * @method $this setNodeStorage($NodeStorage)
 * @method integer getNodeStorage()
 * @method $this setNodeType($NodeType)
 * @method string getNodeType()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 */
final class CreateNode extends DdsCommon
{
    public $action = 'CreateNode';
}
