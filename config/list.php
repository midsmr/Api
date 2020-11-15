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

return [
    \App\Http\Controllers\IcpController::$name => [
        'title' => '备案查询',
        'description' => '查询域名的ICP备案信息',
        'api' => \App\Http\Controllers\IcpController::$api,
        'doc' => \App\Http\Controllers\IcpController::$doc,
    ]
];
