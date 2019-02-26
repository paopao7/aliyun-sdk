<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setLayoutId($LayoutId)
 * @method string getLayoutId()
 * @method $this setVideoLayer($VideoLayer)
 * @method array getVideoLayer()
 * @method $this setAudioLayer($AudioLayer)
 * @method array getAudioLayer()
 * @method $this setBlendList($BlendList)
 * @method array getBlendList()
 * @method $this setMixList($MixList)
 * @method array getMixList()
 */
final class ModifyCasterLayout extends LiveCommon
{
    public $action = 'ModifyCasterLayout';
}
