<?php
// +---------------------------------------------------------
// | PHP is the best language in the world
// +---------------------------------------------------------
// | Copyright (c) 2020 Somebody All rights reserved.
// +---------------------------------------------------------
// | LICENSE: http://license.coscl.org.cn/MulanPSL2
// +---------------------------------------------------------
// | Author: Somebody <midsmr@qq.com>
// +---------------------------------------------------------
use App\Lib\Helper;


/**
 * Json响应助手函数
 * @author midsmr <midsmr@qq.com>
 * @param int|array $status 状态码
 * @param null|string $message 信息
 * @param null|string|array $result 其他参数
 * @return string
 */
function json($status, $message = null, $result = null)
{
    return Helper::json($status, $message, $result);
}
