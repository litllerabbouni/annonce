<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'start_at',
        'end_at',
        'active',
        'created_by',
        'updated_by'
    ];
}
