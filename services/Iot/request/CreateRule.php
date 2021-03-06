<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSelect($Select)
 * @method string getSelect()
 * @method $this setShortTopic($ShortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($Where)
 * @method string getWhere()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setRuleDesc($RuleDesc)
 * @method string getRuleDesc()
 * @method $this setDataType($DataType)
 * @method string getDataType()
 * @method $this setTopicType($TopicType)
 * @method integer getTopicType()
 */
final class CreateRule extends IotCommon
{
    public $action = 'CreateRule';
}
