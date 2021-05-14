<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regoin;
use App\Models\Place;
use App\Models\Room;
use App\Models\Available;

class SerchController extends Controller
{
     function show_regoin()
    { 
         $regoins = Regoin::get();

         return view('sershing',['regoins' => $regoins ]);   
 
    }

    function searching(Request $request)
    { 

         $regoin = $request->region;
         $s_date = $request->check_in;
         $e_date = $request->check_out;

      //   $place = Place::where('address', $regoin)->get();

         $place = Room::whereHas('availables', function ($query) {
         $query->where('s_date', $s_date)->where('e_date', $e_date);
          });

         return response()->json($place);   
 
    }
}
