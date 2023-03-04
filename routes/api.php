<?php

namespace App\Http\Controllers\AuthController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'api',
    'prefix' => 'cats'

], function ($router) {

    Route::get('', 'CatController@show');
    Route::post('create', 'CatController@create');
    Route::post('update/{id}', 'CatController@update');
    Route::delete('destroy/{id}', 'CatController@destroy');
});
