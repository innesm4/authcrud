@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Fifth Ring CRUD App
@stop

{{-- Content --}}
@section('content')

<h1>Fifth Ring</h1>
<div class="well">
	<p>CRUD application with Authorisation package.
	@if (Sentry::check()) 
		You are currently logged in.
	@endif
	</p>
</div>

@if (Sentry::check() && Sentry::getUser()->hasAccess('users'))
	<h4>User Options</h4>
	<div class="well">
		<p>Hello User</p>
	</div>
@endif 


@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
	<h4>Admin Options</h4>
	<div class="well">
		 <button class="btn btn-info" onClick="location.href='{{ URL::to('users') }}'">View Users</button>
		 <button class="btn btn-info" onClick="location.href='{{ URL::to('groups') }}'">View Groups</button>
	</div>
@endif 
 
 
@stop