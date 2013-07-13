@extends('layouts.bookcheetah2')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

@section('toplinks2')
    @if (Auth::check())
        <li>Logged in as {{ Auth::user()->fullName() }}</li> |
        <li>College {{ Auth::user()->collegeName() }}</li> |
        <li>My Books</li> | 
        <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">My Account</a></li> | 
        <li><a href="{{ URL::to('account/logout') }}">Log Out</a></li>
    @else
        <li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
        <li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
    @endif
@stop





@section('content')

<!-- <h1>All Profiles</h1> -->

  <div id="content">
            <!-- <div id="search_space">Search</div> -->
            <div class="left_side">
                <ul class="left_content">
                    
                    <a href="#"><li class="left-link">Profile</li></a><br />
                    <a href="#"><li class="left-link">My Bookshelf</li></a><br />
                    <a href="#"><li class="left-link">My Wishlist </li></a><br />
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
                   
                    <td>Name : {{ Auth::user()->fullName() }}</td><br />
                    <td>Email : {{ Auth::user()->email() }}</td> <br />            
                    <td>Phone : {{ Auth::user()->phone() }}</td> <br />
                    <td>College : {{ Auth::user()->collegeName() }}</td>    <br /> <br> 
                        
                    <!-- <p>{{ link_to_route('profiles.edit', 'Edit profile') }}</p> -->
                    <!-- <td>{{ Auth::user()->fullName() }}</td> -->
                </div>


                <div class="user_title_space">Courses</div>
                <div class="course_table">

                   
                    
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




<!-- @if ($profiles->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Password_confirmation</th>
				<th>Terms</th>
				<th>School</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{{ $profile->firstname }}}</td>
					<td>{{{ $profile->lastname }}}</td>
					<td>{{{ $profile->email }}}</td>
					<td>{{{ $profile->password }}}</td>
					<td>{{{ $profile->password_confirmation }}}</td>
					<td>{{{ $profile->terms }}}</td>
					<td>{{{ $profile->school }}}</td>
                    <td>{{ link_to_route('profiles.edit', 'Edit', array($profile->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('profiles.destroy', $profile->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no profiles
@endif -->

@stop

<!-- ****************************REMOVE STUFF HERE TO THE PROFILE PAGE******************************************************************** -->
@section('css')
<!-- replace the link below to suit your new css file-->
<link rel="stylesheet" href="{{ asset('assets/styles/css/home-index.css')}} ">

 <!-- Lee CSS -->
 <link rel="stylesheet" href="{{ asset('assets/styles/css/stylesheet.css')}} ">
@stop