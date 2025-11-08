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

        $bikes = Bike::with([ 'maker', 'model',
                     'bikeType', 'fuelType', 'primaryImage'])
            ->where('published_at', '<', now())
            ->orderBy('published_at', 'desc')->limit(30)->get()
;
        return view('home.index', [
            'bikes' => $bikes
        ]);
    }
}
