@extends('layouts.default')

	@foreach($students as $student)
		<li>
			<a href="  {{ route('students.show', $student->id) }}">
					   {{ $students->id}} : {{ $students->picture}}
			</a>
		</li>
	@endforeach