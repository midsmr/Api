<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('site.name')}}: {{config('site.description')}}</title>
    <meta name="description" content="{{config('site.description')}}">
    <meta name="keywords" content="{{config('site.keywords')}}">
    <meta name="homepage" content="https://github.com/midsmr/Api">
    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/style.css')}}" rel="stylesheet">
</head>
<body>
<header class="site-header">
    <nav class="nav_jsxs">
        <span style="float: left;"><a class="logo_jsxs" href=""></a></span>
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=599928887&amp;site=qq&amp;menu=yes">反馈</a>
        <a target="_blank" href="https://blog.oioweb.cn">博客</a>
        <a target="_blank" href="https://gitee.com/yurunsoft/IMI">底层框架</a>
        <a target="_blank" href="https://www.toolnb.com">爱资料在线工具</a>
    </nav>
    <div class="box-text">
        <h1>教书先生API</h1>
        <p>稳定、快速、免费的 API 接口服务<br><span class="package-amount">共收录了 <strong>43</strong> 个接口</span> · <span
                class="package-amount">今日调用 <strong>324073</strong> 次</span>
        </p>
    </div>
</header>
<section class="content content-boxed">
    <p class="p-jsxs">拒绝流量劫持，全面使用 HTTPS！</p>
    <div class="row row_jsxs">
        <div class="col-md-4">
            <a target="_blank"
               class="block block-link-hover2 ribbon ribbon-modern ribbon-success"
               href="api/doc/qq.php">
                <div class="ribbon-box font-w600">调用：65800956</div>
                <div class="block-content">
                    <div class="h4 push-5">QQ信息获取</div>
                    <p class="text-muted">解析QQ昵称,邮箱,头像</p>
                </div>
            </a>
        </div>
        <div class="col-sm-12">
            <div class="block block-link-hover2 ribbon ribbon-modern ribbon-success">
                <div class="block-content">
                    <a class="block" href="https://api.oioweb.cn">
                        <p class="text-center" style="margin-bottom: 10px">
                            <a href="http://beian.miit.gov.cn" target="_blank">{{config('site.icp')}}</a> • {{config('site.name')}}</p>
                        <p class="text-center" style="margin-bottom: 10px">实时调用：174726004 次 · 稳定运行：1115 天 </p>
                        <p class="text-center">反馈或建议请发送邮件至：599928887@qq.com</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
