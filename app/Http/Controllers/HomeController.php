<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $car=Car::get();

        // $car_publish=Car::where('published_at','!=',null)->get();
        // // $car_publish=Car::where('published_at','!=',null)->first();select first

        // $car_order=Car::where('published_at','!=',null)->
        // where('user_id',1)->
        // orderBy('id','desc')->limit(2)->get();

// $car=new Car;
            //     $car->year = 2120;
            //     $car->price = 20300;
            //     $car->mileage = 15010;
            //     $car->vin = 'VIN001';
            //     $car->address = '123 Main St';
            //     $car->phone = '1111111111';
            //     $car->description = 'Toyota Corolla';
            //     $car->maker_id = 1;
            //     $car->model_id = 1;
            //     $car->car_type_id = 1;
            //    $car-> fuel_type_id = 1;
            //     $car->user_id = 1;
            //     $car->city_id = 1;
            //     $car->published_at=now();
            //     $car->deleted_at=null;
            // $car->save();

            $carData=[ 
                'year' => 2010,
                'price' => 45320,
                'mileage' => 1200,
                'vin' => 'dfds',
                'address' => '123 Main Stwrwas',
                'phone' => '2345y43',
                'description' => 'Toyota toyp',
                'maker_id' => 1,
                'model_id' => 1,
                'car_type_id' => 1,
                'fuel_type_id' => 1,
                'user_id' => 1,
                'city_id' => 1,
                'published_at'=>now(),

            ];

            //approaches for filling data 
            //approach 1
            // $car=Car::create($carData);

            // //approach 2
            // $car2=new Car;
            // $car2->fill($carData);
            // $car2->save();

            // //approach 3
            // $car3=new Car($carData);
            // // short hand version of the car2

        // dd($car);
        return view('Home.index',[
            
        ]);
    }
}
