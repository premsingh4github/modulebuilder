<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','HomeController@index');
Route::post('login','HomeController@login');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::resource('','Admin\AdminController');
	Route::controller('jobs','Admin\JobController');
	Route::resource('educationalqualifications', 'Admin\EducationalqualificationsController');
	Route::resource('joblevels', 'Admin\JoblevelsController');
	Route::resource('industries', 'Admin\IndustriesController');
	Route::resource('jobtypes', 'Admin\JobtypesController');
	Route::resource('jobcategories', 'Admin\JobcategoriesController');
	Route::resource('jobaddlayouts', 'Admin\JobaddlayoutsController');
	Route::resource('questioncategories', 'Admin\QuestioncategoriesController');
	Route::resource('questions', 'Admin\QuestionsController');
});
Route::resource('tasks', 'TasksController');
Route::resource('forms', 'FormsController');

