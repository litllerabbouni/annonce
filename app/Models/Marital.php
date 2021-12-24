<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marital extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'label'
    ];

    public $timestamps = false;

}
