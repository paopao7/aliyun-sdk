<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCommand($Command)
 * @method string getCommand()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setMode($Mode)
 * @method integer getMode()
 * @method $this setInterval($Interval)
 * @method integer getInterval()
 */
final class RealTimeSnapshotCommand extends LiveCommon
{
    public $action = 'RealTimeSnapshotCommand';
}
