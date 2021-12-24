<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'label',
        'description'
    ];

    public $timestamps = false;
    
}
