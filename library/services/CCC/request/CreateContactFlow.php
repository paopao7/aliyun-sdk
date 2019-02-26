<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setCanvas($Canvas)
 * @method string getCanvas()
 * @method $this setContent($Content)
 * @method string getContent()
 */
final class CreateContactFlow extends CCCCommon
{
    public $action = 'CreateContactFlow';
}
