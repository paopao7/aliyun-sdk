<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setOperationFlag($OperationFlag)
 * @method string getOperationFlag()
 */
final class FindProjectsNameList extends CSBCommon
{
    public $action = 'FindProjectsNameList';
}
