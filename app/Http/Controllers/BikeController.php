<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\FavoriteBike;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

use function Laravel\Prompts\search;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikes = User::find(2)->bikes()->with(['maker', 'model', 'primaryImage'])
            //so the placement of iwth does matter , it was on user and user has no 
            // relation to this bikes do thats why it give me undifined
            ->orderBy('created_at', 'desc')->paginate(5);
        // ->withPath()
        // ->appends(['sort=>'price']) 
        // ->withQueryString(['sort=>'price']) 
        // ->fragment('bikes') 
        return view('bike.index', ['bikes' => $bikes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bike.create');
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
    public function show(Bike $bike)
    {
        return view('bike.show', ['bike' => $bike]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bike $bike)
    {
        return view('bike.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike)
    {
        //
    }
    public function search()
    {
        $query = Bike::select('bikes.*')->with([
            'maker',
            'model',
            'bikeType',
            'fuelType',
            'primaryImage'
        ])
            // ->where('published_at', '<', now())
            ->orderBy('published_at', 'desc');

        // $query->join('cities', 'cities.id', '=', 'bikes.city_id')
        //     ->join('bike_types','bike_types.id','=','bikes.bike_type_id')

        // ->where('cities.state_id',1)->
        // where('bike_type.name','Sedan');

        // $query->select('bikes.*','cities.name as city_name'); //manual way you dont have to use eager loading can be good if eager loading is shit (loading every column and you only need one)


        $bikes = $query->paginate(10);

        return view('bike.search', ['bikes' => $bikes]);
    }


    public function watchlist()
    {

        $bikes = User::find(1)->favoriteBikes()->with([
            'maker',
            'model',
            'bikeType',
            'fuelType',
            'primaryImage'
        ])->paginate(10);
        return view('bike.watchlist', ['bikes' => $bikes]);
    }
}
