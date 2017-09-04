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
Route::get('/', 'TasksController@welcome');
Route::get('/about', 'TasksController@about');
Route::get('/contact', 'TasksController@contact');

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