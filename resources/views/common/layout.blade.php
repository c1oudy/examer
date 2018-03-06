<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ URL::asset('/layui/css/layui.css') }}">
    <script type="text/javascript"  src="{{ URL::asset('/layui/layui.js') }}"></script>
    <script type="text/javascript"  src="{{ URL::asset('/js/jquery.js') }}"></script>
</head>
<body>
    <ul class="layui-nav" lay-filter="">
        <li class="layui-nav-item"><a href="javascript:;">最新活动</a></li>
        <li class="layui-nav-item layui-this"><a href="javascript:;">产品</a></li>
        <li class="layui-nav-item"><a href="javascript:;">大数据</a></li>
        <li class="layui-nav-item">
            <a href="javascript:;">解决方案</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="javascript:;">移动模块</a></dd>
                <dd><a href="javascript:;">后台模版</a></dd>
                <dd><a href="javascript:;">电商平台</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="">社区</a></li>
    </ul>

    @foreach($menu as $menu)
        <p>{{$menu->menuName}}</p>
    @endforeach
    @yield('content')



    <p>尾部</p>
</body>
<script>
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</html>