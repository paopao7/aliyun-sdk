<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setJobInstanceId($JobInstanceId)
 * @method string getJobInstanceId()
 */
final class ListJobInstanceWorkers extends EmrCommon
{
    public $action = 'ListJobInstanceWorkers';
}
