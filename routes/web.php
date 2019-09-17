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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/add', 'ProjectsController@create');
Route::post('/projects/store', 'ProjectsController@store');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/tasks', 'TasksController@create');
Route::post('/projects/{project}/tasks', 'TasksController@store');