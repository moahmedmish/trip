<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class ServiceManegar extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name'  ,
        'last_name'    ,
        'Email'       ,
        'phone_number' ,
        'password'   ,
         
'Certificate_Registration_id ',
'created_at ',
'updated_at ',
        
];

public function place()
{
   return $this->belongsTo(Place::class);
}

}
