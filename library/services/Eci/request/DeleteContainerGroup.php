<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setContainerGroupId($ContainerGroupId)
 * @method string getContainerGroupId()
 */
final class DeleteContainerGroup extends EciCommon
{
    public $action = 'DeleteContainerGroup';
}