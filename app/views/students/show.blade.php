@extends('layouts.default')

@section('content') 
<h1>
	Welcome to the {{ $students->name}} Page

</h2>

<p>
	<a href="  {{ route('students.index') }}">
 	 <button class="btn btn-inverse" type="button">Back button</button>
 	</a>
</p>

@stop