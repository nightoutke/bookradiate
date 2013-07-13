@extends('layouts.scaffold')

@section('main')

<h1>All Forums</h1>



@if ($forums->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Forum_title</th>
				<th>Forum_description</th>
				<th>Topics</th>
				<th>Posts</th>
				<th>Last_post</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($forums as $forum)
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
            @endforeach
        </tbody>
    </table>
@else
    There are no forums
@endif

<p>{{ link_to_route('forums.create', 'Add new forum') }}</p>

@stop