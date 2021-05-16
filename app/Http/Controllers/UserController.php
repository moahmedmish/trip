<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Place;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function getAccount()
    {

       
        return view('profile', ['user' => Auth::user()]);
    }

    
    public function index()
    {

       
        return view('auth.register');
    }


    function create(Request $req)
    {
              
            $user= new User;
    
            $user->first_name=$req->first_name;
            $user->last_name=$req->last_name;
            $user->Email=$req->Email;
            $user->password=Hash::make( $req->password);
            $user->phone_number=$req->phone_number;
            $user->picture=$req->picture;
            $user->birthday=$req->birthday;
    
             $user->save();
    
             return redirect('/');
     }
}
