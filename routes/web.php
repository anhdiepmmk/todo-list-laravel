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
// Provide controller methods with object instead of ID
Route::model('tasks', 'App\Task');
Route::model('projects', 'App\Project');

Route::bind('tasks', function ($value,$route){
    //select * from `tasks` where `slug` = ?
    return App\Task::whereSlug($value)->first();
});

Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');



