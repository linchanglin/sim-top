<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/','PagesController@home');

    Route::resource('teachers','TeachersController');

    Route::auth();
});
