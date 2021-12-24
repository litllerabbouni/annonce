<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'label',
        'operation',
        'sens',
        'amount'
    ];

}
