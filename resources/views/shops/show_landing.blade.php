@extends('layouts.app')
@section('left_sidebar')
    <b>Реклама</b>
@stop
@section('content')

        <div class="row vizitka" >
            <div class="col-md-6">
                <img src="/{{$shop->img}}">
            </div>
            <div itemscope itemtype="http://schema.org/Organization" class="col-md-6">
                <a class="btn btn-primary btn-block" itemprop="brand">{{$shop->name}}</a>
                <br>
                <a class="btn btn-danger btn-block" itemprop="adress">{{$shop->adress}}</a>
                <br>
                <a class="btn btn-default btn-block" itemprop="faxNumber">{{$shop->phone}}</a>
                <br>
            </div>
            <div class="col-md-12">
                <p>{{$shop->description}}</p>
            </div>
        </div>
        <br>
        <br>

@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>
    <br>

@stop