<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setIspNameEn($IspNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($LocationNameEn)
 * @method string getLocationNameEn()
 */
final class DescribeDomainRealTimeHttpCodeData extends CdnCommon
{
    public $action = 'DescribeDomainRealTimeHttpCodeData';
}
