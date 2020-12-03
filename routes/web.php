<?php

use Illuminate\Support\Facades\Route;
use App\Time;

Auth::routes(['register' => false]);

Route::view('/', 'homepage')->name('homepage');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/date/{id}', 'DateController@index')->name('date');

Route::get('api/times', function (App\Time $time) {
    return Time::all();
});
