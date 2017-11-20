<?php

/*
|--------------------------------------------------------------------------
| Logs Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */

    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('logs', 'Admin\LogsController@index');
    });
});
