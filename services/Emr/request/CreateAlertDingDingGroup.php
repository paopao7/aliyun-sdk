<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setWebHookUrl($WebHookUrl)
 * @method string getWebHookUrl()
 */
final class CreateAlertDingDingGroup extends EmrCommon
{
    public $action = 'CreateAlertDingDingGroup';
}
