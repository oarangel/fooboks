<?php

Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');

Route::get('/books', 'BookController@index');

Route::get('/books/create', 'BookController@create');
Route::post('books', 'BookController@store');

Route::get('/books/search', 'BookController@search');

Route::get('/books/{title}', 'BookController@show');

/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');

/**
 * Example routes shown at the end of Week 6's lectures
 */
//Route::get('/', 'TriviaController@index');
//Route::get('/check-answer', 'TriviaController@checkAnswer');
