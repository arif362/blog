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

Route::get('/contact', function () {
     return view('contact');

});

Route::get('/about', function () {

    	$tasks = [
			'Task -1 ',
			'Task -2 ',
			'Task -3 ',
			'Task -4 '
	];

     return view('about', [
     	'tasks' => $tasks
     ]);

});

