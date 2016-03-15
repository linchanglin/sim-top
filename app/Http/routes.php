<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/','PagesController@home');

    Route::resource('teachers','TeachersController');
    Route::resource('students','StudentsController');
    Route::resource('courses','CoursesController');
    Route::resource('courseTimes','CourseTimesController');
    Route::resource('modules','ModulesController');

    Route::auth();
});
