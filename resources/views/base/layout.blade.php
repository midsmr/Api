<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')&nbsp;-&nbsp;{{config('site.web_name')}}</title>
    <meta name="description" content="{{config('site.web_des')}}">
    <meta name="keywords" content="{{config('site.web_key')}},@yield('title')">
    <meta name="homepage" content="https://github.com/midsmr">
    <meta name="repository" content="https://github.com/midsmr/Api">
    <link rel="stylesheet" href="{{asset('static/layui/css/layui.css')}}">
    <script src="{{asset('static/layui/layui.js')}}"></script>
    <style>
        .url {
            word-break: break-all;
            cursor: pointer;
            margin-left: 5px;
            color: #777;
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #5FB878;
        }

        .simpleTable {
            line-height: 20px;
            padding-bottom: 16px;
        }

        .linep {
            font-size: 14px;
            font-weight: 700;
            color: #555;
            padding-left: 14px;
            height: 16px;
            line-height: 16px;
            margin-bottom: 18px;
            position: relative;
            margin-top: 15px;
        }

        .linep:before {
            content: '';
            width: 4px;
            height: 16px;
            background: #00aeff;
            border-radius: 2px;
            position: absolute;
            left: 0;
            top: 0;
        }

        ::-webkit-scrollbar {
            width: 9px;
            height: 9px
        }

        ::-webkit-scrollbar-track-piece {
            background-color: #ebebeb;
            -webkit-border-radius: 4px
        }

        ::-webkit-scrollbar-thumb:vertical {
            height: 32px;
            background-color: #ccc;
            -webkit-border-radius: 4px
        }

        ::-webkit-scrollbar-thumb:horizontal {
            width: 32px;
            background-color: #ccc;
            -webkit-border-radius: 4px
        }
    </style>
</head>
<body>
<div class="layui-container">
    <div class="layui-row">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend>@yield('title')</legend>
        </fieldset>
        <blockquote class="layui-elem-quote">@yield('des')</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
        <ul class="layui-tab-title" style="text-align: center!important;">
            <li class="layui-this">API文档</li>
            <li>响应码参照</li>
            <li>示例代码</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                @yield('doc')
            </div>
            <div class="layui-tab-item">
                @yield('response')
            </div>
            <div class="layui-tab-item">
                @yield('example')
            </div>
        </div>
    </div>
</div>
<script src="{{asset('static/js/clipboard.min.js')}}"></script>
<script>
    layui.use(['code', 'element', 'layer'], function () {
        layui.code();
        const element = layui.element;
        const layer = layui.layer;
    });
    const clipboard = new ClipboardJS('.url');
    clipboard.on('success', function (e) {
        layer.msg('复制成功!');
    });
    clipboard.on('error', function (e) {
        layer.msg('复制成功!');
    });</script>
</body>
</html>
