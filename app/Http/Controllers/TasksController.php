<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use DB;

class TasksController extends Controller
{
    public function welcome()
    {
    	$tasks = DB::table('tasks')->get();
    	return view('welcome', compact('tasks'));
    }

    public function about()
    {
    	return view('about', ['name' => 'Ehsan']);
    }

    public function contact()
    {
    	return view('contact')->with('link', 'https://t.me/ehs4n');
    }

    public function index()
    {
		$tasks = Task::all();
		return view('tasks.index', compact('tasks'));
	}

	// public function show($id)
	// {
	// 	$task = Task::find($id);
	// 	return view('tasks.show', compact('task'));
	// }

	public function show(Task $task) // Route model binding
	{
		return view('tasks.show', compact('task'));
	}
}
