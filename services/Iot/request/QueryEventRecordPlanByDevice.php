<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setStreamType($StreamType)
 * @method integer getStreamType()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryEventRecordPlanByDevice extends IotCommon
{
    public $action = 'QueryEventRecordPlanByDevice';
}
