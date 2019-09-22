<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arttow extends Model
{
    //
     //this is the model that we work on 
     protected $table = 'arts' ;
     protected $fillable  = ['user ', 'title ', 'body'] ;
     public function pic_name()
     {
        return $this->hasOne('App\image' , "post_id" );
     }
}
