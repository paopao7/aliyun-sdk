<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setTaskType($TaskType)
 * @method string getTaskType()
 * @method $this setIsHistory($IsHistory)
 * @method integer getIsHistory()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeActiveOperationTask extends RKvstoreCommon
{
    public $action = 'DescribeActiveOperationTask';
}
