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


	GET /contacts (index)
	GET /contacts/create (create)
	POST /contacts (store)
	GET /contacts/1 (show)
	GET /contacts/1/edit (edit)
	PATCH /contacts/1 (update)
	DELETE /contacts/1 (destroy)




*/

// pages routes
	 Route::get('/', 'PagesController@home');
	 Route::get('/contact', 'PagesController@contact');
	 Route::get('/about', 'PagesController@about');

 // contact routes
	// Route::get('/contacts', 'ContactsController@index');
	// Route::get('/contacts/create', 'ContactsController@create');
	// Route::post('/contacts', 'ContactsController@store');
	// Route::get('/contacts/{contact}', 'ContactsController@show');
	// Route::get('/contacts/{contact}/edit', 'ContactsController@edit');
	// Route::patch('/contacts/{contact}', 'ContactsController@update');
	// Route::delete('/contacts/{contact}', 'ContactsController@destroy');
	Route::resource('contacts', 'ContactsController');
	Route::resource('posts', 'PostsController');
	Route::resource('comments', 'CommentController');
	Route::post('/posts/{post}/comments', 'CommentController@store');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
