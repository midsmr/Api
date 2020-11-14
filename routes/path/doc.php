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

use Illuminate\Support\Facades\Route;

Route::get('icp', 'IcpController@doc')
    ->where('action', '[a-zA-Z]+')
    ->name('doc.icp');
