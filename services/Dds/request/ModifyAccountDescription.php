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
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setAccountDescription($AccountDescription)
 * @method string getAccountDescription()
 */
final class ModifyAccountDescription extends DdsCommon
{
    public $action = 'ModifyAccountDescription';
}
