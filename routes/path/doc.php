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

use Illuminate\Support\Facades\Route;

Route::get(\App\Http\Controllers\IcpController::$name, 'IcpController@doc')
    ->name(\App\Http\Controllers\IcpController::$doc);
