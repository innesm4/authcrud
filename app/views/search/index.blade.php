@extends('layouts.default')

@section('content')
    <legend>{{ $title }}&nbsp;
    </legend>
    {{ Form::open(array('route'=>'search.index','method'=>'POST')) }}
    	<tr>
            <td>Enter Your Query:</td>
            <td>{{ Form::text('search','',array('id'=>'search','class'=>'span12')) }}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ Form::submit('Search',array('class'=>'btn')) }}
            </td>
        </tr>

    {{ Form::close() }}
@endsection