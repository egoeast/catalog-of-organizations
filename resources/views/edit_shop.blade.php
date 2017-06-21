@extends('layouts.app')
@section('content')
    {!! Form::model($shop, ['method'=>'PATCH','url'=>'/shops/'.$shop->id]) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('adress','Adress') !!}
        {!! Form::text('adress', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Phone') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
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