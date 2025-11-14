<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get(
    '/',
    [HomeController::class, 'index']
)->name('index'); //->middleware('auth')


Route::prefix('bike')->middleware('auth')->name('bike.')->group(function () {
    Route::get('/search', [BikeController::class, 'search'])->name('search');
    Route::get('/watchlist', [BikeController::class, 'watchlist'])->name('watchlist');

    Route::resource('/', BikeController::class)->parameters(['' => 'bike']);
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__ . '/auth.php';


    