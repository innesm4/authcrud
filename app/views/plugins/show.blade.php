@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('plugins/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
    </legend>

	<table class="table table-bordered table-condensed table-striped">
        <tr>
            <td>ID</td>
            <td>{{ Form::text('id',$plugin->id,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ Form::text('name',$plugin->name,array('class'=>'span5 validate[required,custom[onlyLetterSp]]','id'=>'name','readonly'=>'readonly')) }}</td>
        </tr>
     </table>  
@endsection