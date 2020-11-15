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
namespace App\Http\Controllers;


use App\Models\Count;
use HtmlParser\ParserDom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IcpController extends Controller
{
    public static $name = 'icp';

    public static $doc = 'doc.icp';

    public static $api = 'api.icp';

    public function doc(Request $request)
    {
        return view(static::$name);
    }

    public function api(Request $request)
    {
        Count::increment(static::$name);
        return $this->chinaZ($request);
    }

    public function chinaZ(Request $request)
    {
        $url = $request->get('domain');

        if ($url == null || $url == '') {
            return json(-1, '域名不能为空');
        }


        $res = Http::withOptions(['verify' => false])->get('http://icp.chinaz.com/' . $url)->body();

        $dom = new ParserDom($res);

        $isDomain = $dom->find('div[class=Tool-IcpMainCent wrapper02 mt10] p[class=tc col-red fz18 YaHei pb20]', 0);

        if ($isDomain != false) {
            if (strpos($isDomain->getPlainText(), '输入参数') !== false) {
                return json(-2, '请输入正确的域名');
            }
        }

        $isIcp = $dom->find('div[class=Tool-IcpMainCent wrapper02 mt10] p[class=tc col-red fz18 YaHei pb20] a[class=up_a up_span]', 0);

        if ($isIcp != false) {
            if ($isIcp->getPlainText() == '更新') {
                return json(0, '该域名未备案');
            }
        }

        $data = [
            'update' => null,
            'name' => null,
            'nature' => null,
            'icp' => null,
            'sitename' => null,
            'index' => null,
            'time' => null
        ];

        $data['update'] = strstr($dom->find('span[class=fz12 col-gray04 plr5 fl]', 0)->getPlainText(), '20');
        //备案信息更新时间

        $data['name'] = $dom->find('li[class=bg-gray clearfix] p a', 0)->getPlainText();
        //主办单位名称

        $data['nature'] = $dom->find('li[class=clearfix] p strong[class=fl fwnone]', 0)->getPlainText();
        //主办单位性质

        $data['icp'] = $dom->find('li[class=bg-gray clearfix] p font', 0)->getPlainText();
        //网站备案/许可证号

        $data['sitename'] = $dom->find('li[class=clearfix] p ', 3)->getPlainText();
        //网站名称

        $data['index'] = $dom->find('li[class=clearfix] p[class=Wzno]', 0)->getPlainText();
        //网站首页网址

        $data['time'] = $dom->find('li[class=clearfix] p[!class]', 6)->getPlainText();
        //审核时间

        return json(1, 'success', $data);

    }
}
