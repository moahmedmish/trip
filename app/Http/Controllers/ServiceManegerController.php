<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManegar;
use App\Models\Place;
use App\Models\Regoin;
use App\Models\Service;
use App\Models\Room;
use Illuminate\Support\Facades\Hash;

class ServiceManegerController extends Controller
{


    function index()
    {
        $id = ServiceManegar::where('id',2)->pluck("id")->toArray();
      
        $place = Place::where('service_manegar_id',$id)->get();
     
        return view('manegar.index', ['places' => $place ]);
    }


    function index_register()
    {
        return view('manegar.register');
    }

    function place_info()
    {
 

        $place =Regoin::with(['place'=> function($query){
            $query->select(
             'id',
            'place_name',
            'stars',
            'place_name',
            'Email',
            'place_type',
            'address',
            'regoin_id',
        )->where('service_manegar_id', 2);
           }])->first();
          
           
       // $id_regoin = Regoin::where('place_id', )->pluck("id")->toArray();
        
        //$place = Place::where('id',$id)->where('Reg_ID', $id_regoin )
        //->get();

        //$regoin =  Regoin::where('id', $id_regoin)->first();


        $service = Service::where('place_id', $place->id)->get();

        return view('manegar.place-info', ['services' => $service ,'places' =>  $place ]  );
    }

    function room_info(Request $request )
    {
    
        $room = Room::get();
        
        return view('manegar.room-info' , ['rooms' => $room ]);
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
    public function editService(Request $request)
    {

        $service = Service::find($request->id);

        $service->service_name  = $request->service_name;
        $service->price    = $request->price;
    

        $service->update();
      

       return redirect('/place_info');
    }

    function removeService($id)
    {
         
        Service::destroy($id);

        return redirect('/place_info');
    }


    function addService (Request $req )
    {
              
            $service= new Service;
    
            $service->service_name=$req->service_name;
            $service->price=$req->price;
            $service->place_id=$req->id;

        
             $service->save();

             return redirect('/place_info');
     }



}
