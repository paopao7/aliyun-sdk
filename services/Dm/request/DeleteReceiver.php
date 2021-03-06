<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setReceiverId($ReceiverId)
 * @method string getReceiverId()
 */
final class DeleteReceiver extends DmCommon
{
    public $action = 'DeleteReceiver';
}
