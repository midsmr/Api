layui.use(['element', 'code', 'layer'], function(){
    var element = layui.element,
        layer = layui.layer;
    layui.code({
        about: true
    })
});
var clipboard = new ClipboardJS('.copy');
clipboard.on('success', function(e) {
    layer.msg('复制成功!');
});
clipboard.on('error', function(e) {
    layer.msg('复制失败!');
});
