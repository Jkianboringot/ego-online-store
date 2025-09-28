<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
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


//✅challenge:: retrieve all car records where the price is greater than 20k
//  $car=Car::where('price','>',20000)->get();
//         dd($car);
 
 
//✅challenge:: fetch the maker detailed where the maker name is toyota
// $maker=Maker::where('name','toyota')->get();
// dd($maker);]

//✅challenge:: insert a new fueltype with the name electric
// FuelType::create(['name'=>'electric']);
// dd(FuelType::get());

//c✅hallenge :: udpate  the price of the car with id 1 o 15k
// Car::find(1)->update(['price'=>1]);
// dd(Car::get());

//✅challenge:: delete all car records where the year us before 2020
// Car::where('year','<',2020)->delete();
// not ideal  to do it like this becuae year is suppose to be a date datatype be becuase its not, this is ok
// dd(Car::where('deleted_at','!=',null)->withTrashed()->get());

// $car=Car::find(1);
// // //udpate way 1
// // $car->features->abs =0;
// // $car->features->save();
// //udpate way 2
// $car->features->update(['abs'=>0]);
// // $car->primaryImage->delete();

// dd($car->features,$car->primaryImage);

//car relation for hasone relationship
//this will give Duplicate entry for primary key because car can have only one carfeature , or a one to one relationship
//if this was hasmany this error will not happen like the one below where you can stuck as many image to one car
// $car=Car::find(2);

// $carfeatures=New CarFeature([
//                 'abs' => 0,
//                 'air_conditioning' => 0,
//                 'power_windows' => 0,
//                 'power_door_locks' => 0,
//                 'cruise_control' => 0,
//                 'bluetooth_connectivity' => 0,
//                 'remote_start' => 0,
//                 'gps_navigation' => 0,
//                 'heated_sets' => 0,
//                 'climate_control' => 0,
//                 'rear_parking_sensors' => 0,
//                 'leather_seats' => 0,]);
// $car->features()->save($carfeatures);
// dd($car->features);


// //how to create has many relationship 
// $car=Car::find(1);
// // $image= new CarImage(['image_path'=>'somthing','position'=>2]);
// // $car->images()->save($image);

// // $car->images()->create(['image_path'=>'somthing2','position'=>3]);
// //how to save with many data in one go
// $car->images()->createMany([['image_path'=>'10','position'=>8],
// ['image_path'=>'somthing3','position'=>4],
// ['image_path'=>'somthing4','position'=>5],
// ['image_path'=>'somthing5','position'=>6],
// ['image_path'=>'somthing7','position'=>7],

// ]);


// dd($car->images);
// $car=Car::find(1);
// dd($car->carType);

// Many to one relationship
// $carType=CarType::where('name','Sedan')->first();
// $car=Car::whereBelongsTo($carType)->get();//select all the cars that belongs or has a relationship to sedan
// // this $carType->cars and the one above whereBelongsto are actaully the same 
// dd($carType->cars,$car);

// how to update in many to one
//First way of updating somthing like an id in many to one
// $car=Car::find(4);
// $carType=CarType::where('name','Sedan')->first();
// // $car->carType->car_type_id=$carType->id; //pretty much saying update the car+type id of cars to what every id is sedan in cartype
// // $car->save();
// //second way of updating an someting like an id in many to one
// $car->carType()->associate($carType);// pretty much the same sa what its doing above
// $car->save();
// dd($carType->cars);



        return view('Home.index',[
            
        ]);
    }
}
