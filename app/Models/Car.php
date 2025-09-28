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
}
