<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regoin;
use App\Models\Place;
use App\Models\Room;
use App\Models\Available;

class SerchController extends Controller
{
     function index()
    { 
         $regoins = Regoin::get();

         return view('sershing',['regoins' => $regoins ]);   
 
    }

    function searching(Request $request)
    { 

          $regoin_name = $request->region;

          $s_date = $request->check_in;
          $e_date = $request->check_out;
          $adults = $request->adult;
          
          $regoin = Place::where('address', $regoin_name)->get(); 
         
          if ($regoin)
          {

               $available = Available::where('s_date', $s_date)->where('e_date', $e_date)->get();
  
          }

          $room = Room::where('count_people', $adults)->where('is_avalible', '1')
          ->get();



          return   $room->load('place');

         return view('/');   
 
    }
}
