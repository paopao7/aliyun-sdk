<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setRuleId($RuleId)
 * @method string getRuleId()
 */
final class DisableFlowControl extends EdasCommon
{
    public $action = 'DisableFlowControl';
}
