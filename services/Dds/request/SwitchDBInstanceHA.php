<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 * @method $this setSwitchType($SwitchType)
 * @method integer getSwitchType()
 * @method $this setTargetInstanceId($TargetInstanceId)
 * @method integer getTargetInstanceId()
 * @method $this setSourceInstanceId($SourceInstanceId)
 * @method integer getSourceInstanceId()
 */
final class SwitchDBInstanceHA extends DdsCommon
{
    public $action = 'SwitchDBInstanceHA';
}
