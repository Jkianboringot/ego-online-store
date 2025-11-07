<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeImage extends Model
{    protected $fillable=['image_path','position'];
    public $timestamps=false;
 
    use HasFactory;

      public function bike(){
        $this->belongsTo(Bike::class);
    }
}
