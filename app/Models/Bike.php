<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Model as models;
class Bike extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $fillable = [
        'year',
        'price',
        'vin',
        'address',
        'phone',
        'description',
        'maker_id',
        'model_id',
        'bike_type_id',
        'fuel_type_id',
        'user_id',
        'published_at',
    ];

 
    public function primaryImage()
    {
        return $this->hasOne(BikeImage::class)->oldestOfMany();
    }
    public function images()
    {
        return $this->hasMany(BikeImage::class);
    }

    public function bikeType()
    {
        return $this->belongsTo(BikeType::class);
    }

    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }
    public function model()
    {
        return $this->belongsTo(models::class);
    }
    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
    public function userFavorites()
    { //for many to many relation
        return $this->belongsToMany(User::class, 'favorite_bikes');
    }
}
