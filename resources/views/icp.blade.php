@extends('layout')
@section('title', config('list.icp.title'))
@section('content')
    <div class="layui-row">
        <div class="site-title">
            <fieldset><legend>{{config('list.icp.title')}}</legend></fieldset>
        </div>
        <blockquote class="layui-elem-quote">{{config('list.icp.description')}}</blockquote>
        <blockquote class="layui-elem-quote">该接口已调用：{{get_count('icp')}}次</blockquote>
    </div>
    <div class="layui-row">
        <div class="layui-tab layui-tab-brief" lay-filter="tab">
            <ul class="layui-tab-title">
                <li class="layui-this">请求文档</li>
                <li>响应码</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="requestInfo"><span class="layui-badge layui-bg-green">请求地址：</span><span class="copy" data-clipboard-text="{{route('api.icp')}}">{{route('api.icp')}}</span></div>
                    <div class="requestInfo"><span class="layui-badge layui-bg-green">请求方式：</span><span class="copy" data-clipboard-text="GET">GET</span></div>
                    <div class="requestInfo"><span class="layui-badge layui-bg-green">响应类型：</span><span class="copy" data-clipboard-text="JSON">JSON</span></div>
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
                            <td>domain</td>
                            <td>必填</td>
                            <td>String</td>
                            <td>需要查询备案的域名</td>
                        </tr>
                        </tbody>
                    </table>
                    <blockquote class="layui-elem-quote">JSON响应result值</blockquote>
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
                            <td>update</td>
                            <td>String</td>
                            <td>备案信息更新时间</td>
                        </tr>
                        <tr>
                            <td>name</td>
                            <td>String</td>
                            <td>主办单位名称</td>
                        </tr>
                        <tr>
                            <td>nature</td>
                            <td>String</td>
                            <td>主办单位性质</td>
                        </tr>
                        <tr>
                            <td>icp</td>
                            <td>String</td>
                            <td>网站备案/许可证号</td>
                        </tr>
                        <tr>
                            <td>sitename</td>
                            <td>String</td>
                            <td>网站名称</td>
                        </tr>
                        <tr>
                            <td>index</td>
                            <td>String</td>
                            <td>网站首页网址</td>
                        </tr>
                        <tr>
                            <td>time</td>
                            <td>String</td>
                            <td>审核时间</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="layui-tab-item">
                    <blockquote class="layui-elem-quote">JSON响应的status值对应的message值</blockquote>
                    <table class="layui-table">
                        <colgroup>
                            <col width="150">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>值</th>
                            <th>说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>success</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>该域名未备案</td>
                        </tr>
                        <tr>
                            <td>-1</td>
                            <td>域名不能为空</td>
                        </tr>
                        <tr>
                            <td>-2</td>
                            <td>请输入正确的域名</td>
                        </tr>
                        <tr>
                            <td>-3</td>
                            <td>该message值不确定，总之就是解析chinaz页面失败</td>
                        </tr>
                        <tr>
                            <td>-4</td>
                            <td>查询失败，该值也是解析chinaz页面内容失败</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pageJs')
<script>
    layui.use(['jquery'], function () {
        var $ = layui.jquery;
        $('#icp').addClass('layui-this')
    })
</script>
@endsection
