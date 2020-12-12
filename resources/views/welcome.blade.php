@extends('layout')
@section('title', '概述')
@section('content')
    <div class="layui-row">
        <div class="site-title">
            <fieldset><legend>概述</legend></fieldset>
        </div>
    </div>
    <div class="layui-row">
        <blockquote class="layui-elem-quote">本站程序基于Laravel构建，提供的集成的接口均为技术手段抓包或者第三方开源仓库，由开源作者：<a href="https://github.com/midsmr" target="_blank"><span
                    style="color: red; ">SOMEBODY</span></a>提供永久更新维护。</blockquote>
        <blockquote class="layui-elem-quote">欢迎大家Star本程序GitHub仓库<a href="https://github.com/midsmr/Api" target="_blank"><span
                    style="color: red; ">midsmr/Api</span></a></blockquote>
        <blockquote class="layui-elem-quote">初次使用请查看<a href="{{route('json')}}" target="_self"><span
                    style="color: red; ">JSON响应</span></a>页面</blockquote>
        <blockquote class="layui-elem-quote">特别感谢以下开源项目为本程序运行提供支持（排名不分先后）</blockquote>
        <div class="layui-col-md3">
            <table class="layui-table">
                <tbody>
                <tr>
                    <td><a href="https://github.com/php/php-src" target="_blank">PHP</a></td>
                </tr>
                <tr>
                    <td><a href="https://github.com/laravel/laravel" target="_blank">Laravel</a></td>
                </tr>
                <tr>
                    <td><a href="https://github.com/sentsin/layui/" target="_blank">Layui</a></td>
                </tr>
                <tr>
                    <td><a href="https://github.com/zenorocha/clipboard.js" target="_blank">clipboard.js</a></td>
                </tr>
                <tr>
                    <td><a href="https://github.com/bupt1987/html-parser" target="_blank">bupt1987/html-parser</a></td>
                </tr>
                <tr>
                    <td><a href="https://github.com/endroid/qr-code" target="_blank">endroid/qr-code</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('pageJs')
    <script>
        layui.use(['jquery'], function () {
            var $ = layui.jquery;
            $('#index').addClass('layui-this')
        })
    </script>
@endsection
