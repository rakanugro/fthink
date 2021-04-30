<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //

    protected $fillable = [

    	'name', 'email', 'gender','is_married','address' 

    ];
}
