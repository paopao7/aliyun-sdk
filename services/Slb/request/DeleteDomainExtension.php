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
 * @method $this setDomainExtensionId($DomainExtensionId)
 * @method string getDomainExtensionId()
 */
final class DeleteDomainExtension extends SlbCommon
{
    public $action = 'DeleteDomainExtension';
}
