<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
<<<<<<< HEAD
    
=======
     
>>>>>>> main
    public function products() {
        return $this->hasMany('App\Product');
    }
}
