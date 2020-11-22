<?php
// +---------------------------------------------------------
// | PHP is the best language in the world
// +---------------------------------------------------------
// | Copyright (c) 2020 Somebody All rights reserved.
// +---------------------------------------------------------
// | License: http://license.coscl.org.cn/MulanPSL2
// +---------------------------------------------------------
// | Author: Somebody <midsmr@qq.com>
// +---------------------------------------------------------
use App\Lib\Helper;

/**
 * Json响应助手函数
 * @param int|array $status 状态码
 * @param null|string $message 信息
 * @param null|string|array $result 其他参数
 * @return string
 * @author midsmr <midsmr@qq.com>
 */
function json($status, $message = null, $result = null)
{
    return Helper::json($status, $message, $result);
}

/**
 * 获取统计数据助手函数
 * @param $name
 * @return int
 * @author midsmr <midsmr@qq.com>
 */
function get_count($name)
{
    return \App\Models\Count::get($name);
}
