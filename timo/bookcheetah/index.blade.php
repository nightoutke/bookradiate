@extends('layouts.bookcheetah')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop


@section('css')
<!-- replace the link below with links to your css or js files-->

 <link rel="stylesheet" href="{{ asset('assets/styles/css/home-index.css')}} ">

@stop


@section('toplinks2')
	<a href="{{ URL::to('mybooks') }}"><li>My Books</li></a> | 
	<a href="{{ URL::to('signup') }}"><li>Sign Up</li></a> | 
	<a href="{{ URL::to('login') }}"><li>Log In</li></a>
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


