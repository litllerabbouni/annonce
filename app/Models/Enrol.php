<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrol extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'label',
        'description',
        'amount',
        'active',
        'created_by',
        'updated_by',
        'deleted_at'
    ];
    
}
