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

@section('content')
	<h3>
	<span style="">How BookCheetah Works</span></h3>
<h4>
	Using BookCheetah: REGISTER. SEARCH. POST. MEET.</h4>
<ol><li>
		<b>REGISTER:&nbsp;</b><a href="http://www.bookcheetah.com/register">Sign up</a>&nbsp;for a free account. Just need a name, email, and school.</li>
	<li>
		<strong>SEARCH:</strong>&nbsp;Find the books you need for upcoming classes and add them to your wishlist.</li>
	<li>
		<strong>POST:</strong>&nbsp;Add your old books for sale on your bookshelf. You set the price.</li>
	<li>
		<strong>MEET:</strong>&nbsp;Set up a time and place to exchange cash for books.</li>
</ol><h4>
	Why Bookcheetah?</h4>
<ul><li>
		<strong>Student-to-student</strong>&nbsp;= no ridiculous bookstore prices and you set your selling price. Money stays with fellow students-- not some faceless bookstore owner.&nbsp;</li>
	<li>
		<strong>No shipping</strong>&nbsp;= quicker, cheaper, and greener.&nbsp;</li>
	<li>
		<strong>Free</strong>&nbsp;= Free accounts, free to use. Simple enough.</li>
	<li>
		<strong>Do good</strong>&nbsp;=&nbsp;If we help to save you money, donate to keep us free! &nbsp;Then decide how ten percent of all BookCheetah proceeds is spent: the <a href="http://www.cheetah.org/">Cheetah Conservation Fund</a>, <a href="http://www.teachforamerica.org/">Teach For America</a> or the student government of your school.</li>
@stop