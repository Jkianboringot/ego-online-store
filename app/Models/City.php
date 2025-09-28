<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=['state_id','name'];
    use HasFactory;
    
    public $timestamps=false;
public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
