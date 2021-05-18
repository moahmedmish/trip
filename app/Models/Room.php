<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Available;
use App\Models\Place;


class Room extends Model
{
    use HasFactory;


    public function availables()
    {
       return $this->hasMany('Available','room_id' );
    }

    public function places()
    {
       return $this->belongsTo('Place');
    }
}
