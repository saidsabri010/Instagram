<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

        public function profileImage()
        {
            $imagePath = ($this->image) ?  $this->image : '/profile/9MJ8KrSxUEKDn5EiW3zMg9JxDfWyP1AzrfaKBnHf.png';
            return '/storage/' . $imagePath;
        }
        public function user()
        {
            return $this->belongsTo(User::class);
        }
        public function followers(){
            return $this->belongsToMany(User::class);
        }
    
}
