<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setVideoType($VideoType)
 * @method string getVideoType()
 * @method $this setBizdate($Bizdate)
 * @method string getBizdate()
 */
final class DescribeUserVvTopByDay extends VodCommon
{
    public $action = 'DescribeUserVvTopByDay';
}
