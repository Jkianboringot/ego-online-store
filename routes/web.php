<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




// Route::get('/', [AuthenticatedSessionController::class, 'create'])
//     ->name('login');


Route::get(
    '/',
    [HomeController::class, 'index']
)->name('index'); //->middleware('auth')


Route::get(
    '/',
    [HomeController::class, 'index']
)->middleware(['auth', 'verified'])->name('index');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::get('/car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');

Route::resource('car', CarController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';


    // Route::get('/', [HomeController::class,'index']
    // )->name('index');//->middleware('auth')

    // Route::get('/car/search',[CarController::class,'search'])->name('car.search');
    // Route::get('/car/watchlist',[CarController::class,'watchlist'])->name('car.watchlist');

    // Route::resource('car',CarController::class);


    // Route::get('/signup', [SignupController::class,'create']
    // )->name('signup');
