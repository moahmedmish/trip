<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManegar;
use App\Models\Place;
use Illuminate\Support\Facades\Hash;

class ServiceManegerController extends Controller
{
    function create(Request $req)
    {
              
            $user= new ServiceManegar;
    
            $user->first_name=$req->first_name;
            $user->last_name=$req->last_name;
            $user->Email=$req->Email;
            $user->password=Hash::make( $req->password);
            $user->phone_number=$req->phone_number;
    
             $user->save();

             $place= new Place;
    
             $place->place_name=$req->place_name;
             $place->stars=$req->stars;
             $place->place_type=$req->place_type;
             $place->address=$req->address;
             
     
              $place->save();             
    
             return redirect('/');
     }
}
