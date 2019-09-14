<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artmodel extends Model
{
    //
    protected $table = 'arts' ;
    protected $fillable  = ['user ', 'title ', 'body'] ; 
}
