<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Place;
use App\Models\Regoin;
use App\Models\Certificate_Registration;
use App\Models\ServiceManegar;


class AdminController extends Controller
{
    function index()
    { 
         return view('admin.index'); 
 
    }


    function placeTable()
    { 
        
      //  $id_regoin=Regoin::where('id', $id )
        //->get()->pluck("id")->toArray();

       // return $id_regoin;


        //$id = Place::where('Reg_ID' , )
        //$regoin = Regoin::select('region_name')where('id', $id_regoin)->get();
    //return  $regoin;
        $place = Place::orderBy('created_at', 'desc')->get();


         return view('admin.place',['places' =>  $place ]); 
 
    }

    function userTable()
    { 

        $user = User::orderBy('created_at', 'desc')->get();

        return view('admin.user-table',['users' =>  $user ]); 
 
    }

    function removePlace($id)
    {
         
        $place = Place::find($id);
        $place->delete();

        return redirect('place_table');
    }

    function removeUser($id)
    {
         
        User::destroy($id);

        return redirect('user_table');
    }

    function serviceTable()
    { 

       $certificate_registration_id_notproven = Certificate_Registration::where('is_a_proven' , '0')
       ->get()->pluck("id")->toArray();

       $servicemanegarnotproven = ServiceManegar::whereIn('Certificate_Registration_id' ,  $certificate_registration_id_notproven )->get();

       $certificate_registration_id_proven = Certificate_Registration::where('is_a_proven' , '1')
       ->get()->pluck("id")->toArray();

       $servicemanegarproven = ServiceManegar::whereIn('Certificate_Registration_id' ,  $certificate_registration_id_proven )->get();

        return view('admin.service' , ['servicemanegarsnotproven' => $servicemanegarnotproven , 'servicemanegarsproven' => $servicemanegarproven]); 
 
    }


    function removeServiceManegar($id)
    {
         
        ServiceManegar::destroy($id);

        return redirect('service_table');
    }
}
