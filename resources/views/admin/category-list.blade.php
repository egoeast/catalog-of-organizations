@extends('admin.app')
@section('left_sidebar')
    <b>Реклама</b>
@stop
@section('content')

    <a href="{{ url('/category-create/') }}" class="btn btn-primary">@lang('category.create')</a>

    <table class="table table-hover">
        <caption>@lang('category.categories')</caption>
        <tr>
            <th>@lang('category.term')</th>
            <th>@lang('category.category')</th>
            <th>@lang('category.parent')</th>
            <th>@lang('category.action')</th>
        </tr>
        @foreach($categories as $cat)
            <tr>
                <td>
                    {{ $cat->term }}
                </td>
                <td>
                    {{ $cat->taxonomy }}
                </td>
                <td>
                    {{ $cat->parent }}
                </td>
                <td>
                    <a href="{{ url('/category-edit/'.$cat->id) }}" class="btn btn-primary">@lang('category.edit')</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>

@stop