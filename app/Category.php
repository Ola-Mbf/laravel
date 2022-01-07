<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function Progs(){
   	return $this->hasMany('App\Prog' , 'category_id');
}
}