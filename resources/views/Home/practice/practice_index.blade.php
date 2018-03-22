@extends('common/layout')
@section('content')
    <div class="subject">
        <p>100、驾驶机动车超车后立即开启右转向灯驶回原车道。</p>
        <form class="layui-form layui-form-pane" action="">
            <div class="layui-input-block">
                <input type="radio" name="sex" value="男" title="男">
                <input type="radio" name="sex" value="女" title="女">
            </div>
        </form>
    </div>
    <script>
        //Demo
        layui.use('form', function(){
            var form = layui.form;

            //监听提交
            form.on('submit(formDemo)', function(data){
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
    </script>
@stop
