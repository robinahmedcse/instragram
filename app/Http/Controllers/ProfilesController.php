<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    
    
    
   public function index($user)
    {
       $getUser=  User::findOrFail($user);
      
        return view('profile.index',[
            'user' =>$getUser,
        ]);
    }
    
    
    
}
