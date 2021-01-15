## 请求信息

请求方式：`GET`

请求地址：`/api/icp`

### 请求参数

|名称|类型|必填|备注|
|---|---|---|---|
|domain|string|是|要查询备案的域名 例如：sxphp.cn|

## 响应信息

响应方式：`JSON`

### result键值说明

|名称|类型|备注|
|---|---|---|
|update|string|备案信息更新日期|
|name|string|主办单位名称|
|nature|string|主办单位性质|
|icp|string|网站备案/许可证号|
|sitename|string|网站名称|
|index|string|网站首页网址|
|time|string|审核时间|

## 响应示例

```json
{
  "status": 1,
  "message": "success",
  "result": {
    "update": "2020-08-14 21:55:02",
    "name": "\u897F\u5B89\u5E02\u65B0\u57CE\u533A\u5929\u7231\u7F51\u7EDC\u5DE5\u4F5C\u5BA4",
    "nature": "\u4F01\u4E1A",
    "icp": "\u9655ICP\u590719017621\u53F7-4",
    "sitename": "\u65B0\u57CE\u533A\u5929\u7231\u7F51\u7EDC",
    "index": "www.sxphp.cn",
    "time": "2020-02-27"
  }
}
```

## 请求示例

### PHP

```php
<?php
function curl_get($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $response = curl_exec($curl);
    return json_decode($response);
}
define('API', '这里填写网站的根域名 例如：http://api.midsmr.com');

$domain = 'sxphp.cn'; //要查询的域名

$res = curl_get(API.'/api/icp?domain='.$domain);
$data = $res['result'];
//变量data是一个数组包含备案信息 键值对应下方result键值说明

```
