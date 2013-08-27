@if(Session::has('success'))
	<span class="label label-success span4">
        {{ Session::get('success') }}
    </span>
@endif

@if(Session::has('warning')) 
	<span class="label label-important span4">
        {{ Session::get('warning') }}
    </span>
@endif

@if(Session::has('info')) 
    <span class="label label-info span4">
        {{ Session::get('info') }}
    </span>   
@endif