<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("user-signup", "UserController@userSignUp");
Route::post("user-login", "UserController@userLogin");
Route::get("user/{email}", "UserController@userDetail");
