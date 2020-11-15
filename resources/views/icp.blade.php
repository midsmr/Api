@extends('base.layout')
@section('title', get_title($name))
@section('des', get_description($name))
@section('doc')
    <p class="simpleTable">
        <span class="layui-badge layui-bg-black">接口地址：</span>
        <span class="url" data-clipboard-text="{{get_api($name)}}">{{get_api($name)}}</span>
    </p>
    <p class="simpleTable">
        <span class="layui-badge layui-bg-green">返回格式：</span>
        <span class="url" data-clipboard-text="JSON">JSON</span>
    </p>
    <p class="simpleTable">
        <span class="layui-badge">请求方式：</span>
        <span class="url" data-clipboard-text="GET/POST">GET</span>
    </p>
    <p class="simpleTable">
        <span class="layui-badge layui-bg-blue">请求示例：</span>
        <span class="url" data-clipboard-text="{{get_doc($name)}}?domain=chinaz.com">{{get_doc($name)}}?domain=chinaz.com</span>
    </p>
    <p class="linep">请求参数说明：</p>
    <table class="layui-table" lay-size="sm">
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
            <td>是</td>
            <td>string</td>
            <td>要查询备案的域名</td>
        </tr>
        </tbody>
    </table>
    <p class="linep">返回参数说明：</p>
    <table class="layui-table" lay-size="sm">
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
            <td>int</td>
            <td>响应码</td>
        </tr>
        <tr>
            <td>message</td>
            <td>string</td>
            <td>响应信息</td>
        </tr>
        <tr>
            <td>result</td>
            <td>object|null</td>
            <td>备案信息</td>
        </tr>
        <tr>
            <td>result.update</td>
            <td>string</td>
            <td>备案更新时间</td>
        </tr>
        <tr>
            <td>result.name</td>
            <td>string</td>
            <td>主办单位名称</td>
        </tr>
        <tr>
            <td>result.nature</td>
            <td>string</td>
            <td>主办单位性质</td>
        </tr>
        <tr>
            <td>result.icp</td>
            <td>string</td>
            <td>网站备案/许可证号</td>
        </tr>
        <tr>
            <td>result.sitename</td>
            <td>string</td>
            <td>网站名称</td>
        </tr>
        <tr>
            <td>result.index</td>
            <td>string</td>
            <td>网站首页网址</td>
        </tr>
        <tr>
            <td>result.time</td>
            <td>string</td>
            <td>审核时间</td>
        </tr>
        </tbody>
    </table>
    <p class="linep">返回示例：</p>
    <pre class="layui-code">{
    "status":1,
    "message":"success",
    "result": {
        "update":"2020-11-06 06:31:49",
        "name":"\u53a6\u95e8\u4eab\u8054\u79d1\u6280\u6709\u9650\u516c\u53f8",
        "nature":"\u4f01\u4e1a",
        "icp":"\u95fdICP\u590708105208\u53f7-1",
        "sitename":"\u7ad9\u957f\u4e4b\u5bb6",
        "index":"chinaz.com",
        "time":"2020-06-18"
    }
}</pre>
@endsection

@section('response')
    <p class="linep">响应状态说明：</p>
    <table class="layui-table" lay-size="sm">
        <thead>
        <tr>
            <th>值</th>
            <th>说明</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>查询成功</td>
        </tr>
        <tr>
            <td>0</td>
            <td>该域名没有备案</td>
        </tr>
        <tr>
            <td>-1</td>
            <td>域名不能为空</td>
        </tr>
        <tr>
            <td>-2</td>
            <td>请输入正确的域名</td>
        </tr>
        </tbody>
    </table>
@endsection

@section('example')
    <p class="linep">代码示例：</p>
    <pre class="layui-code">暂无示例</pre>
@endsection
