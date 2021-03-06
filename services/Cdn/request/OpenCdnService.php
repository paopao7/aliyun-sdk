<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 */
final class OpenCdnService extends CdnCommon
{
    public $action = 'OpenCdnService';
}
