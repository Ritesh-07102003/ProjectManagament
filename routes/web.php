<?php

use App\Http\Controllers\Project\Projectcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/dash', function () {
    return view('layout.app');
});


Route::get('/showProject', [Projectcontroller::class,'showProject']);
