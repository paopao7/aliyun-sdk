<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpcName($VpcName)
 * @method string getVpcName()
 * @method $this setIsDefault($IsDefault)
 * @method boolean getIsDefault()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVpcs extends VpcCommon
{
    public $action = 'DescribeVpcs';
}
