<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setDestCidrIp($DestCidrIp)
 * @method string getDestCidrIp()
 * @method $this setIpv6DestCidrIp($Ipv6DestCidrIp)
 * @method string getIpv6DestCidrIp()
 * @method $this setPortRange($PortRange)
 * @method string getPortRange()
 * @method $this setIpProtocol($IpProtocol)
 * @method string getIpProtocol()
 * @method $this setSourceGroupId($SourceGroupId)
 * @method string getSourceGroupId()
 * @method $this setSourceGroupOwnerId($SourceGroupOwnerId)
 * @method integer getSourceGroupOwnerId()
 * @method $this setSourceGroupOwnerAccount($SourceGroupOwnerAccount)
 * @method string getSourceGroupOwnerAccount()
 * @method $this setSourceCidrIp($SourceCidrIp)
 * @method string getSourceCidrIp()
 * @method $this setIpv6SourceCidrIp($Ipv6SourceCidrIp)
 * @method string getIpv6SourceCidrIp()
 * @method $this setSourcePortRange($SourcePortRange)
 * @method string getSourcePortRange()
 * @method $this setPolicy($Policy)
 * @method string getPolicy()
 * @method $this setPriority($Priority)
 * @method string getPriority()
 * @method $this setNicType($NicType)
 * @method string getNicType()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class RevokeSecurityGroup extends EcsCommon
{
    public $action = 'RevokeSecurityGroup';
}