<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 * @method $this setIspNameEn($IspNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($LocationNameEn)
 * @method string getLocationNameEn()
 */
final class DescribeLiveDomainBpsData extends LiveCommon
{
    public $action = 'DescribeLiveDomainBpsData';
}
