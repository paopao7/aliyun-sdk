<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateIds($TemplateIds)
 * @method string getTemplateIds()
 */
final class QueryTemplateList extends MtsCommon
{
    public $action = 'QueryTemplateList';
}
