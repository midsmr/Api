@extends('layout')
@section('title', 'JSON响应')
@section('content')
    <div class="layui-row">
        <div class="site-title">
            <fieldset>
                <legend>JSON响应</legend>
            </fieldset>
        </div>
    </div>
    <div class="layui-row">
        <blockquote class="layui-elem-quote">JSON响应示例</blockquote>
        <pre class="layui-code">{
    "status":1,
    "message":"success",
    "result":null
}</pre>
        <blockquote class="layui-elem-quote">响应参数说明</blockquote>
        <table class="layui-table">
            <colgroup>
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>status</td>
                <td>Int</td>
                <td>响应码，1代表成功</td>
            </tr>
            <tr>
                <td>message</td>
                <td>String</td>
                <td>响应信息</td>
            </tr>
            <tr>
                <td>result</td>
                <td>Object</td>
                <td>响应数据</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('pageJs')
    <script>
        layui.use(['jquery'], function () {
            var $ = layui.jquery;
            $('#json').addClass('layui-this')
        })
    </script>
@endsection
