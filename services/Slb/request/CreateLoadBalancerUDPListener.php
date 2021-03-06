<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setListenerPort($ListenerPort)
 * @method integer getListenerPort()
 * @method $this setBackendServerPort($BackendServerPort)
 * @method integer getBackendServerPort()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setScheduler($Scheduler)
 * @method string getScheduler()
 * @method $this setPersistenceTimeout($PersistenceTimeout)
 * @method integer getPersistenceTimeout()
 * @method $this setHealthyThreshold($HealthyThreshold)
 * @method integer getHealthyThreshold()
 * @method $this setUnhealthyThreshold($UnhealthyThreshold)
 * @method integer getUnhealthyThreshold()
 * @method $this setHealthCheckConnectTimeout($HealthCheckConnectTimeout)
 * @method integer getHealthCheckConnectTimeout()
 * @method $this setHealthCheckConnectPort($HealthCheckConnectPort)
 * @method integer getHealthCheckConnectPort()
 * @method $this sethealthCheckInterval($healthCheckInterval)
 * @method integer gethealthCheckInterval()
 * @method $this sethealthCheckReq($healthCheckReq)
 * @method string gethealthCheckReq()
 * @method $this sethealthCheckExp($healthCheckExp)
 * @method string gethealthCheckExp()
 * @method $this setMaxConnection($MaxConnection)
 * @method integer getMaxConnection()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setVServerGroupId($VServerGroupId)
 * @method string getVServerGroupId()
 * @method $this setMasterSlaveServerGroupId($MasterSlaveServerGroupId)
 * @method string getMasterSlaveServerGroupId()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setAclType($AclType)
 * @method string getAclType()
 * @method $this setAclStatus($AclStatus)
 * @method string getAclStatus()
 * @method $this setVpcIds($VpcIds)
 * @method string getVpcIds()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateLoadBalancerUDPListener extends SlbCommon
{
    public $action = 'CreateLoadBalancerUDPListener';
}
