<?php

namespace App\Livewire;

use App\Models\Bike;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
         $bikes = Bike::with([ 'maker', 'model',
                     'bikeType', 'fuelType', 'primaryImage'])
            ->where('published_at', '<', now())
            ->orderBy('published_at', 'desc')->limit(30)->get()
;
        return view('livewire.home-page',[
            'bikes' => $bikes

        ]);
    }
}

