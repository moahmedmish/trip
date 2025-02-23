<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\Regoin;
use App\Models\ServiceManegar;


class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'Email'  ,
        'place_name'    ,
        'regoin_id'       ,
        'stars' ,
        'address',
        'place_type' ,
        'longitude'   ,
        'latitude'   ,
        'service_manegar_id'  ,
        'created_at',
        'updated_at',
];

    public function room()
    {
       return $this->hasMany(Room::class, 'place_id');
    }

    
    

    public function regoin()
    {
        return $this->belongsTo(Regoin::class);
    }


    public function serviceManegar()
    {
        return $this->belongsTo(ServiceManegar::class);
    }

}
