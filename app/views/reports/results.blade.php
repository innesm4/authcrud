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

      <table class="table table-consended table-striped table-bordered">
    	<tr>
            <th width="10%" style="text-align: center;">Plugin</th>
        </tr>
		@foreach($plugins as $plugin)
		<tr> 
            <td style="text-align: center;">
				{{ link_to_route('plugins.show',$plugin->name, array($plugin->name)) }}
        </tr>

	    @endforeach
	</table>

    <div class="row-fluid">
    	<div class="span4 pagination" style="margin-top: -5px;">
	    	<form>
				<input type="button" value="Print this page" onClick="window.print()">
			</form>
		</div>
        <div class="span4 pagination" style="margin-top: -5px;">
        </div>
   
        <div class="span4">&nbsp;</div>
    </div>
    
@endsection