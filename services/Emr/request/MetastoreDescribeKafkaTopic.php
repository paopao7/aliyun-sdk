<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTopicId($TopicId)
 * @method string getTopicId()
 */
final class MetastoreDescribeKafkaTopic extends EmrCommon
{
    public $action = 'MetastoreDescribeKafkaTopic';
}
