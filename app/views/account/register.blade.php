@extends('layouts.bookcheetah2')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

@section('toplinks2')
	@if (Auth::check())
		<li>Logged in as {{ Auth::user()->fullName() }}</li> |
		<li>College {{ Auth::user()->collegeName() }}</li> |
		<li>My Books</li> | 
	    <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">My Account</a></li> | 
	    <li><a href="{{ URL::to('account/logout') }}">Log Out</a></li>
	@else
		<li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
	    <li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
	@endif
@stop

	<!-- @section('toplinks2')
		@if (Auth::check())
		    <li class="navbar-text">Logged in as {{ Auth::user()->firstname() }}</li>
		    <li class="divider-vertical"></li>
		    <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">Account</a></li>
		    <li><a href="{{ URL::to('account/logout') }}">Logout</a></li>
	    @else
		    <li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
		    <li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
		@endif
	@stop -->

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Signup</h1>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="csrf_token" id="csrf_token" value="{{ Session::getToken() }}" />

	<!-- First Name -->
	<div class="control-group {{ $errors->has('first_name') ? 'error' : '' }}">
		<label class="control-label" for="first_name">First Name</label>
		<div class="controls">
			<input type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}" />
			{{ $errors->first('first_name', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ first name -->

	<!-- Last Name -->
	<div class="control-group {{ $errors->has('last_name') ? 'error' : '' }}">
		<label class="control-label" for="last_name">Last Name</label>
		<div class="controls">
			<input type="text" name="last_name" id="last_name" value="{{ Request::old('last_name') }}" />
			{{ $errors->first('last_name', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ last name -->

	<!-- Email -->
	<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="{{ Request::old('email') }}" />
			{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ email -->

	<!-- Password -->
	<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="" />
			{{ $errors->first('password', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ password -->

	<!-- Password Confirm -->
	<div class="control-group {{ $errors->has('password_confirmation') ? 'error' : '' }}">
		<label class="control-label" for="password_confirmation">Password Confirm</label>
		<div class="controls">
			<input type="password" name="password_confirmation" id="password_confirmation" value="" />
			{{ $errors->first('password_confirmation', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ password confirm -->

	<!-- Signup button -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Signup</button>
		</div>
	</div>
	<!-- ./ signup button -->
</form>
@stop
