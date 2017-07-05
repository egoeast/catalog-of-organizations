@extends('layouts.app')
@section('left_sidebar')
    <b>Реклама</b>
@stop
@section('content')
    <table class="table table-hover">
        <caption>Shop table</caption>
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    @foreach($organizations as $org)
        <tr>
            <td>
                {{ $org->name }}
            </td>
            <td>
                {{ $org->adress }}
            </td>
            <td>
                {{ $org->phone }}
            </td>
            <td>
                <a href="{{ url('/edit/'.$org->id) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
    @endforeach
    </table>
@stop
@section('right_sidebar')
    <b>SIDEBAR!!!</b>

@stop