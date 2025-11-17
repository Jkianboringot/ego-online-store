<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Livewire\Bike;
use  App\Livewire\HomePage;




Route::get(
    '/',
    HomePage::class
)->name('index'); //->middleware('auth')


Route::middleware('auth')->group(function () {
    Route::get('bike/search', [BikeController::class, 'search'])->name('bike.search');
    Route::get('bike/watchlist', [BikeController::class, 'watchlist'])->name('bike.watchlist');

    Route::resource('bike', BikeController::class);
});


Route::prefix('bikes')->middleware('auth')->name('bikes.')->group(function(){
    Route::get('/',[Bike\Index::class])->name('index');
    Route::get('/create',[Bike\Create::class])->name('create');
    Route::get('/edit',[Bike\Edit::class])->name('edit');
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__ . '/auth.php';
