<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    protected $fillable=['name'];
    use HasFactory;
    public $timestamps=false;
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function models()
    {
        return $this->hasMany(Model::class);
    }
    
}
