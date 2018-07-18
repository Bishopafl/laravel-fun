<?php
// import class functionality classes and also the parent classes
use App\Post;
use App\User;
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
// | ELOQUENT RELATIONSHIPS 
// |--------------------------------------------------------------------------
// ====================================================================================
// One to One relationship using Eloquent
// |--------------------------------------------------------------------------
// Route::get('/user/{id}/post', function($id) {
// 	// access information by chaining functionalities!
// 	// you can also save it to your database! cool...
// 	return User::find($id)->post->content;
// });
// ====================================================================================
// Inverse of One to One realtionships using Eloquent
// instead of pulling the post, you can also pull the user!
// |--------------------------------------------------------------------------
// Route::get('/post/{id}/user', function($id) {
// 	// pull the user of whatever post id
// 	return Post::find($id)->user->name;
// });
// ====================================================================================
// Inverse of One to One realtionships using Eloquent
// instead of pulling the post, you can also pull the user!
// |--------------------------------------------------------------------------



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
// Route examples for inserting data
// Route::get('/basicinsert', function() {
// 	// instatiate new post class
// 	$post = new Post;
// 	$post->title = 'New Eloquent ORM title';
// 	$post->content = 'Wow, Eloquent is really cool.  Look at this cool content.';
// 	// inserts and updates record!
// 	// Adds timestamps!
// 	$post->save();
// });
// ====================================================================================
// FINDING DATA IN THE DATABASE AND UPDATING IT
// |--------------------------------------------------------------------------
// Route::get('/basicinsert2', function() {
// 	// instatiate new post class
// 	$post = Post::find(2);
// 	$post->title = 'New Eloquent ORM title 2';
// 	$post->content = 'Wow, Eloquent is really cool.  Look at this cool content.Number two!';
// 	// inserts and updates record!
// 	// Adds timestamps!
// 	$post->save();
// });
// ====================================================================================
// CREATE METHOD -> THIS FUNCTIONALITY WORKS GOOD WITH FORMS
// |--------------------------------------------------------------------------
// can't do it like this yet. It doesn't know if it is safe data to insert into the database
// You have to tell the Post class that those two
// variables, title and content, are safe to modify... see Post.php
// |--------------------------------------------------------------------------
// Route::get('/create', function() {
// 	Post::create(['title' => 'the third create method', 'content' => 'Third post. Wow I am learning a lot with Laravel']);
// });
// ====================================================================================
// UPDATE METHOD USING ELOQUENT
// |--------------------------------------------------------------------------
// Route::get('/update', function() {
// 	// put an array in update()
// 	Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'New PHP title', 'content' => 'I love doing PHP work in Laravel!!']);
// });
// ====================================================================================
// DELETE METHOD USING ELOQUENT
// |--------------------------------------------------------------------------
// Route::get('/delete', function() {
// 	$post =  Post::find(2);
// 	$post->delete();
// });
// ====================================================================================
// DELETE MULTIPLE RECORDS AND WITHIN STATEMENTS
// |--------------------------------------------------------------------------
// Route::get('/delete2', function() {
	// to delete existing model and you know the key you can use destroy
	// Post::destroy(3);
	// you want to delete multiple records??
	// Post::destroy([4,5]);
	// you can delete within a statement too!
	// Post::where('is_admin', 0)->delete();
// });
// ====================================================================================
// DELETE RECORD AND PUT IT IN A TRASH BIN
// PUTS A TIMESTAMP ON THE RECORD, AND TELLS LARAVEL IT'S NOT DELETED YET
	// if there are records that have the deleted_at timestamp, 
	// you cannot see them in a find all!
// |--------------------------------------------------------------------------
// Route::get('/softdelete', function() {
// 	Post::find(9)->delete();
// });
// |--------------------------------------------------------------------------
// Route::get('/readsoftdelete', function() {
	// $post = Post::find(7);
	// return $post;
	// read one post in the temp trash can
	// $post = Post::withTrashed()->where('id', 8)->get();
	// return $post;
	// read all posts in the temp trash can
	// $post = Post::onlyTrashed()->where('is_admin', 0)->get();
	// return $post;
// });
// |--------------------------------------------------------------------------
// | DELETES RECORD PERMANENTLY
// | force delete when stuff is in the trash
// |--------------------------------------------------------------------------
// Route::get('/forcedelete', function() {
// 	Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });
// ====================================================================================

// ====================================================================================
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
