<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\BikeFeature;
use App\Models\BikeImage;
use App\Models\BikeType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use App\Models\FavoriteBike;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Debugging;

class HomeController extends Controller
{
    public function index()
    {

        // ## ways of creating/inserting data in table[

        // $bike=Bike::get();

        // $bike_publish=Bike::where('published_at','!=',null)->get();
        // // $bike_publish=Bike::where('published_at','!=',null)->first();select first

        // $bike_order=Bike::where('published_at','!=',null)->
        // where('user_id',1)->
        // orderBy('id','desc')->limit(2)->get();

        // $bike=new Bike;
        //     $bike->year = 2120;
        //     $bike->price = 20300;
        //     $bike->mileage = 15010;
        //     $bike->vin = 'VIN001';
        //     $bike->address = '123 Main St';
        //     $bike->phone = '1111111111';
        //     $bike->description = 'Toyota Corolla';
        //     $bike->maker_id = 1;
        //     $bike->model_id = 1;
        //     $bike->bike_type_id = 1;
        //    $bike-> fuel_type_id = 1;
        //     $bike->user_id = 1;
        //     $bike->city_id = 1;
        //     $bike->published_at=now();
        //     $bike->deleted_at=null;
        // $bike->save();

        // $bikeData=[ 
        //     'year' => 2010,
        //     'price' => 45320,
        //     'mileage' => 1200,
        //     'vin' => 'dfds',
        //     'address' => '123 Main Stwrwas',
        //     'phone' => '2345y43',
        //     'description' => 'Toyota toyp',
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'bike_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'published_at'=>now(),

        // ];

        //approaches for filling data 
        //approach 1
        // $bike=Bike::create($bikeData);

        // //approach 2
        // $bike2=new Bike;
        // $bike2->fill($bikeData);
        // $bike2->save();

        // //approach 3
        // $bike3=new Bike($bikeData);
        // // short hand version of the bike2

        // dd($bike);]


        // how to update table data 

        // approache 1
        // $bike=Bike::find(1);
        // $bike->price=1000;
        // $bike->save();

        // approache 2 customize
        // update part
        // $newprice=Bike::where('vin','VIN005')->value('price');
        // Bike::updateOrCreate([
        //     'vin'=>'VIN006','price'=>15000 //search conditions/condition
        // ],
        // ['price'=>$newprice*100]);
        //create part needs all column to be filled to work , the one on top will thhourgh errer becuase only one column is being filled 
        // but i must filled all data
        //   $bikeData=[ 
        //         'year' => 2010,  
        //         'price' => 45320,
        //         'mileage' => 1200,
        //         'vin' => 'dfds',
        //         'address' => '123 Main Stwrwas',
        //         'phone' => '2345y43',
        //         'description' => 'Toyota toyp',
        //         'maker_id' => 1,
        //         'model_id' => 1,
        //         'bike_type_id' => 1,
        //         'fuel_type_id' => 1,
        //         'user_id' => 1,
        //         'city_id' => 1,
        //         'published_at'=>now(),

        //     ];

        // Bike::updateOrCreate([
        //     'vin'=>'VIN006','price'=>15000 //search conditions/condition
        // ],
        // $bikeData); //this will not work beucase user_id is not guarded 

        //appraoch 3 #mass update
        // Bike::where('published_at',null)->
        // where('user_id',2)
        // ->update(['published_at'=>now()]);

        //DEleting

        //appraoch 1
        // $bike=Bike::find(1);
        // $bike->delete();

        //appraoch 2 #mass delete
        // first way
        //         Bike::destroy([2,3]);
        //         // second way
        //         Bike::where('published_at','!=',null)->
        //         where('user_id',4)
        //         ->delete();
        //         //third way
        //         Bike::truncate(); //this just actuall delete all data , softdelete dont work

        // dd(Bike::withTrashed()->get());


        //✅challenge:: retrieve all bike records where the price is greater than 20k
        //  $bike=Bike::where('price','>',20000)->get();
        //         dd($bike);


        //✅challenge:: fetch the maker detailed where the maker name is toyota
        // $maker=Maker::where('name','toyota')->get();
        // dd($maker);]

        //✅challenge:: insert a new fueltype with the name electric
        // FuelType::create(['name'=>'electric']);
        // dd(FuelType::get());

        //c✅hallenge :: udpate  the price of the bike with id 1 o 15k
        // Bike::find(1)->update(['price'=>1]);
        // dd(Bike::get());

        //✅challenge:: delete all bike records where the year us before 2020
        // Bike::where('year','<',2020)->delete();
        // not ideal  to do it like this becuae year is suppose to be a date datatype be becuase its not, this is ok
        // dd(Bike::where('deleted_at','!=',null)->withTrashed()->get());

        // $bike=Bike::find(1);
        // // //udpate way 1
        // // $bike->features->abs =0;
        // // $bike->features->save();
        // //udpate way 2
        // $bike->features->update(['abs'=>0]);
        // // $bike->primaryImage->delete();

        // dd($bike->features,$bike->primaryImage);

        //❌bike relation for hasone relationship

        //this will give Duplicate entry for primary key because bike can have only one bikefeature , or a one to one relationship
        //if this was hasmany this error will not happen like the one below where you can stuck as many image to one bike
        // $bike=Bike::find(2);

        // $bikefeatures=New BikeFeature([
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
        // $bike->features()->save($bikefeatures);
        // dd($bike->features);


        // //❌ hasmany relationship 
        // $bike=Bike::find(1);
        // // $image= new BikeImage(['image_path'=>'somthing','position'=>2]);
        // // $bike->images()->save($image);

        // // $bike->images()->create(['image_path'=>'somthing2','position'=>3]);
        // //how to save with many data in one go
        // $bike->images()->createMany([['image_path'=>'10','position'=>8],
        // ['image_path'=>'somthing3','position'=>4],
        // ['image_path'=>'somthing4','position'=>5],
        // ['image_path'=>'somthing5','position'=>6],
        // ['image_path'=>'somthing7','position'=>7],

        // ]);


        // dd($bike->images);
        // $bike=Bike::find(1);
        // dd($bike->bikeType);

        // ❌Many to one relationship

        // $bikeType=BikeType::where('name','Sedan')->first();
        // $bike=Bike::whereBelongsTo($bikeType)->get();//select all the bikes that belongs or has a relationship to sedan
        // // this $bikeType->bikes and the one above whereBelongsto are actaully the same 
        // dd($bikeType->bikes,$bike);

        // how to update in many to one
        //First way of updating somthing like an id in many to one
        // $bike=Bike::find(4);
        // $bikeType=BikeType::where('name','Sedan')->first();
        // // $bike->bikeType->bike_type_id=$bikeType->id; //pretty much saying update the bike+type id of bikes to what every id is sedan in biketype
        // // $bike->save();
        // //second way of updating an someting like an id in many to one
        // $bike->bikeType()->associate($bikeType);// pretty much the same sa what its doing above
        // $bike->save();
        // dd($bikeType->bikes);

        //❌Many to MAny

        // $bike=Bike::find(1);
        // dd($bike->userFavorites);

        // $user=User::find(1);
        // dd($user->favoriteBikes);

        //how to add new record in pivot table in many to many
        // $user=User::find(1);
        // // $user->favoriteBikes()->attach([3,4]); //this is for adding 
        // // $user->favoriteBikes()->sync([5]);
        // $user->favoriteBikes()->detach([3,4]); //this is for deleting 

        // dd($user->favoriteBikes);


        //❌Factories
        // $maker =Maker::factory()->count(10)->create();
        // dd($maker);


        // $user=User::factory()->count(10)->make(['name'=>'kian']);
        // $state=User::factory()->count(10)->state(['name'=>'state'])->make();
        //this two are pretty much the same as it does the samething

        //❌Sequence - alternate on what to input 
        // $users=User::factory()->count(10)
        // // ->sequence(['name'=>'kian'],
        // //  ['name'=>'james'],
        // // ['name'=>'john'])
        // ->sequence(fn(Sequence $sequence)=>['name'=>'Name'. 1+$sequence->index ])
        // ->make();

        // $user=User::factory()->count(10)->make(['name'=>'kian']);



        //❌Factory with one to many relationship
        // hasModels(5) means: for each Maker, also create 5 BikeModel instances.
        // If you had hasBikes(5), it would look for BikeFactory.

        // $vars=Maker::factory()->count(1)->hasModels(1)->create();
        // ->hasModels(1,function(array $attributes,Maker $maker){
        //     foreach($maker as $name){
        //         $names=(string)['name'=>$name->name];
        //     return 'From'.$names;
        // }                            this good if you want a customize name for relationship
        // })                                               that is about ot be created
        //❌ a general way of doing it like oyu can free change the model use to have one factory to create all
        //like you can just make the mmodel on changeble do i does the same as hasModels()->name of method on maker model

        // ->has(Model::factory()->count(4),'models') //this is the same as->hasModels(1)
        // ->create();

        // $makers=Maker::get();
        // $models=Model::get();

        //❌ Factory belongsTo relationship
        //  $vars=Model::factory()->count(5)
        // //  ->forMaker()
        // // ->for(Maker::factory()->state(['name'=>'batman']),'maker')
        // // a general way of doing it like oyu can free change the model use to have one factory to create all
        // //         //like you can just make the mmodel on changeble do i does the same as hasModels()->name of method on maker model
        //  ->create();

        // ❌you can also create it with a variable
        // $maker=Maker::factory()->state(['name'=>'batman'])->create();
        //  $vars=Model::factory()->count(5)->for($maker)->create();


        // ❌many to many relationships in factory


        // $vars = User::factory()
        // ->has(Bike::factory()->count(5), 'favoriteBikes')
        // // ->hasAttached(Bike::factory()->count(5), 'favoriteBikes')
        // ->create();



        // $bikes = Bike::get();
        // $favorites = FavoriteBike::get();
        // $users= User::get();




        $bikes = Bike::with([ 'maker', 'model',
                     'bikeType', 'fuelType', 'primaryImage'])
            ->where('published_at', '<', now())
            ->orderBy('published_at', 'desc')->limit(30)->get()
;
                // this can be use for Debugging but sql does not work for some reason
            // ->ddRawSql()
            // ->dd()
            // ->toSql()
            // ->dump()
        return view('home.index', [
            'bikes' => $bikes
        ]);
    }
}
