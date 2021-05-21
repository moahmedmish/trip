<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Regoin extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'region_name '  ,
        'created_at'    ,
        'updated_at'       ,
        
  ];
    
    public function place()
    {
        return $this->hasMany(Place::class, 'regoin_id');
    }
}
