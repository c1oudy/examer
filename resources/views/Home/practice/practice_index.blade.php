@extends('common/layout')
@section('content')
    @foreach($menu as $menu)
        <p>{{$menu->menuName}}</p>
    @endforeach
@stop
