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
            <p>练习测评</p>
            <div>
                <span class="order_icon">顺序练习</span>
                <span class="random_icon">随机练习</span>
                <span>分类练习</span>
                <span>4</span>
            </div>
        </div>
        <div class="index_list_item">
            <p>考试检测</p>
            <div>
                <span>考前自评</span>
                <span>我的考试</span>
                <span>3</span>
                <span>4</span>
            </div>
        </div>
    </div>
    <div class="">

    </div>
    <script>
        layui.use('carousel', function(){
            var carousel = layui.carousel;
            //建造实例
            carousel.render({
                elem: '#banner'
                ,width: '100%' //设置容器宽度
                ,height: '500px'
                ,arrow: 'always' //始终显示箭头
                //,anim: 'updown' //切换动画方式
            });
        });
    </script>
@stop
