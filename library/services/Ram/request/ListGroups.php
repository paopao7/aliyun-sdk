<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setMarker($Marker)
 * @method string getMarker()
 * @method $this setMaxItems($MaxItems)
 * @method integer getMaxItems()
 */
final class ListGroups extends RamCommon
{
    public $action = 'ListGroups';
}
