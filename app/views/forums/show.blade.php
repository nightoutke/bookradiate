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

<h3>Show Forum</h3>

<p>{{ link_to_route('forums.index', 'Return to all forums') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Forum Title</th>
				<th>Forum Description</th>
				<th>Topics</th>
				<th>Posts</th>
				<th>Last Post</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $forum->forum_title }}}</td>
					<td>{{{ $forum->forum_description }}}</td>
					<td>{{{ $forum->topics }}}</td>
					<td>{{{ $forum->posts }}}</td>
					<td>{{{ $forum->last_post }}}</td>
                    <td>{{ link_to_route('forums.edit', 'Edit', array($forum->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('forums.destroy', $forum->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop