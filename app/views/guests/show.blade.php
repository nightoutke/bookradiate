@extends('layouts.default')

@section('content') 
<h1>
	Welcome to the {{ $guest->firstname }} Page

</h2>

<p>
	{{ route('guests.index') }}
 	 <!-- <button class="btn btn-inverse" type="button">Back button</button> -->
 	
</p>

@stop