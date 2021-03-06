<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRepoNamespace($RepoNamespace)
 * @method string getRepoNamespace()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetRepoListByNamespace extends CrCommon
{
    public $action = 'GetRepoListByNamespace';
}
