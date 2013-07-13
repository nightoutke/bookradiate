@extends('layouts.bookcheetah')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

<!-- ****************************REMOVE STUFF HERE TO THE PROFILE PAGE******************************************************************** -->
@section('css')
<!-- replace the link below to suit your new css file-->

 <link rel="stylesheet" href="{{ asset('assets/styles/css/main.css')}} ">
 <link rel="stylesheet" href="{{ asset('assets/styles/css/bookcheetah.css')}} ">
 <!-- Lee CSS -->
 <link rel="stylesheet" href="{{ asset('assets/styles/css/stylesheet.css')}} ">

@stop



@section('toplinks2')
    <li>My Books</li> | 
    <li>Sign Up</li> | 
    <li>Log In</li>
@stop


@section('content')

<!-- <h1>All Profiles</h1> -->

        <div id="content">
            <!-- <div id="search_space">Search</div> -->
            <div class="left_side">
                <ul class="left_content">
                    <a href="#"><li class="left-link">Profile</li></a><br />
                    <a href="#"><li class="left-link">My Bookshelf</li></a><br />
                    <a href="#"><li class="left-link">My Wishlist </li>
                    </a> <br />
                    <a href="#"><li class="left-link">Cash delivery</li></a><br />
                    <a href="#"><li class="left-link">Support</li></a>
                    
                </ul>
            
            </div>
            <div class="center_content">
                <div class="user_title_space">User Details</div>
                <div class="user_photo_space">
                 
                 <div>Image</div>
                </div>
                
                <div class="user_details_space">
                    <div class="visible_text">Name :</div><div class="db_text">{{{ $profile->firstname." " }}}{{{ $profile->lastname }}}</div><br />
                    <div class="visible_text">Email :</div><div class="db_text">{{{ $profile->email." " }}}</div><br />
                    <div class="visible_text">Phone :</div><div class="db_text">{{{ $profile->terms." " }}}</div><br />
                    <div class="visible_text">College :</div><div class="db_text">{{{ $profile->school." " }}}</div>
                    <br />
                    
                    <!-- <td><a href="{{ URL::to('profiles.edit') }}">{{ link_to_route('profiles.edit', 'Edit Profile', array($profile->id), array('class' => 'btn btn-info')) }}</a></td> -->
                    <!-- <p><a href="{{ URL::to('profiles.edit') }}">{{ link_to_route('courses.create', 'Add Course') }}</p></a> -->
                </div>

                <div class="user_title_space">Courses</div>
                <div class="course_table">

                    

                    <!-- Courses Here -->

                </div>
                </div>
            <div class="right_content">
                <div class="progress_bar_title"></div>
                <div class="progress_bar"></div>
                <div class="popular_books_bar"></div>
                <div class="popular_slider"></div>
                <div class="popular_text"></div>
            </div>
        </div>

                @stop