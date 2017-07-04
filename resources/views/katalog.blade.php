@extends('layouts.app')
@section('left_sidebar')
    <h3>Рубрики</h3>
    <ul>
    @foreach($terms as $term)
        @if(!$term->parent)
            <li>
                <a href="{{ url('/category/'.$term->slug) }}">{{$term->term}}</a>
                @foreach($terms as $term2)
                    @if($term2->parent==$term->id)
                        <br>
                        <a class="category-second" href="{{ url('/category/'.$term2->slug) }}">{{$term2->term}}</a>
                    @endif
                @endforeach
            </li>
        @endif
    @endforeach
    </ul>
@stop
@section('content')
    @foreach($organizations as $org)
        <div class="row vizitka" >
            <div class="col-md-6">
                <img src="{{$org->img}}">
            </div>
            <div class="col-md-6">
                <a href="{{ url('/card/'.$org->slug) }}"><h2>{{$org->name}}</h2></a>
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

@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>
    <br>
    @foreach($organizations as $org)
        <div class="thumbnail-sidebar">
            <img class="thumbnail-sidebar" src="{{$org->img}}">
        </div>
        <div >
            <a href="{{ url('/show_landing/'.$org->id) }}"><h4>{{$org->name}}</h4></a>
            <br>
        </div>

    @endforeach

@stop