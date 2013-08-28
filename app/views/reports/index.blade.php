@extends('layouts.default')

@section('content')
    <legend>{{ $title }}&nbsp;
    </legend>
    {{ Form::open(array('route'=>'reports.index','method'=>'POST')) }}
  
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ Form::submit('Query1',array('class'=>'btn')) }}
            </td>
        </tr>

    {{ Form::close() }}
@endsection