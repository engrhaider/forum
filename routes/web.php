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

Route::get('/welcome', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/',function(){
	return view('layouts.forum');
});


Route::get('/', 'QuestionsController@index');




Route::group(['middleware' => 'auth'], function(){
	Route::get('/question/create', 'QuestionsController@create');
	Route::post('/question', 'QuestionsController@store');
	Route::post('/question/{question}/vote','QuestionsController@voteIncrement');

	Route::post('question/{question}/answer', 'AnswersController@store');
	Route::get('answer/{answer}/edit','AnswersController@edit');
	Route::post('answer/{answer}/update','AnswersController@update');
	Route::get('answer/{answer}/delete','AnswersController@destroy');
});

Route::get('/question/{question}', 'QuestionsController@show');
Route::get('/tag/{tag}/questions', 'TagsController@show');

