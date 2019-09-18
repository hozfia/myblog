<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postcrudmodel extends Model
{
    use SoftDeletes;

    public $table = 'postcrudmodels';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'body',
        'user',
        'title',
        'pic_name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
