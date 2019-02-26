<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setOpsCommandName($OpsCommandName)
 * @method string getOpsCommandName()
 */
final class GetOpsCommandDetail extends EmrCommon
{
    public $action = 'GetOpsCommandDetail';
}
