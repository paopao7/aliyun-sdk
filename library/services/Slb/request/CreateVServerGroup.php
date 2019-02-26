<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setVServerGroupName($VServerGroupName)
 * @method string getVServerGroupName()
 * @method $this setBackendServers($BackendServers)
 * @method string getBackendServers()
 */
final class CreateVServerGroup extends SlbCommon
{
    public $action = 'CreateVServerGroup';
}
