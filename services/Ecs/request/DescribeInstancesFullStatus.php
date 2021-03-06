<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method array getInstanceId()
 * @method $this setEventId($EventId)
 * @method array getEventId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setHealthStatus($HealthStatus)
 * @method string getHealthStatus()
 * @method $this setInstanceEventType($InstanceEventType)
 * @method array getInstanceEventType()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 * @method $this setNotBefore_Start($NotBefore_Start)
 * @method string getNotBefore_Start()
 * @method $this setNotBefore_End($NotBefore_End)
 * @method string getNotBefore_End()
 * @method $this setEventPublishTime_Start($EventPublishTime_Start)
 * @method string getEventPublishTime_Start()
 * @method $this setEventPublishTime_End($EventPublishTime_End)
 * @method string getEventPublishTime_End()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeInstancesFullStatus extends EcsCommon
{
    public $action = 'DescribeInstancesFullStatus';
}
