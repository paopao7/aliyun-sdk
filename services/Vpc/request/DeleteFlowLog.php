<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setFlowLogId($FlowLogId)
 * @method string getFlowLogId()
 */
final class DeleteFlowLog extends VpcCommon
{
    public $action = 'DeleteFlowLog';
}
