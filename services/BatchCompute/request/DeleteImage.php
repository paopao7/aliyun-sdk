<?php
namespace aliyun\sdk\services\BatchCompute\request;

use aliyun\sdk\services\BatchCompute\BatchComputeCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceName($ResourceName)
 * @method string getResourceName()
 */
final class DeleteImage extends BatchComputeCommon
{
    public $action = 'DeleteImage';
}
