## 请求信息

请求方式：`GET`

请求地址：`/api/qrcode`

### 请求参数

|名称|类型|必填|备注|
|---|---|---|---|
|text|string|是|要生成的二维码内容 例如：HelloWorld|

## 响应信息
响应方式：`Image`
<div class="quote quote-primary">请求正确的话直接响应图片 错误的话响应错误信息</div>

## 请求示例

### html

```html
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>QrCode</title>
</head>
<body>
<img src="https://api.midsmr.com/api/qrcode?text=HelloWorld" alt="获取失败">
</body>
</html>
```
