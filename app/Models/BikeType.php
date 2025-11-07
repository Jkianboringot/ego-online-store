<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;


class BikeType extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public $timestamps=false;

    public function bikes()
    {
        return $this->hasMany(Bike::class);
    }

}
