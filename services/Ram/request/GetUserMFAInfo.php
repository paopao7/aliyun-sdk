<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 */
final class GetUserMFAInfo extends RamCommon
{
    public $action = 'GetUserMFAInfo';
}
