<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FavoriteCar;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

use function Laravel\Prompts\search;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::with(['maker', 'model', 'primaryImage'])->find(1)->cars()->orderBy('created_at', 'desc')->get();
        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
    public function search()
    {
        $query = Car::select('cars.*')->with([
            'city',
            'maker',
            'model',
            'carType',
            'fuelType',
            'primaryImage'
        ])
        // ->where('published_at', '<', now())
        ->orderBy('published_at', 'desc');

        $query->join('cities', 'cities.id', '=', 'cars.city_id')
            ->join('car_types','car_types.id','=','cars.car_type_id')

        ->where('cities.state_id',1)->
        where('car_type.name','Sedan');

        $query->select('cars.*','cities.name as city_name'); //manual way you dont have to use eager loading can be good if eager loading is shit (loading every column and you only need one)

        $carCount = $query->count();
        $cars = $query->limit(30)->get();

        return view('car.search', ['carCount' => $carCount, 'cars' => $cars]);
    }


    public function watchlist()
    {

        $cars = User::find(1)->favoriteCars()->with([
            'city',
            'maker',
            'model',
            'carType',
            'fuelType',
            'primaryImage'
        ]);
        return view('car.watchlist', ['cars' => $cars]);
    }
}






