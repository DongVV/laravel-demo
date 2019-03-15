<?php

use App\Notifications\SubscriptionRenewalFailed;

Route::get('/', function() {
    $user = App\User::first();
    $user->notify(new SubscriptionRenewalFailed());
    return 'done!';
});

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@create');

// Route::get('/projects/new', 'ProjectsController@new');

Route::resource('projects', 'ProjectsController');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
