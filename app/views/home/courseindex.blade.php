@extends('layouts.coursescaffold')

@section('course_main')

<!-- <h1>All Courses</h1> -->



@if ($courses->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Course_number</th>
				<th>Course_name</th>
				<th>Fall_semester</th>
				<th>Spring_semester</th>
				<th>Professor</th>
				<th>Book</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{{ $course->course_number }}}</td>
					<td>{{{ $course->course_name }}}</td>
					<td>{{{ $course->fall_semester }}}</td>
					<td>{{{ $course->spring_semester }}}</td>
					<td>{{{ $course->professor }}}</td>
					<td>{{{ $course->book }}}</td>
                    <td>{{ link_to_route('courses.edit', 'Edit', array($course->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy', $course->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no courses
@endif

<p>{{ link_to_route('courses.create', 'Add Course') }}</p>

@stop