<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterIdList($ClusterIdList)
 * @method array getClusterIdList()
 */
final class ListClusterTag extends EmrCommon
{
    public $action = 'ListClusterTag';
}
