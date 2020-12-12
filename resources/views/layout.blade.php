<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')-{{config('site.name')}}: {{config('site.description')}}</title>
    <meta name="author" content="SOMEBODY">
    <meta name="description" content="{{config('site.description')}}">
    <meta name="keywords" content="{{config('site.keywords')}}">
    <meta name="homepage" content="https://github.com/midsmr/Api">
    <link rel="stylesheet" href="{{asset('static/layui/css/layui.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/app.css')}}">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="logo">{{config('site.name')}}</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item"><a href="https://github.com/midsmr/Api">GitHub</a></li>
        </ul>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="side" lay-shrink="all">
                <li class="layui-nav-item" id="index"><a href="{{route('index')}}">概述</a></li>
                <li class="layui-nav-item" id="json"><a href="{{route('json')}}">JSON响应</a></li>
                @foreach(config('list') as $k => $v)
                <li class="layui-nav-item" id="{{$k}}"><a href="{{route($k)}}">{{$v['title']}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="layui-body">
        <div style="padding: 15px;">
            @yield('content')
        </div>
    </div>
    <div class="layui-footer">
        所有接口总共调用：{{get_count('all')}}次 &copy; 2020 SOMEBODY
    </div>
</div>
<script src="{{asset('static/layui/layui.js')}}"></script>
<script src="{{asset('static/js/clipboard.min.js')}}"></script>
<script src="{{asset('static/js/app.js')}}"></script>
@yield('pageJs')
</body>
</html>
