<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setQueryJson($QueryJson)
 * @method string getQueryJson()
 */
final class QueryCustomEventCount extends CmsCommon
{
    public $action = 'QueryCustomEventCount';
}