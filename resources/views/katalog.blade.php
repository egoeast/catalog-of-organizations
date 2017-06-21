@extends('layouts.app')
@section('left_sidebar')
    <h3>Рубрики</h3>
    <ul>
    @foreach($terms as $term)
        <li>
            <a href="{{ url('/category/'.$term->slug) }}">{{$term->name}}</a>
        </li>
    @endforeach
    </ul>
@stop
@section('content')
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
@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>
    <br>
    @foreach($shops as $shop)
        <div class="thumbnail-sidebar">
            <img class="thumbnail-sidebar" src="{{$shop->img}}">
        </div>
        <div >
            <a href="{{ url('/show_landing/'.$shop->id) }}"><h4>{{$shop->name}}</h4></a>
            <br>
        </div>

    @endforeach

@stop