<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 */
final class GetContainerConfiguration extends EdasCommon
{
    public $action = 'GetContainerConfiguration';
}
