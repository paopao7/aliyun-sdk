<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($NotifyUrl)
 * @method string getNotifyUrl()
 */
final class SetLiveStreamsNotifyUrlConfig extends CdnCommon
{
    public $action = 'SetLiveStreamsNotifyUrlConfig';
}
