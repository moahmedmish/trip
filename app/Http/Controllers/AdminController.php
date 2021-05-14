<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Place;
use App\Models\Regoin;


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


         return view('admin.place',['places' =>  $place ], ['regoin' => $regoin]); 
 
    }

    function userTable()
    { 

        $user = User::orderBy('created_at', 'desc')->get();

        return view('admin.user-table',['users' =>  $user ]); 
 
    }

    function removePlace($id)
    {
         
        User::destroy($id);

        return redirect('place_table');
    }

    function removeUser($id)
    {
         
        User::destroy($id);

        return redirect('user_table');
    }

    function serviceTable()
    { 
         return view('admin.service'); 
 
    }
}
