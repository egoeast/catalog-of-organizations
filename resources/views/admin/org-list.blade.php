@extends('admin.app')
@section('left_sidebar')
    <b>Реклама</b>
@stop
@section('content')
    <a href="{{ url('/org-create/') }}" class="btn btn-primary">@lang('category.create')</a>
    <table class="table table-hover">
        <caption>@lang('organization.organizations')</caption>
        <tr>
            <th>@lang('organization.name')</th>
            <th>@lang('organization.adress')</th>
            <th>@lang('organization.phone')</th>
            <th>@lang('organization.action')</th>
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