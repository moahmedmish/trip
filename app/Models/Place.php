<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\Regoin;



class Place extends Model
{
    use HasFactory;

    public function rooms()
    {
       return $this->hasMany('Room', 'place_id');
    }

    
    public function regoin()
    {
       return $this->hasMany('Regoin');
    }
}
