<?php

Route::get('auth/login', ["as" => "user.login", "uses" => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ["as" => "user.login", "uses" => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ["as" => "user.logout", "uses" => 'Auth\AuthController@getLogout']);

Route::get('password/email', ["as" => "user.forgotten", "uses" => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ["as" => "user.forgotten", "uses" => 'Auth\PasswordController@postEmail']);

Route::get('password/reset/{token}', ["as" => "user.reset", "uses" => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ["as" => "user.reset.password", "uses" => 'Auth\PasswordController@postReset']);

Route::group(["middleware" => "auth"], function(){
    Route::get('/', ["as" => "dashboard.index", "uses" => "DashboardController@index"]);
});