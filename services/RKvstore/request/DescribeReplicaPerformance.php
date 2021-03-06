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
 * @method $this setReplicaId($ReplicaId)
 * @method string getReplicaId()
 * @method $this setSourceDBInstanceId($SourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDestinationDBInstanceId($DestinationDBInstanceId)
 * @method string getDestinationDBInstanceId()
 * @method $this setKey($Key)
 * @method string getKey()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class DescribeReplicaPerformance extends RKvstoreCommon
{
    public $action = 'DescribeReplicaPerformance';
}
