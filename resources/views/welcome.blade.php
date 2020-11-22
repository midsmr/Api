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
<!--本页面来源于:https://api.oioweb.cn-->
<header class="site-header">
    <nav class="nav_jsxs">
        <a target="_blank" href="https://github.com/midsmr/Api/issues">反馈</a>
    </nav>
    <div class="box-text">
        <h1>{{config('site.name')}}</h1>
        <p>稳定、快速、免费的 API 接口服务<br>
            <span class="package-amount">共收录了&nbsp;<strong>{{count(config('list'))}}</strong>&nbsp;个接口</span>
        </p>
    </div>
</header>
<section class="content content-boxed">
    <div class="row row_jsxs">
        @foreach(config('list') as $key => $value)
            <div class="col-md-4">
                <a target="_blank"
                   class="block block-link-hover2 ribbon ribbon-modern ribbon-success"
                   href="{{route($key)}}">
                    <div class="ribbon-box font-w600">调用：{{get_count($key)}}</div>
                    <div class="block-content">
                        <div class="h4 push-5">{{$value['title']}}</div>
                        <p class="text-muted">{{$value['description']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
        <div class="col-sm-12">
            <div class="block block-link-hover2 ribbon ribbon-modern ribbon-success">
                <div class="block-content">
                    <a class="block" href="https://github.com/midsmr/Api">
                        <p class="text-center" style="margin-bottom: 10px">
                            <a href="http://beian.miit.gov.cn" target="_blank">{{config('site.icp')}}</a> • {{config('site.name')}}</p>
                        <p class="text-center" style="margin-bottom: 10px">实时调用:&nbsp;{{get_count('all')}}&nbsp;次</p>
                        <p class="text-center"></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
