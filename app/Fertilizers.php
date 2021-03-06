<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fertilizers extends Model
{
    //
    protected $fillable =[
        'name',
        'type',
        'composition',
        'uses',
        'benefits',
        'effects',
        'cost',
        'image',
    ];
}
