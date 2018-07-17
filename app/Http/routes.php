<?php
// import class functionality from Post class and also the parent class
use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested. */
// BELOW IS WHAT A ROUTE IS
// first parameter is where you wanna go,
// // second parameter returns the view... could do other things
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('post/{id}/{name}/{quirk}', 'PostsController@show_post');











// |--------------------------------------------------------------------------
// | ELOQUENT OBJECT RELATIONAL MODEL (ORM)
// | retrieving data using Eloquent
// |--------------------------------------------------------------------------
// ====================================================================================
// find functionality using Eloquent in routes
// import Post class using use App\Post; at top of document
// can use as long as we import from model class
// ====================================================================================
// retrieve information from db using eloquent
// and shows within a variable
// |--------------------------------------------------------------------------
// Route::get('/read', function() {
// 	$posts = Post::all();
// 	foreach ($posts as $post) {
// 		return $post->title;
// 	}
// });
// ====================================================================================
// find by the ID in the db.
// |--------------------------------------------------------------------------
// Route::get('/find', function() {
// 	$post = Post::find(2);
// 	return $post->title;
// });
// ====================================================================================
// Chaining functions to retrieve data from database
// |--------------------------------------------------------------------------
// Route::get('/findwhere', function() {
// 	// chaining functionalities with Eloquent
// 	$posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
// 	return $posts;
// });
// ====================================================================================
// Find or Fail, if can't find record, the application fails with this function
// |--------------------------------------------------------------------------
// Route::get('/findmore', function() {
	// if it doesn't find, it shows failure message
	// $posts = Post::findOrFail(1);
	// return $posts;
	// you can also search where a user count is less than 50 or fail if you can't find
	// $posts = Post::where('users_count', '<', '50')->firstOrFail();
	// return $posts;
// });
// ====================================================================================
// INSERTING DATA USING ELOQUENT
// |--------------------------------------------------------------------------






// |--------------------------------------------------------------------------
// | RAW SQL QUERIES EXAMPLES USING CRUD
// |--------------------------------------------------------------------------

// ====================================================================================
// inserting data into the db 
// |--------------------------------------------------------------------------
// Route::get('/insert', function() {
// 	DB::insert('insert into posts(title, content) values(?, ?)',['another PHP laravel Example', 'This is another example of the cool stuff you can do']);
// });
// ====================================================================================
// reading data from the db
// |--------------------------------------------------------------------------
// Route::get('/read', function() {
// 	// returns an array of results 
// 	$results = DB::select('select * from posts where id = ?', [1]);
// 	// loop through results and return data within db posts
// 	foreach ($results as $post) {
// 		return $results;
// 	}
// });
// ====================================================================================
// updating data from the db
// |--------------------------------------------------------------------------
// Route::get('/update', function() {
// 	$updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
// 	return $updated;
// });
// ====================================================================================
// deleting data from the db
// |--------------------------------------------------------------------------
// Route::get('/delete', function() {
// 	$deleted = DB::delete('delete from posts where id = ?', [1]);
// 	return $deleted;
// });
// |--------------------------------------------------------------------------
// | ROUTE EXAMPLES
// |--------------------------------------------------------------------------
// |--------------------------------------------------------------------------

// ====================================================================================
// route group is going to be available for the web 
// |--------------------------------------------------------------------------
// Route::group(['middleware' => ['web']], function() {
// });
// ====================================================================================
// curly bracets catch variables to put into route url
// |--------------------------------------------------------------------------
// Route::get('/post/{id}', function($id) {
// 	return "This is post number ". $id;
// });
// ====================================================================================
// can put multiple variables within the route url as well
// |--------------------------------------------------------------------------
// Route::get('/post/{id}/{name}', function($id, $name) {
// 	return "This is post number ". $id . " " . $name;
// });
// ====================================================================================
// admin.home is the same thing as the url within the get()
// admin.home is a nickname for the long url within get() function
// |--------------------------------------------------------------------------
// Route::get('admin/posts/example', array('as'=>'admin.home', function() {
// 	$url = route('admin.home');
// 	return "This url is " . $url;
// }));
// ====================================================================================
// uses name routes for the url in the application
// |--------------------------------------------------------------------------
// Route::get('/posdt', 'PostsController@index');
// ====================================================================================
// resource will help to create special routes to use in the controller
// |--------------------------------------------------------------------------
// Route::resource('posts', 'PostsController');
// ====================================================================================
// goes to the PostsController to the contact method
// the posts controller contact will look for a file 'contact'
// in the views folder
// |--------------------------------------------------------------------------
// Route::get('/contact', 'PostsController@contact');
