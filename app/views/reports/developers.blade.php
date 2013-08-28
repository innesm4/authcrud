@extends('layouts.default')

@section('content')
	<legend>{{ $title }}
    </legend>

    <table class="table table-consended table-striped table-bordered">
    	<tr>
            <th width="10%" style="text-align: center;">Developer</th>
        </tr>
		@foreach($plugins as $plugin)
		<tr> 
            <td style="text-align: center;">{{ $plugin->developer }}</td>
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
            <ul><li>{{ $plugins->links() }}</li></ul>
        </div>
   
        <div class="span4">&nbsp;</div>
    </div>
    
@endsection