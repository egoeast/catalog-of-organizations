@extends('layouts.app')
@section('left_sidebar')
    <b>Реклама</b>
@stop
@section('content')
    <table class="table table-hover">
        <caption>Category table</caption>
        <tr>
            <th>Term</th>
            <th>Taxonomy</th>
            <th>Parent</th>
            <th>Action</th>
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
                    <a href="{{ url('/category-edit/'.$cat->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>

@stop