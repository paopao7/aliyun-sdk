<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCACertificateId($CACertificateId)
 * @method string getCACertificateId()
 * @method $this setCACertificateName($CACertificateName)
 * @method string getCACertificateName()
 */
final class SetCACertificateName extends SlbCommon
{
    public $action = 'SetCACertificateName';
}
