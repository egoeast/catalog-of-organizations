@extends('layouts.app')
@section('left_sidebar')
    <b>Реклама</b>
@stop
@section('content')

        <div class="row vizitka" >
            <div class="col-md-6">
                <img src="/.{{$organization->img}}">
            </div>
            <div itemscope itemtype="http://schema.org/Organization" class="col-md-6">
                <a class="btn btn-primary btn-block" itemprop="brand">{{$organization->name}}</a>
                <br>
                <a class="btn btn-danger btn-block" itemprop="adress">{{$organization->adress}}</a>
                <br>
                <a class="btn btn-default btn-block" itemprop="faxNumber">{{$organization->phone}}</a>
                <br>
            </div>
            <div class="col-md-12">
                <p>{{$organization->description}}</p>
            </div>
        </div>
        <div class="row">
            <p>Категории:
            @foreach($terms as $term)
                {{$term->term}},
            @endforeach
            </p>
        </div>
        <br>
        <br>

@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>
    <br>

@stop