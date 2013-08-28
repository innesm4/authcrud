@extends('layouts.default')

@section('content')
    <legend>{{ $title }}&nbsp;
    </legend>

@if (Sentry::check() && Sentry::getUser()->hasAccess('users'))
    <div class="well">
        <div class="row-fluid">
            <button class="btn btn-info" onClick="location.href='{{ URL::to('reports/all') }}'">All Plugins Report</button>
        </div>
        <br/>
        <div class="row-fluid">
            <button class="btn btn-info" onClick="location.href='{{ URL::to('reports/developers') }}'">Developers Report</button>
        </div>    
    </div>
@endif 

@endsection