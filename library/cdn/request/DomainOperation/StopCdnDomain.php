<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:49
 */

namespace aliyun\sdk\cdn\request\DomainOperation;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class StopCdnDomain
 * @package aliyun\sdk\cdn\request\DomainOperation
 * @method $this setDomainName($DomainName)
 */
class StopCdnDomain extends CdnCommon
{
    use Request;
}