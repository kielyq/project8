<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

