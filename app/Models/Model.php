<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloModel;

class Model extends EloModel
{
        use HasFactory;
    protected $guarded=[];
    public $timestamps=false;

}
