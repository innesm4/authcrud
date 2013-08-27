@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('plugins/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
    </legend>
    
	{{ Form::open(array('url'=>URL::action('PluginsController@update', array($plugin->id)), 'method'=>'PUT')) }}
	<table class="table table-bordered table-condensed table-striped">
        <tr>
            <td>ID</td>
            <td>{{ Form::text('id',$plugin->id,array('class'=>'span2','readonly'=>'readonly')) }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ Form::text('name',$plugin->name,array('class'=>'span5 validate[required,custom[onlyLetterSp]]','id'=>'name')) }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ Form::textarea('address',$plugin->address,array('class'=>'span8','rows'=>'2')) }}</td>
        </tr>
        <tr>
            <td>DOB</td>
            <td>{{ Form::text('dob',$plugin->dob,array('id'=>'dob','class'=>'span2')) }}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{ Form::select('gender',array('M'=>'Male','F'=>'Female'),$plugin->gender,array('class'=>'span2')) }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ Form::select('active',array('1'=>'Active','0'=>'Non-Active'),$plugin->active,array('class'=>'span2')) }}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            	{{ Form::submit('Save',array('class'=>'btn')) }}
                {{ Form::hidden('id', $plugin->id) }}
            </td>
        </tr>
    </table>  
    {{ Form::close() }}

    <script type="text/javascript">
        $(document).ready(function(){
            $("#form1").validationEngine()
            $("#dob").datepicker({
                dateFormat: 'yy/mm/dd',
                changeMonth: true,
                changeYear: true,
                yearRange: '1980:2020'
            })
        }) 
    </script>

@endsection