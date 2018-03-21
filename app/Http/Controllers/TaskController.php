<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Task;

/**
 * php artisan make:controller TaskController
 * Create a public function inside the NameController to connect to the view
 */
class TaskController extends Controller
{
    public function index(){
        $name = 'Carlos';
        $age = 25;
        // $tasks = DB::table('tasks')->latest()->get();

        // Eloquent and dedicated Class
        $tasks= Task::get();
        // To create JSON for an API
        // return $tasks;
        return view('tasks.index', compact('name','age','tasks'));
    }

/**
 * Controller tasks.show view, show all of the view on separate pages by id
 */
    public function show(Task $task){
        // $tasks= DB::table('tasks')->find($id);
    
        // Eloquent and dedicated Class
        // $tasks = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}