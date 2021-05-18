<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Regoin extends Model
{
    use HasFactory;

    public function place()
    {
       return $this->hasMany('Place');
    }
}
