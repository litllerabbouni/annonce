<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'study_id',
        'amount',
        'deleted_at'
    ];
    
}
