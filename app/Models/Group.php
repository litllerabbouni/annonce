<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'label',
        'contribution',
        'description',
        'active',
        'description',
        'active',
        'created_by',
        'updated_by',
    ];
    
}
