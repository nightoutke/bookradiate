@extends('layouts.bookcheetah')

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
    <li>My Books</li> | 
    <li>Sign Up</li> | 
    <li>Log In</li>
@stop

@section('content')

<h1>Create Course</h1>

{{ Form::open(array('route' => 'courses.store')) }}
    <ul>
        <li>
            {{ Form::label('course_number', 'Course_number:') }}
            {{ Form::text('course_number') }}
        </li>

        <li>
            {{ Form::label('course_name', 'Course_name:') }}
            {{ Form::text('course_name') }}
        </li>

        <li>
            {{ Form::label('fall_semester', 'Fall_semester:') }}
            {{ Form::input('number', 'fall_semester') }}
        </li>

        <li>
            {{ Form::label('spring_semester', 'Spring_semester:') }}
            {{ Form::input('number', 'spring_semester') }}
        </li>

        <li>
            {{ Form::label('professor', 'Professor:') }}
            {{ Form::text('professor') }}
        </li>

        <li>
            {{ Form::label('book', 'Book:') }}
            {{ Form::text('book') }}
        </li>

        <li>
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


