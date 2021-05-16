<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManegar;
use App\Models\Place;
use App\Models\Regoin;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class ServiceManegerController extends Controller
{


    function index()
    {
        $id = ServiceManegar::where('id',2)->pluck("id")->toArray();
      
        $place = Place::where('service_manegar_id',$id)->get();
     
        return view('manegar.index', ['places' => $place ]);
    }

    function place_info()
    {

        $id_regoin = Regoin::where('id',2)->pluck("id")->toArray();


        $name = Regoin::where('id',$id_regoin)->first();

        $place = Place::where('Reg_ID', $id_regoin)->get();

        $service = Service::where('place_id',1)->get();

        return view('manegar.place-info', ['services' => $service],['places' =>  $place ] , ['name_regoin' => $name]  );
    }

    function room_info(Request $req)
    {
       
        return view('manegar.room-info');
    }



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

     public function edit(Request $request)
    {

        $place = Place::find('1');
        $regoin = Regoin::find('2');

        $place->address  = $request->address;
        $place->Email    = $request->Email;
        $place->latitude = $request->latitude;
        $place->longitude = $request->longitude;

        $regoin->region_name = $request->region_name;


        $place->update();
        $regoin->update();
      

       return redirect('/');
    }

}
