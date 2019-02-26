<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 */
final class ReleaseReadWriteSplittingConnection extends RdsCommon
{
    public $action = 'ReleaseReadWriteSplittingConnection';
}
