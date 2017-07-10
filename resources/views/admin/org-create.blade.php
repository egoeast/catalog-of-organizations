@extends('admin.app')
@section('content')
    {!! Form::open(['url'=>'/org-store']) !!}
    <div class="form-group">
        {!! Form::label('name',trans('organization.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug',trans('organization.slug')) !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('img',trans('organization.img')) !!}
        {!! Form::text('img', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('adress',trans('organization.adress')) !!}
        {!! Form::text('adress', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone',trans('organization.phone')) !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description',trans('category.description')) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit(trans('organization.create'), ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
@section('sidebar')
    <b>SIDEBAR!!!</b>

@stop
