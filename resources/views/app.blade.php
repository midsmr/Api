<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{$title}}-{{config('app.name')}}:{{config('app.description')}}</title>
    <meta name="description" content="{{config('app.description')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/app.css')}}">
</head>
<body>
<div class="lyear-layout-web">
    <div class="lyear-layout-container">
        <aside class="lyear-layout-sidebar">
            <div class="sidebar-header">
                <a class="logo" href="{{route('doc', ['action' => ''])}}">{{config('app.name')}}</a>
            </div>
            <div class="lyear-layout-sidebar-info lyear-scroll">
                <nav class="sidebar-main">
                    <ul class="nav-drawer">@foreach(config('list') as $key => $value)<li class="nav-item" id="doc-{{$key}}"><a href="{{route('doc', ['action' => $key])}}"><i class="mdi {{$value['icon']}}"></i><span>{{$value['title']}}</span></a></li>@endforeach</ul>
                </nav>
                <div class="sidebar-footer">
                    <p class="copyright">Copyright &copy; {{date('Y')}}. <a target="_blank" href="https://github.com/midsmr">midsmr</a> All rights reserved.</p>
                </div>
            </div>
        </aside>
        <header class="lyear-layout-header">
            <nav class="navbar">
                <div class="navbar-left">
                    <div class="lyear-aside-toggler">
                        <span class="lyear-toggler-bar"></span>
                        <span class="lyear-toggler-bar"></span>
                        <span class="lyear-toggler-bar"></span>
                    </div>
                </div>
                <ul class="navbar-right d-flex align-items-center">
                    <li class="dropdown dropdown-profile">
                        <a href="https://github.com/midsmr/Api">
                            <span>GitHub</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="lyear-layout-content">
            <div class="container-fluid p-t-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <header class="card-header"><div class="card-title">{{$title}}</div></header>
                            <div class="card-body">
                                <div class="callout callout-success">{{$description}}</div>
{!! $content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script type="text/javascript" src="{{asset('static/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/jquery.cookie.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/main.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/app.js')}}"></script>
<script>
    $(function () {
        $('#doc-{{$action}}').addClass('active')

    })
</script>
</body>
</html>