<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BikeController;
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

Route::get('/bike/search', [BikeController::class, 'search'])->name('bike.search');
Route::get('/bike/watchlist', [BikeController::class, 'watchlist'])->name('bike.watchlist');

Route::resource('bike', BikeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('bike', BikeController::class);


require __DIR__ . '/auth.php';


    // Route::get('/', [HomeController::class,'index']
    // )->name('index');//->middleware('auth')

    // Route::get('/bike/search',[BikeController::class,'search'])->name('bike.search');
    // Route::get('/bike/watchlist',[BikeController::class,'watchlist'])->name('bike.watchlist');

    // Route::resource('bike',BikeController::class);


    // Route::get('/signup', [SignupController::class,'create']
    // )->name('signup');
