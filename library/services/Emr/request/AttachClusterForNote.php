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
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 */
final class AttachClusterForNote extends EmrCommon
{
    public $action = 'AttachClusterForNote';
}
