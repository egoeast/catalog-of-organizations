@extends('layouts.app')
@section('left_sidebar')
    <h3>Рубрики</h3>
@stop
@section('content')
    <h1>Рубрика:{{$category->name}}</h1>
    <h2>Описание</h2>
    <p>{{$category->description}}</p>
    <div class="content">
        @foreach($organizations as $org)
            <div class="row vizitka" >
                <div class="col-md-6">
                    <img src="{{$org->img}}">
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/show_landing/'.$org->id) }}"><h2>{{$org->name}}</h2></a>
                    <a class="btn btn-primary btn-block" href="{{ url('/show_landing/'.$org->id) }}">{{$org->name}}</a>
                    <br>
                    <a class="btn btn-danger btn-block">{{$org->adress}}</a>
                    <br>
                    <a class="btn btn-default btn-block">{{$org->phone}}</a>
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