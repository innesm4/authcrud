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
        <tr>
            <td>Address</td>
            <td>{{ Form::textarea('address',$plugin->address,array('class'=>'span8','rows'=>'2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>DOB</td>
            <td>{{ Form::text('dob',$plugin->dob,array('id'=>'dob','class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{ Form::select('gender',array('M'=>'Male','F'=>'Female'),$plugin->gender,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ Form::select('active',array('1'=>'Active','0'=>'Non-Active'),$plugin->active,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ link_to_route('plugins.edit', 'Edit', array($plugin->id), array('class'=>'btn')) }}
            </td>
        </tr>
    </table>  
@endsection