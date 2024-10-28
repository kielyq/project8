<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [MainController::class, 'showIndex'])->name('home');
    Route::get('/main', [MainController::class, 'showIndex'])->name('main');
    Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
    Route::get('/array', [MainController::class, 'showArray'])->name('array');
    
    Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('report.destroy');
    
    Route::post('/reports', [ReportController::class,'store']) -> name('reports.store');
    
    Route::get('/reports/{report}', [ReportController::class, 'show'])->name('report.show');
    Route::put('/reports/{report}', [ReportController::class, 'update'])->name('report.update');

});

require __DIR__.'/auth.php';
