<?php

Route::group(["middleware" => "guest"], function(){
    Route::get("login", ["as" => "user.login", "uses" => "UserController@login"]);
    Route::post("login", ["as" => "user.login", "uses" => "UserController@doLogin"]);
});

Route::group(["middleware" => "auth"], function(){
    Route::get('/', ["as" => "dashboard.index", "uses" => "DashboardController@index"]);
});