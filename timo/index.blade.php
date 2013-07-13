@extends('layouts.bookcheetah')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop


@section('css')
<!-- replace the link below to suit your new css file-->

 <link rel="stylesheet" href="{{ asset('assets/styles/css/home-index.css')}} ">

@stop


@section('toplinks2')
	<li>My Books</li> | 
	<li>Sign Up</li> | 
	<li>Log In</li>
@stop

@section('content')
<!-- replace the content below to suit your page content -->

	<h1>l4radiate</h1><br/>
	<h1>l4radiate</h1><br/>
	<h1>l4radiate</h1><br/>
	<h1>l4radiate</h1><br/>
	<h1>l4radiate</h1><br/>
	<h1>l4radiate</h1><br/>
	<a href="">xyz</a>
	
@stop


