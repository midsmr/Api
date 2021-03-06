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
namespace App\Models;

use Illuminate\Support\Facades\Cache;

class Count
{
    /**
     * 获取统计的请求数量
     * @param string $name 唯一名称
     * @return int 请求数量
     * @author midsmr <midsmr@qq.com>
     */
    public static function get(string $name)
    {
        if (Cache::has($name)) {
            return Cache::get($name);
        }
        Cache::put($name, 0);
        return 0;
    }

    /**
     * 统计请求数量
     * @param string $name 唯一名称
     * @author midsmr <midsmr@qq.com>
     */
    public static function increment(string $name)
    {
        if (Cache::has('all')) {
            Cache::increment('all');
        } else {
            Cache::put('all', 1);
        }

        if (Cache::has($name)) {
            Cache::increment($name);
        } else {
            Cache::put($name, 1);
        }
    }
}
