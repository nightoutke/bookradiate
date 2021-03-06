@extends('layouts.scaffold')

@section('main')

<h1>Edit Profile</h1>
{{ Form::model($profile, array('method' => 'PATCH', 'route' => array('profiles.update', $profile->id))) }}
    <ul>
        <li>
            {{ Form::label('firstname', 'Firstname:') }}
            {{ Form::text('firstname') }}
        </li>

        <li>
            {{ Form::label('lastname', 'Lastname:') }}
            {{ Form::text('lastname') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
        </li>

        <li>
            {{ Form::label('password_confirmation', 'Password_confirmation:') }}
            {{ Form::text('password_confirmation') }}
        </li>

        <li>
            {{ Form::label('terms', 'Terms:') }}
            {{ Form::checkbox('terms') }}
        </li>

        <li>
            {{ Form::label('school', 'School:') }}
            {{ Form::text('school') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('profiles.show', 'Cancel', $profile->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop