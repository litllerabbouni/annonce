<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'label',
        'rate',
        'contribution',
        'description',
        'active',
        'created_by',
        'updated_by'
    ];
    
}
