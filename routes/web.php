<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController ; 
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;



Route::get("/",[PageController::class,'index']);

Route::get("/about",[PageController::class,'about']);
Route::get("/services",[PageController::class,'services']);
Route::get("/index",[PageController::class,'index']);

Route::get('/users/{id}',function($id){
    return 'this is a user'.$id;

});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('/posts', PostController::class);
Route::post('/posts/create',[PostController::class,'store']);

Route::post('/posts/{id}/edit',[PostController::class,'update']);









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
