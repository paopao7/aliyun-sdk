<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($RecordId)
 * @method string getRecordId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class SetDomainRecordStatus extends AlidnsCommon
{
    public $action = 'SetDomainRecordStatus';
}
