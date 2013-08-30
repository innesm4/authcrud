@extends('layouts.default')

@section('content')
	<legend>{{ $title }}
    </legend>

      <form id="custom-search-form" class="form-search form-horizontal pull-right" action="{{ URL::action('ReportController@results') }}" method="get">
    <div class="input-append span12">
        <input type="text" class="search-query" name="name" placeholder="plugin name">
        <button type="submit" class="btn"><i class="icon-search"></i></button>
    </div>
	</form>
	
@endsection