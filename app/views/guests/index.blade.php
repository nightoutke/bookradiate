@extends('layouts.booklayout')

@section('title')
	::Home
@stop

@section('left-side')
	<ul class="left_content">
                    <a href="#"><li class="left-link">Profile</li></a><br />
                    <a href="#"><li class="left-link">My Bookshelf</li></a><br />
                    <a href="#"><li class="left-link">My Wishlist </li>
                    </a> <br />
                    <a href="#"><li class="left-link">Cash delivery</li></a><br />
                    <a href="#"><li class="left-link">Support</li></a>
                    
    </ul>
@stop


@section('center-content')
	<!-- <div class="center_content"> -->
                <div class="user_title_space">User Details</div>
                <div class="user_photo_space">
	                 <div></div>
	                 <div>Image</div>
                </div>
                
                <div class="user_details_space">
                    <!-- Show title details eg: Name: Email: Phone -->
                    <div class="dbtitle">

                    </div>
                    <!-- Show details eg: dbname, dbmail -->
                    <div class="dbdetails">
                        @foreach($guests as $guest)
                             {{ route('guests.show', $guest->id) }}
                             {{ $guest->firstname }} : {{ $guest->lastname }}
                        @endforeach
                    </div>
                </div>
                <div class="user_title_space">Courses</div>
                <div class="course_table"></div>
    <!-- </div> -->
@stop

@setion('right-content')
	<div class="progress_bar_title"></div>
                <div class="progress_bar"></div>
                <div class="popular_books_bar"></div>
                <div class="popular_slider"></div>
                <div class="popular_text"></div>
@stop