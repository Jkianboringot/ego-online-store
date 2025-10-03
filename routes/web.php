<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']
)->name('index');

Route::get('/car/search',[CarController::class,'search'])->name('car.search');
Route::get('/car/watchlist',[CarController::class,'watchlist'])->name('car.watchlist');

Route::resource('car',CarController::class);


Route::get('/signup', [SignupController::class,'create']
)->name('signup');


Route::get('/login',[LoginController::class,'create'])->name('login');































// Route::get('/create',[Test::class,'create'])->name('test.create');
// Route::post('/store',[Test::class,'store'])->name('test.store');



// Route::get('/post',[Test::class,'post'])->name('post');

// Route::get('{lang}/about/{id}/{name?}',function(string $lang,string $id,string $name=null){
//     return "$lang has an $id and $name in about";
// })->whereNumber('id');//where number check if id is a number


// Route::get('/user/{value}',function(string $value){
//     return "this is the $value";
// })->where('value','[A-z]+'); //accept both upper lower

// Route::get('{lang}/users/{id}',function(string $lang,string $id){
//     return "this $lang is the $id";
// })->where(['lang'=>'[A-z]{2}','id'=>'\d{4,}']); 
//     //lang must be character upper or lower and must be 2 char and is must be 4 digit or more long

// // ->whereNUmeric only accept number
// // ->whereAlphaNUmeric  accept number and letter
// // ->wherein [en,dex,nut] only accep parameter that is in hte list


// Route::get('/search/{search}',function(string $search){
//     return $search;
// })->where('search','.+'); //retrun evn with symbol slash /



// Route::get('/tester',function(){
//     $url= route('product.param',['lang'=>'en','id'=>'1']);
//     dd($url);
// }); 



//     Route::get('{lang}/product/{id}',function(string $lang,string $id){
//     return "this has a parameter $lang/product/$id";
// })->name('product.param'); //retrun evn with symbol slash /


// Route::get('/profile',function(){
//         return 'current user profile';
// })->name('profile');

// Route::get('/currentuser',function(){
//     // return redirect()->route('profile');
//     //do the same thing
//     return to_route('profile');
// });

// //group ->prefix
// Route::prefix('admin')->group(function(){
//     Route::get('/user',function(){
//         return 'admin/user';
//     })->name('user');
//     Route::get('/id',function(){

//         return to_route('user');
//     })->name('id');
// });


// Route::name('admin')->group(function(){
//       Route::get('/user',function(){
//         return 'name/admin/user';
//     })->name('user');
// });


// Route::fallback(function(){
//     dd('fallback');
//     return to_route('welcome');
// });



// Route::get('/solution',function(){
//     return 'solution';
// })->name('solution');

// //myway
// // Route::get('/math/{eq}',function(string $eq){
// //      return eval("return $eq;");
// // })->where('eq','.+');


// // Route::get('/mathsimple/{a}/{b}',function(float $a,float $b){
// //      return $a+$b;
// // })->whereNumber(['a','b']);



// // access all method of a specific class with route
// Route::controller(CarController::class)->group(function(){

// Route::get('/car','index')->name('index');
// Route::get('/mycar','myCar')->name('mycar');
// Route::get('/tank','tank')->name('tank');

// });


// Route::resource('/product',ProductController::class)
// ->except(['destroy']);//show everything else except destroy
// // ->only(['method1','method2...']) only use the method(function) you want



// Route::controller(MathController::class)->group(function(){
//     Route::get('/sum/{n1}/{n2}','sum');
//     Route::get('/sub/{n1}/{n2}','sub');

// })->whereNumber(['n1','n2']);