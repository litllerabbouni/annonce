<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'name',
        'description'
    ];

    public $timestamps = false;

}
