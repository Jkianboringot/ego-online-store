<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $car=Car::get();
        dd($car);
        return view('Home.index',[
            
        ]);
    }
}
