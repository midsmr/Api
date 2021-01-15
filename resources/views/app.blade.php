<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>{{$title}}-{{config('app.name')}}:{{config('app.description')}}</title>
    <meta name="description" content="{{config('app.description')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/ico">
    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/app.css')}}" rel="stylesheet">
</head>
<body>
<div class="lyear-layout-web">
    <div class="lyear-layout-container">
        <aside class="lyear-layout-sidebar">
            <div class="sidebar-header">
                <a href="{{route('doc', ['action' => ''])}}" class="logo">{{config('app.name')}}</a>
            </div>
            <div class="lyear-layout-sidebar-scroll">
                <nav class="sidebar-main">
                    <ul class="nav nav-drawer">
                        @foreach(config('list') as $key => $value)<li class="nav-item" id="doc-{{$key}}">
                            <a href="{{route('doc', ['action' => $key])}}">
                                <i class="mdi {{$value['icon']}}"></i>
                                {{$value['title']}}
                            </a>
                        </li>@endforeach
                    </ul>
                </nav>
                <div class="sidebar-footer">
                    <p class="copyright">Copyright &copy; {{date('Y')}}. <a target="_blank" href="https://github.com/midsmr">midsmr</a> All rights reserved.</p>
                </div>
            </div>
        </aside>
        <header class="lyear-layout-header">
            <nav class="navbar navbar-default">
                <div class="topbar">
                    <div class="topbar-left">
                        <div class="lyear-aside-toggler">
                            <span class="lyear-toggler-bar"></span>
                            <span class="lyear-toggler-bar"></span>
                            <span class="lyear-toggler-bar"></span>
                        </div>
                        <span class="navbar-page-title">{{$title}}</span>
                    </div>
                    <ul class="topbar-right">
                        <li class="dropdown dropdown-profile">
                            <a href="https://github.com/midsmr/Api">
                                <span>GitHub</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="lyear-layout-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{$title}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="quote quote-primary">{{$description}}</div>
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
<script type="text/javascript" src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/main.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/js/app.js')}}"></script>
<script>
    $(function () {
        $('#doc-{{$action}}').addClass('active')
    })
</script>
</body>
</html>