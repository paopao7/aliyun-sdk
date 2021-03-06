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
 * @method $this setVServerGroupId($VServerGroupId)
 * @method string getVServerGroupId()
 * @method $this setBackendServers($BackendServers)
 * @method string getBackendServers()
 */
final class AddVServerGroupBackendServers extends SlbCommon
{
    public $action = 'AddVServerGroupBackendServers';
}
