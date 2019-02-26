<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRouteTableName($RouteTableName)
 * @method string getRouteTableName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateRouteTable extends VpcCommon
{
    public $action = 'CreateRouteTable';
}
