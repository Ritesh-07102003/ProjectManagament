<?php

use App\Http\Controllers\Project\Projectcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('dashboard');
});


Route::get('/showProject', [Projectcontroller::class,'index']);
Route::get('/addProject', [Projectcontroller::class,'add']);
Route::post('/storeProject', [Projectcontroller::class,'store']);
Route::get('/project/{id}/edit', [Projectcontroller::class,'edit']);
Route::post('/project/{id}', [Projectcontroller::class,'update']);
Route::delete('/deleteProject', [Projectcontroller::class,'delete']);