<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAlarmAction($AlarmAction)
 * @method array getAlarmAction()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setMetricType($MetricType)
 * @method string getMetricType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setStatistics($Statistics)
 * @method string getStatistics()
 * @method $this setThreshold($Threshold)
 * @method float getThreshold()
 * @method $this setComparisonOperator($ComparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setEvaluationCount($EvaluationCount)
 * @method integer getEvaluationCount()
 * @method $this setDimension($Dimension)
 * @method array getDimension()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 */
final class CreateAlarm extends EssCommon
{
    public $action = 'CreateAlarm';
}
