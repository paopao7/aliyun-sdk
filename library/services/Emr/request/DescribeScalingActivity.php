<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($HostGroupId)
 * @method string getHostGroupId()
 * @method $this setScalingActivityId($ScalingActivityId)
 * @method string getScalingActivityId()
 */
final class DescribeScalingActivity extends EmrCommon
{
    public $action = 'DescribeScalingActivity';
}
