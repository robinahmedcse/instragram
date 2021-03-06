<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    
    
        protected $guarded=[];
        
        
        public function profileImage() {
            $imagePath= ($this->image) ? $this->image:'profile/main.png';
            return '/storage/'. $imagePath;
        }
        

    public function user() {
        return $this->belongsTo(User::class); //profile user er ontorgoto
    }
    
    
    public function followers() {
        return $this->belongsToMany(User::class);
    
    }













}
