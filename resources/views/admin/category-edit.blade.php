@extends('admin.app')
@section('content')
    {!! Form::model($category, ['method'=>'PATCH','url'=>'/category-update/'.$category->id]) !!}
    <div class="form-group">
        {!! Form::label('term',trans('category.term')) !!}
        {!! Form::text('term', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('taxonomy',trans('category.category')) !!}
        {!! Form::text('taxonomy', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('parent',trans('category.parent')) !!}
        {!! Form::text('parent', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description',trans('category.description')) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit(trans('category.edit'), ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
@section('sidebar')
    <b>SIDEBAR!!!</b>

@stop
