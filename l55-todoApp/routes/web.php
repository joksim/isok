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

use App\Project;
use App\Task;

Route::get('/', 'ProjectsController@index');

Route::bind('tasks', function($value, $route) {
    return App\Task::where('slug', $value)->first();
});
Route::bind('projects', function($project) {
    return App\Project::where('slug', $value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');


