<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setPhotoId($PhotoId)
 * @method integer getPhotoId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setLang($Lang)
 * @method string getLang()
 */
final class ListPhotoTags extends CloudPhotoCommon
{
    public $action = 'ListPhotoTags';
}
