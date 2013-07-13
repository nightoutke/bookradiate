<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('profiles', 'ProfilesController');
Route::resource('users', 'UsersController');

Route::controller('cheetah', 'CheetahController');

Route::controller('account', 'AccountController');
Route::controller('users', 'UsersController');
// Check this for users and id pages
// Route::get('users/{username}', function($username){
// 	var_dump("User with the id of $username");
// });

// Route::get('demo', function(){
// 	$post = Post::findOrFail(1);

// 	View::make('home.courseindex') -> with(compact('post'));
// });
Route::get('hello', function(){
	return View::make('hello');
});

Route::get('howitworks', function(){
	return View::make('howitworks');
});
Route::get('privacypolicy', function(){
	return View::make('privacypolicy');
});

Route::get('termsofuse', function(){
	return View::make('termsofuse');
});

Route::get('blog', function(){
	return View::make('blog');
});
Route::get('customerservice', function(){
	return View::make('customerservice');
});

Route::controller('home', 'HomeAccountController');

// Route::controller('profile', 'HomeController');

Route::resource('account/index', 'AccountController');

Route::resource('account/login', 'AccountController');

Route::resource('account/register', 'AccountController');

Route::resource('forums', 'ForumsController');

Route::resource('visiter', 'VisitersController');

Route::resource('cheetah/guest', 'GuestsController');

Route::resource('courses', 'CoursesController');

// Route::controller('cheetah/profile', 'ProfileController');


Route::resource('students', 'StudeController');
// 
// Route::controller('account', 'AccountController');
Route::controller('/', 'HomeController');



Route::controller('cheetah/editdata', 'TestingsController');


// Route::resource('cheetah/profile', 'CoursesController');



