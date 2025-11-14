<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\BikeType;
use App\Models\FavoriteBike;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
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

            ->orderBy('created_at', 'desc')->paginate(5);

        return view('bike.index', ['bikes' => $bikes]);
    }

    public function create()
    {
        $bike_types = BikeType::all();
        $makers = Maker::all();
        $models = Model::all();
        $fuel_types = FuelType::all();

        
        return view('bike.create', [
            'bike_types' => $bike_types,
            'fuel_types' => $fuel_types,
            'makers' => $makers,
            'models' => $models,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'nullable',
            'price'=>'required',
            'address' => 'nullable',
            'description' => 'nullable',
            'phone' => 'nullable',
            'maker_id' => 'nullable',
            'model_id' => 'nullable',
            'fuel_type_id' => 'nullable',
            'user_id' => 'nullable',
            'bike_type_id' => 'required',
            'published'=>'nullable'

        ]);
        $validated['user_id']=auth()->id();
        Bike::create($validated);

    return redirect()->route('bike.index')->with('success', 'Bike created successfully.');
    }

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
