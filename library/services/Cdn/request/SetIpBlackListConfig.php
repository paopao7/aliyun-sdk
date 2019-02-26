<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setBlockIps($BlockIps)
 * @method string getBlockIps()
 */
final class SetIpBlackListConfig extends CdnCommon
{
    public $action = 'SetIpBlackListConfig';
}
