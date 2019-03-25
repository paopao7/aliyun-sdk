<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($EtlJobId)
 * @method string getEtlJobId()
 * @method $this setReleaseId($ReleaseId)
 * @method string getReleaseId()
 */
final class CancelETLJobRelease extends EmrCommon
{
    public $action = 'CancelETLJobRelease';
}
