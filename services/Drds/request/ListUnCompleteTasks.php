<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ListUnCompleteTasks extends DrdsCommon
{
    public $action = 'ListUnCompleteTasks';
}
