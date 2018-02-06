<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/blokai', 'BlocksController@index')->name('blocks');

Auth::routes();