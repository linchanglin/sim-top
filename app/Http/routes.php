<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/','PagesController@home');

    Route::resource('teachers','TeachersController',['except' => 'show']);
    Route::resource('students','StudentsController',['except' => 'show']);
    Route::resource('courses','CoursesController',['except' => 'show']);

    Route::group(['prefix' => 'courses/{id}'], function ()
    {
        Route::get('linkCourseTimes', 'CourseOthersController@courseTimes');
    });

    Route::resource('courseTimes','CourseTimesController',['except' => 'show']);
    Route::resource('modules','ModulesController',['except' => 'show']);
    Route::get('changePassword','ChangePasswordController@index');
    Route::post('changePassword/change','ChangePasswordController@change');
    Route::post('passwordReset/{student_id}','ChangePasswordController@reset');


    Route::auth();
});
