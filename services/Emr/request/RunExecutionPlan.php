<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setArguments($Arguments)
 * @method string getArguments()
 */
final class RunExecutionPlan extends EmrCommon
{
    public $action = 'RunExecutionPlan';
}
