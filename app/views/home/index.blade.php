@extends('layouts.bookcheetah2')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

<!-- ****************************REMOVE STUFF HERE TO THE PROFILE PAGE******************************************************************** -->
@section('css')
<!-- replace the link below to suit your new css file-->

 <link rel="stylesheet" href="{{ asset('assets/styles/css/home-index.css')}} ">

 <!-- Lee CSS -->
 <link rel="stylesheet" href="{{ asset('assets/styles/css/stylesheet.css')}} ">

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

@section('content')
<!-- replace the content below to suit your page content -->

	<h1>Add Content Here</h1>
	
@stop


