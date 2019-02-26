<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setStrategyJson($StrategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($CallingNumber)
 * @method array getCallingNumber()
 * @method $this setJobFilePath($JobFilePath)
 * @method string getJobFilePath()
 * @method $this setSubmitted($Submitted)
 * @method boolean getSubmitted()
 */
final class CreateBatchJobs extends CCCCommon
{
    public $action = 'CreateBatchJobs';
}
