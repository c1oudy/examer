<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ URL::asset('/layui/css/layui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/common/index.css') }}">
    <script type="text/javascript"  src="{{ URL::asset('/layui/layui.js') }}"></script>
    <script type="text/javascript"  src="{{ URL::asset('/js/jquery.js') }}"></script>
</head>
<body>
<div class="header">
    <div class="header_top">
        <a href="{{ action('Home\IndexController@index') }}"><div class="logo"></div></a>
        <div class="search">
            <input type="text" name="search"  placeholder="请输入搜索内容" class="layui-input">
            <button class="layui-btn layui-btn-sm layui-btn-primary search_btn">
                <i class="layui-icon">&#xe615;</i>
            </button>
        </div>
    </div>
    <ul class="layui-nav" lay-filter="">
        <?php var_dump($menu) ?>
        @foreach ($menu as $menu)
                <li class="layui-nav-item
                    @if ($curentPage === $menu->name)
                        layui-this
                    @endif">
                    <a href="{{ url("$menu->url") }}">
                        {{$menu->menuName}}
                    </a>
                    <!-- 二级菜单 -->
                    {{--<dl class="layui-nav-child"> --}}
                        {{--<dd><a href="javascript:;">zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz</a></dd>--}}
                    {{--</dl>--}}
                </li>
        @endforeach
    </ul>
</div>
<div class="content">
    @yield('content')
</div>
<div class="footer">
    <p>尾部</p>
</div>


</body>
<script>
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</html>