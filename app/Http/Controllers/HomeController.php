<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // ## ways of creating/inserting data in table[

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

            // $carData=[ 
            //     'year' => 2010,
            //     'price' => 45320,
            //     'mileage' => 1200,
            //     'vin' => 'dfds',
            //     'address' => '123 Main Stwrwas',
            //     'phone' => '2345y43',
            //     'description' => 'Toyota toyp',
            //     'maker_id' => 1,
            //     'model_id' => 1,
            //     'car_type_id' => 1,
            //     'fuel_type_id' => 1,
            //     'user_id' => 1,
            //     'city_id' => 1,
            //     'published_at'=>now(),

            // ];

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

        // dd($car);]
    

        // how to update table data 

        // approache 1
        // $car=Car::find(1);
        // $car->price=1000;
        // $car->save();

        // approache 2 customize
        // update part
        // $newprice=Car::where('vin','VIN005')->value('price');
        // Car::updateOrCreate([
        //     'vin'=>'VIN006','price'=>15000 //search conditions/condition
        // ],
        // ['price'=>$newprice*100]);
        //create part needs all column to be filled to work , the one on top will thhourgh errer becuase only one column is being filled 
        // but i must filled all data
        //   $carData=[ 
        //         'year' => 2010,  
        //         'price' => 45320,
        //         'mileage' => 1200,
        //         'vin' => 'dfds',
        //         'address' => '123 Main Stwrwas',
        //         'phone' => '2345y43',
        //         'description' => 'Toyota toyp',
        //         'maker_id' => 1,
        //         'model_id' => 1,
        //         'car_type_id' => 1,
        //         'fuel_type_id' => 1,
        //         'user_id' => 1,
        //         'city_id' => 1,
        //         'published_at'=>now(),

        //     ];

        // Car::updateOrCreate([
        //     'vin'=>'VIN006','price'=>15000 //search conditions/condition
        // ],
        // $carData); //this will not work beucase user_id is not guarded 

        //appraoch 3 #mass update
        // Car::where('published_at',null)->
        // where('user_id',2)
        // ->update(['published_at'=>now()]);

        //DEleting

        //appraoch 1
        // $car=Car::find(1);
        // $car->delete();

        //appraoch 2 #mass delete
        // first way
//         Car::destroy([2,3]);
//         // second way
//         Car::where('published_at','!=',null)->
//         where('user_id',4)
//         ->delete();
//         //third way
//         Car::truncate(); //this just actuall delete all data , softdelete dont work
        
// dd(Car::withTrashed()->get());







        dd(Car::get());


        return view('Home.index',[
            
        ]);
    }
}
