<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/posts')->group(function(){
    Route::controller(PostController::class)->group(function(){
       Route::get('', 'index')->name('posts.index');
       Route::get('/create', 'create')->name('posts.create'); 
       Route::post('/create', 'store')->name('posts.store');
    });
});
