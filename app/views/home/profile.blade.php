<!-- @extends('layouts.profile')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

@section('footer') -->

@extends('layouts.profile')
@section('title', 'Home - '. $post->title);
@section('content')
	<h1>$post->title</h1>
	<div id="content">
		{{ $post->content }}
	</div>
@stop