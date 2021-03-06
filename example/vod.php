<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:58
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\Vod\request\GetCategories;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-shanghai');

$request  = new GetCategories();
$response = $request->setCateId(-1)->request();

dump($response->getContent());
