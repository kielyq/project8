<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MainController;
/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', [MainController::class, 'showIndex'])->name('home');
Route::get('/main', [MainController::class, 'showIndex'])->name('main');
Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');

Route::post('/reports', [ReportController::class,'store']) -> name('reports.store');

Route::get('/reports/{report}', [ReportController::class, 'show'])->name('reports.show');
Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');

