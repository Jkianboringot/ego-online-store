<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteBike extends Model
{
    protected $fillable=['bike_id','user_id'];
    use HasFactory;
    public $timestamps=false;

}
