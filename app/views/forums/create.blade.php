@extends('layouts.bookcheetah')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop


@section('css')

<!-- create your new css file, and replace the link below -->
 
 <link rel="stylesheet" href="{{ asset('assets/styles/css/stylesheet.css')}} ">

 <link rel="stylesheet" href="{{ asset('assets/styles/css/home-index.css')}} ">

@stop


@section('toplinks2')
    <a href="{{ URL::to('books') }}"><li>My Books</li></a> | 
    <a href="{{ URL::to('signup') }}"><li>Sign Up</li></a> | 
    <a href="{{ URL::to('login') }}"><li>Log In</li></a>
@stop

@section('content')

<h3>Create Forum</h3>

{{ Form::open(array('route' => 'forums.store')) }}
    <ul>
        <li style="list-style: none;">
            {{ Form::label('forum_title', 'Forum Title:') }}
            {{ Form::text('forum_title') }}
        </li>

        <li style="list-style: none;">
            {{ Form::label('forum_description', 'Forum Description:') }}
            {{ Form::textarea('forum_description') }}
        </li>

        <li style="list-style: none;">
            {{ Form::label('topics', 'Topics:') }}
            {{ Form::input('number', 'topics') }}
        </li>

        <li style="list-style: none;">
            {{ Form::label('posts', 'Posts:') }}
            {{ Form::input('number', 'posts') }}
        </li>

        <li style="list-style: none;">
            {{ Form::label('last_post', 'Last Post:') }}
            {{ Form::text('last_post') }}
        </li>

        <li style="list-style: none;">
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


