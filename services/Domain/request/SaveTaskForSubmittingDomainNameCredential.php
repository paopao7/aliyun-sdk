<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSaleId($SaleId)
 * @method string getSaleId()
 * @method $this setCredential($Credential)
 * @method string getCredential()
 * @method $this setCredentialNo($CredentialNo)
 * @method string getCredentialNo()
 */
final class SaveTaskForSubmittingDomainNameCredential extends DomainCommon
{
    public $action = 'SaveTaskForSubmittingDomainNameCredential';
}
