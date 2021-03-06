<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDnsName($DnsName)
 * @method string getDnsName()
 * @method $this setIp($Ip)
 * @method array getIp()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class SaveSingleTaskForDeletingDnsHost extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForDeletingDnsHost';
}
