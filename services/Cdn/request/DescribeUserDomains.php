<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setDomainStatus($DomainStatus)
 * @method string getDomainStatus()
 * @method $this setDomainSearchType($DomainSearchType)
 * @method string getDomainSearchType()
 * @method $this setSources($Sources)
 * @method string getSources()
 * @method $this setCdnType($CdnType)
 * @method string getCdnType()
 * @method $this setCheckDomainShow($CheckDomainShow)
 * @method boolean getCheckDomainShow()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setFuncId($FuncId)
 * @method string getFuncId()
 * @method $this setFuncFilter($FuncFilter)
 * @method string getFuncFilter()
 */
final class DescribeUserDomains extends CdnCommon
{
    public $action = 'DescribeUserDomains';
}
