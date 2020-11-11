<?php

use Illuminate\Support\Facades\Route;
use App\Time;

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('api/times', function (App\Time $time) {
    return Time::all();
});
