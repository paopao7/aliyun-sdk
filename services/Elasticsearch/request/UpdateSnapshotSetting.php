<?php
namespace aliyun\sdk\services\Elasticsearch\request;

use aliyun\sdk\services\Elasticsearch\ElasticsearchCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class UpdateSnapshotSetting extends ElasticsearchCommon
{
    public $action = 'UpdateSnapshotSetting';
}
