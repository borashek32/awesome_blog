<?php

use Illuminate\Support\Facades\Route;

// Site
Route::get('/', [\App\Http\Controllers\Site\SiteController::class, 'index'])
    ->name('home');

Route::get('/posts', [\App\Http\Controllers\Site\PostController::class, 'posts'])
    ->name('posts');

Route::get('/post/{slug}', [\App\Http\Controllers\Site\PostController::class, 'post'])
    ->name('post');

Route::post('/', [\App\Http\Controllers\Site\SiteController::class, 'submit'])
    ->name('contact');

Route::get('/categories', [\App\Http\Controllers\Site\CategoryController::class, 'index'])
    ->name('categories');

Route::get('/category/{slug}', [\App\Http\Controllers\Site\CategoryController::class, 'category'])
    ->name('category');

Route::get('/tag/{slug}', [\App\Http\Controllers\Site\TagController::class, 'tag'])
    ->name('tag');

Route::post('/post/{slug}', [\App\Http\Controllers\Site\CommentController::class, 'add'])
    ->name('comment');

//Auth
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
