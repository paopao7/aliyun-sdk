<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setContactId($ContactId)
 * @method string getContactId()
 */
final class ListRecordingsByContactId extends CCCCommon
{
    public $action = 'ListRecordingsByContactId';
}
