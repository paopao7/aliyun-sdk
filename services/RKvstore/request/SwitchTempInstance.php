<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTempInstanceId($TempInstanceId)
 * @method string getTempInstanceId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class SwitchTempInstance extends RKvstoreCommon
{
    public $action = 'SwitchTempInstance';
}
