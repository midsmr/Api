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

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IcpController extends Controller
{
    public function doc(Request $request)
    {
        return view('icp.ChinaZ');
    }

    public function api(Request $request)
    {
        return $this->chinaZ($request);

    }

    public function chinaZ(Request $request)
    {

    }
}
