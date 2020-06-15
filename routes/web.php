<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms',"RoomController@index");
Route::get('/home',"RoomController@home");
Route::get('/rooms/create',"RoomController@create")->name('room.create');
Route::post('/rooms',"RoomController@store");
