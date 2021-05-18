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

          $regoin = Place::where('address', $regoin_name)->get();
       
          if ($regoin)
          {
               $place = Room::whereHas('availables', function ($query) {
                $query->where('s_date', $s_date)->where('e_date', $e_date);
                })->get();

                     return response()->json($place);   
          }


         return view('/');   
 
    }
}
