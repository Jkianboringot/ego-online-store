<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'year',
        'price',
        'mileage',
        'vin',
        'address',
        'phone',
        'description',
        'maker_id',
        'model_id',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'published_at',
    ];

    public function features()
    {
        return $this->hasOne(CarFeature::class);
    }
    public function primaryImage()
    {
        return $this->hasOne(CarImage::class)->oldestOfMany();
    }public function images()
    {
        return $this->hasMany(CarImage::class);
    }
    
    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

      public function makers()
    {
        return $this->belongsTo(Maker::class);
    }  public function models()
    {
        return $this->belongsTo(Model::class);
    }  public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }  public function users()
    {
        return $this->belongsTo(User::class);
    }
      public function city()
    {
        return $this->belongsTo(City::class);
    }

     public function userFavorites()
    { //for many to many relation
    return $this->belongsToMany(User::class,'favorite_cars');
    }
}
