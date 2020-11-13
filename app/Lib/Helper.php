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

namespace App\Lib;

class Helper
{
    /**
     * Json响应助手函数
     * @author midsmr <midsmr@qq.com>
     * @param int|array $status 状态码
     * @param null|string $message 信息
     * @param null|string|array $result 其他参数
     * @return string
     */
    public static function json($status, $message = null, $result = null)
    {
        if (is_array($status)) {
            return json_encode($status);
        }

        return json_encode([
            'status' => $status,
            'message' => $message,
            'result' => $result
        ]);
    }
}
