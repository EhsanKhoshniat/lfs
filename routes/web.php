<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\Task;  // import the Task class
Route::get('/tasks', 'TasksController@index' );
Route::get('/tasks/{task}', 'TasksController@show');
// Route::get('/', 'TasksController@welcome');
Route::get('/about', 'TasksController@about');
Route::get('/contact', 'TasksController@contact');
Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store'); #using word "store" is a convention
Route::get('/posts/{post}', 'PostController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy'); // Post request is better choice for this

Route::get('/billing', 'BillingController@index');
Route::post('/billing', 'BillingController@result');

// Route::get('/', function (){
// 	// $tasks = DB::table('tasks')->get();
// 	$tasks = DB::table('tasks')->get();
// 	// return $tasks;  //(prints raw database)
// 	return view('welcome', compact('tasks'));
// });



// Route::get('/about', function () {
// 	return view('about', [
// 		'name' => 'Ehsan'
// 	]);
// });



// Route::get('/contact', function (){
// 	return view('contact')->with('link', 'https://t.me/ehs4n');
// });



// Route::get('/tasks', function (){
// 	// $tasks = DB::table('tasks')->get();
// 	$tasks = Task::all();
// 	return view('tasks.index', compact('tasks'));
// });



// Route::get('/tasks/{task}', function ($id){  
// 	$task = Task::find($id);
// 	// $task = DB::table('tasks')->find($id);
// 	// dd($task);  //Die and Dump, laravel's helper function
// 	return view('tasks.show', compact('task'));
// });