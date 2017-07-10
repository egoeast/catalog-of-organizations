@extends('admin.app')
@section('left_sidebar')

@stop
@section('content')
    <a href="{{ url('/org-create/') }}" class="btn btn-primary">@lang('category.create')</a>
    <div class="container-fluid">
        @foreach($images as $image)
            <img src="{{$image->url}}">
        @endforeach
    </div>
@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>

@stop