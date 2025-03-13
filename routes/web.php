<?php

use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-page', function() {
    return 'my first page';
});

Route::get('/my-city', function() {
    return 'my city - Kriviy Rih';
});

Route::get('/my-hobby', function() {
    return 'i like going to the Gym';
});

Route::get('/just-one-more-page', function() {
    return 'another page';
});

Route::get('/get-number', function() {
    $someVar = 5;

    return $someVar;
});

Route::get('/get-number2', function() {
    $a = 5;
    $b = 10;
    $c = 35;

    return $c - $a + $b;
});

Route::get('/idk', function() {
    return 'i dont know what to add more';
});

Route::get('/idk2', function() {
    return 'I still dont know what to add but it\'s a final page!';
});

Route::get('/main-page', [MyPlaceController::class, 'index']);

Route::get('/get-post-published', [PostsController::class, 'getfirstpublishedpost']);

Route::get('/get-post-unpublished', [PostsController::class, 'getfirstunpublishedpost']);

Route::get('/get-all-posts', [PostsController::class, 'getallposts']);

Route::get('/posts/create', [PostsController::class, 'create']);

Route::get('/posts/update', [PostsController::class, 'update']);

Route::get('/posts/delete', [PostsController::class, 'delete']);

Route::get('/posts/restore', [PostsController::class, 'restore']);






Route::get('/home', function() {
    return view('home');
})->name('home');

Route::get('/code/create', function() {
    return view('code_create');
})->name('code.create');

Route::post('/code/store', [CodeController::class, 'store'])->name('code.store');
