<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setId($Id)
 * @method string getId()
 */
final class MetastoreDescribeDatabase extends EmrCommon
{
    public $action = 'MetastoreDescribeDatabase';
}
