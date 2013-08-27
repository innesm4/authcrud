@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('plugins/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
    </legend>

	{{ Form::open(array('route'=>'plugins.store','method'=>'POST','id'=>'form1')) }}
	<table class="table table-bordered table-condensed table-striped">
        <tr>
            <td>ID</td>
            <td>{{ Form::text('id','AUTO',array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ Form::text('name','',array('class'=>'span5 validate[required,custom[onlyLetterSp]]','id'=>'name')) }}</td>
        </tr>
        <tr>
            <td>URL</td>
            <td>{{ Form::text('url','',array('class'=>'span5 validate[required]','id'=>'name')) }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ Form::text('price','',array('class'=>'span5 validate[required]','id'=>'price')) }}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{ Form::textarea('description','',array('class'=>'span8','rows'=>'2')) }}</td>
        </tr>
        <tr>
            <td>Developer</td>
            <td>{{ Form::text('developer','',array('id'=>'developer','class'=>'span5')) }}</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>{{ Form::select('type',array('3'=>'Accesories','2'=>'Extension','1'=>'Plugin','0'=>'Module'),'0',array('class'=>'span5')) }}</td>
        </tr>
        <tr>
            <td>Latest Version</td>
            <td>{{ Form::text('latestversion','',array('id'=>'latestversion','class'=>'span5')) }}</td>
        </tr>
        <tr>
            <td>Documentation URL</td>
            <td>{{ Form::text('documentationurl','',array('id'=>'documentationurl','class'=>'span5')) }}</td>
        </tr>
        <tr>
            <td>Changelog URL</td>
            <td>{{ Form::text('changelogurl','',array('id'=>'changelogurl','class'=>'span5')) }}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ Form::submit('Save',array('class'=>'btn')) }}
            </td>
        </tr>
    </table>  
    {{ Form::close() }}

@endsection