<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setForce($Force)
 * @method boolean getForce()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 */
final class UnassociateEipAddress extends VpcCommon
{
    public $action = 'UnassociateEipAddress';
}
