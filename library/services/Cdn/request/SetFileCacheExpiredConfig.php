<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCacheContent($CacheContent)
 * @method string getCacheContent()
 * @method $this setTTL($TTL)
 * @method string getTTL()
 * @method $this setWeight($Weight)
 * @method string getWeight()
 */
final class SetFileCacheExpiredConfig extends CdnCommon
{
    public $action = 'SetFileCacheExpiredConfig';
}
