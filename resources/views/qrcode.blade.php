@extends('layout')
@section('title', config('list.qrcode.title'))
@section('content')
    <div class="layui-row">
        <div class="site-title">
            <fieldset>
                <legend>{{config('list.qrcode.title')}}</legend>
            </fieldset>
        </div>
        <blockquote class="layui-elem-quote">{{config('list.qrcode.description')}}</blockquote>
        <blockquote class="layui-elem-quote">该接口已调用：{{get_count('qrcode')}}次</blockquote>
    </div>
    <div class="layui-row">
        <div class="requestInfo"><span class="layui-badge layui-bg-green">请求地址：</span><span class="copy"
                                                                                            data-clipboard-text="{{route('api.qrcode')}}">{{route('api.qrcode')}}</span>
        </div>
        <div class="requestInfo"><span class="layui-badge layui-bg-green">请求方式：</span><span class="copy"
                                                                                            data-clipboard-text="GET">GET</span>
        </div>
        <div class="requestInfo"><span class="layui-badge layui-bg-green">响应类型：</span><span class="copy"
                                                                                            data-clipboard-text="image/png">image/png</span>
        </div>
        <blockquote class="layui-elem-quote">请求参数</blockquote>
        <table class="layui-table">
            <colgroup>
                <col width="150">
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>text</td>
                <td>必填</td>
                <td>String</td>
                <td>二维码内容</td>
            </tr>
            </tbody>
        </table>
    </div>
    <blockquote class="layui-elem-quote">请求成功Content-Type为image/png，页面响应二维码。</blockquote>
    <blockquote class="layui-elem-quote">请求失败Content-Type为text/html，页面响应错误信息。</blockquote>
@endsection
@section('pageJs')
    <script>
        layui.use(['jquery'], function () {
            var $ = layui.jquery;
            $('#qrcode').addClass('layui-this')
        })
    </script>
@endsection
