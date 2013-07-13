@extends('layouts.booklayout')
<!-- @extends('layouts.coursescaffold') -->

{{-- Web site Title --}}
@section('title')
@parent
:: Home
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
                    <div class="dbtitle"></div><div class="dbdetails"></div>
                </div>
                <div class="user_title_space">Courses</div>
                <div class="course_table">
                    <!-- <h1>All Courses</h1> -->
                    @section('course_main')

                        

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

                        <!-- End of Section course_main-->

                 </div> 
    <!-- </div> -->
                 @stop  

@setion('right-content')
	<div class="progress_bar_title"></div>
                <div class="progress_bar"></div>
                <div class="popular_books_bar"></div>
                <div class="popular_slider"></div>
                <div class="popular_text"></div>
@stop