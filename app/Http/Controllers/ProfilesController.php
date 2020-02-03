<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    

   public function index(User $user)
    {
     //  $getUser=  User::findOrFail($user);
      
       $follows=(auth()->user()) ? auth()->user()->following->contains($user->id):FALSE ;
      // dd($follows);
        return view('profile.index',[
            'user' =>$user,
            'follows'=>$follows,
        ]);
    }
    
    
    public function edit(User $user) {
         
    //   $this->authorize('update', $user->profile);
        
        return view('profile.edit',[
            'userById' =>$user,
        ]);
    }
    
    
    public function update(User $user) {
     $data=request()->validate([
         'title' => 'required',
         'description' => 'required',
         'url' => 'url',
         'image' => '',
     ]);  
     
    // dd($data);
     //$user->profile->update($data);
     
     
     if(request('image')){
        $imagePath=request('image')->store('profile','public');

         $image=Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
         $image->save();
     }
     
    // dd($data);
  //  dd(array_merge($data,['image' => $imagePath] ));
     
     auth()->user()->profile->update(array_merge($data, 
                 ['image' => $imagePath]
             ));
     
     return redirect("/profile/{$user->id}");
     
     
    }
    
    
    
    
}
