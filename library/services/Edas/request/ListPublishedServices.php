<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 */
final class ListPublishedServices extends EdasCommon
{
    public $action = 'ListPublishedServices';
}
