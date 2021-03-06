<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAclId($AclId)
 * @method string getAclId()
 * @method $this setAclName($AclName)
 * @method string getAclName()
 */
final class SetAccessControlListAttribute extends SlbCommon
{
    public $action = 'SetAccessControlListAttribute';
}
