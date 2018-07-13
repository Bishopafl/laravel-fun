<?php
// first parameter is where you wanna go,
// second parameter returns the view... could do other things

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/{id}/{name}/{quirk}', 'PostsController@show_post');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// route group is going to be available for the web
Route::group(['middleware' => ['web']], function() {
});

// |--------------------------------------------------------------------------
// curly bracets catch variables to put into route url
// ====================================================================================
// Route::get('/post/{id}', function($id) {
// 	return "This is post number ". $id;
// });
// |--------------------------------------------------------------------------
// can put multiple variables within the route url as well
// ====================================================================================
// Route::get('/post/{id}/{name}', function($id, $name) {
// 	return "This is post number ". $id . " " . $name;
// });
// |--------------------------------------------------------------------------
// admin.home is the same thing as the url within the get()
// admin.home is a nickname for the long url within get() function
// ====================================================================================
// Route::get('admin/posts/example', array('as'=>'admin.home', function() {
// 	$url = route('admin.home');
// 	return "This url is " . $url;
// }));
// |--------------------------------------------------------------------------
// Route::get('/posdt', 'PostsController@index');
// ====================================================================================
// resource will help to create special routes to use in the controller
// uses name routes for the url in the application
// |--------------------------------------------------------------------------
Route::resource('posts', 'PostsController');
// ====================================================================================
// goes to the PostsController to the contact method
// the posts controller contact will look for a file 'contact'
// in the views folder
Route::get('/contact', 'PostsController@contact');
