<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class FollowsController extends Controller
{

    
    public function store(User $user) {
       // return $user->username;
        
       return auth()->user()->following()->toggle($user->profile);
    }
    
    
    
    
}
