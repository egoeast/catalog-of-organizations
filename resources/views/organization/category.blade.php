@extends('layouts.app')
@section('left_sidebar')
    <h3>Рубрики</h3>
@stop
@section('content')
    <h1>Рубрика:{{$term->name}}</h1>
    <h2>Описание</h2>
    <p>{{$category->description}}</p>
    <div class="content">
        @foreach($shops as $shop)
            <div class="row vizitka" >
                <div class="col-md-6">
                    <img src="{{$shop->img}}">
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/show_landing/'.$shop->id) }}"><h2>{{$shop->name}}</h2></a>
                    <a class="btn btn-primary btn-block" href="{{ url('/show_landing/'.$shop->id) }}">{{$shop->name}}</a>
                    <br>
                    <a class="btn btn-danger btn-block">{{$shop->adress}}</a>
                    <br>
                    <a class="btn btn-default btn-block">{{$shop->phone}}</a>
                    <br>
                </div>
            </div>
            <br>
            <br>
        @endforeach
    </div>
@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>
@stop