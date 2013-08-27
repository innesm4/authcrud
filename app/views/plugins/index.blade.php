@extends('layouts.default')

@section('content')
	<legend>{{ $title }}&nbsp;
		<a href="{{ URL::to('plugins/create') }}" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
        
    </legend>

    <div class="row-fluid">
        <div class="span4 pagination" style="margin-top: -5px;">
            <ul><li>{{ $plugins->links() }}</li></ul>
        </div>
   
        <div class="span4">&nbsp;</div>
    </div>

    <table class="table table-consended table-striped table-bordered">
    	<tr>
            <th width="15%" style="text-align: center;">Name</th>
            <th width="10%" style="text-align: center;">Developer</th>
            <th width="10%" style="text-align: center;">Type</th>
            <th width="8%" style="text-align: center;">Latest Version</th>
            <th width="15%" style="text-align: center;">Action</th>
        </tr>
		@foreach($plugins as $plugin)
		<tr> 
            <td style="text-align: center;">{{ link_to_route('plugins.show',$plugin->name, array($plugin->id)) }}</td>
            <td style="text-align: center;">{{ $plugin->address }}</td>
            <td style="text-align: center;">{{ $plugin->gender }}</td>
            <td style="text-align: center;">{{ $plugin->dob }}</td>

            <td style="text-align: center;">
                {{ link_to_route('plugins.show', 'View', array($plugin->id),array('class'=>'btn btn-small')) }} | 
                {{ Form::open(array('url'=>URL::action('PluginsController@destroy',array($plugin->id)),'method'=>'DELETE','style'=>'display: inline;','onclick'=>'return confirm("Are you sure you want to Delete?");')) }}
                    {{ Form::hidden('id', $plugin->id) }}
                    {{ Form::submit('Delete', array('class'=>'btn btn-small')) }}
                {{ Form::close() }}
                
            </td>
	    </tr>
	    @endforeach
	</table>

    
@endsection