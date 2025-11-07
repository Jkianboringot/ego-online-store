<?php

namespace App\Models;
use App\Models\Model as models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    protected $fillable=['name'];
    use HasFactory;
    public $timestamps=false;
    public function bikes()
    {
        return $this->hasMany(Bike::class);
    }

    public function models()
    {
        return $this->hasMany(models::class);
    }
    
}
