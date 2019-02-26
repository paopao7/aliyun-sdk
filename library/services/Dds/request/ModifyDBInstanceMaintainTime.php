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
 * @method $this setMaintainStartTime($MaintainStartTime)
 * @method string getMaintainStartTime()
 * @method $this setMaintainEndTime($MaintainEndTime)
 * @method string getMaintainEndTime()
 */
final class ModifyDBInstanceMaintainTime extends DdsCommon
{
    public $action = 'ModifyDBInstanceMaintainTime';
}