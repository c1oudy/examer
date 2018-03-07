@extends('common/layout')
@section('content')
    <div class="layui-carousel" id="banner">
        <div carousel-item>
            <div><img src="{{url('images/banner.jpg')}}" alt=""></div>
            <div><img src="{{url('images/banner2.jpg')}}" alt=""></div>
        </div>
    </div>
    <span class="index_title">实验安全知识教育</span>
    <div class="index_list">
        <div class="index_list_item">

        </div>
        <div class="index_list_item">

        </div>
    </div>
    <script>
        layui.use('carousel', function(){
            var carousel = layui.carousel;
            //建造实例
            carousel.render({
                elem: '#banner'
                ,width: '100%' //设置容器宽度
                ,height: '400px'
                ,arrow: 'always' //始终显示箭头
                //,anim: 'updown' //切换动画方式
            });
        });
    </script>
@stop
