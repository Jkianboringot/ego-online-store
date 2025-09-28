<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloModel;

class Model extends EloModel
{
        use HasFactory;
    protected $fillable=['name','maker_id'];
    public $timestamps=false;

    public function maker()
    {
        return $this->belongsTo(related: Maker::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

   

}
