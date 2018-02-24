<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:08
 */

namespace aliyun\sdk\vod\request\VideoUpload;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class Refresh
 * @package aliyun\sdk\vod\request\VideoUpload
 * @method $this setVideoId($video_id)
 */
class RefreshUploadVideo extends VodCommon
{
    use Request;

    public function __construct()
    {
        $this->setActionName('RefreshUploadVideo');
        parent::__construct();
    }
}