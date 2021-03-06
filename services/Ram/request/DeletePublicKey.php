<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setUserPublicKeyId($UserPublicKeyId)
 * @method string getUserPublicKeyId()
 */
final class DeletePublicKey extends RamCommon
{
    public $action = 'DeletePublicKey';
}
