@extends('layouts.app')
@section('content')
    {!! Form::model($category, ['method'=>'PATCH','url'=>'/org-update/'.$category->id]) !!}
    <div class="form-group">
        {!! Form::label('term','Term') !!}
        {!! Form::text('term', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('taxonomy','Taxonomy') !!}
        {!! Form::text('taxonomy', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('parent','Parent') !!}
        {!! Form::text('parent', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
@section('sidebar')
    <b>SIDEBAR!!!</b>

@stop
