<?php

//Login Route
Route::get('/login', function()
{
	return View::make('login');
});

///Guest and admin Route
Route::get('/posts','BlogController@posts');
Route::get('/posts/{id}','BlogController@show');
Route::post('/posts/comment','BlogController@comment');
Route::get('/','BlogController@posts');

//Admin Route
Route::post('/login','BlogController@login');
Route::get('/create', 'BlogController@showcreate');
Route::post('/create','BlogController@create');
Route::get('/logout','BlogController@logout');
Route::get('/posts/{id}/edit','BlogController@showedit');
Route::post('/posts/edit','BlogController@edit');




