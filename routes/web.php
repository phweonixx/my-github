<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

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
