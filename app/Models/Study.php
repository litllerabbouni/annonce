<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'decision',
        'amount',
        'participation_benefit_id',
        'deleted_at'
    ];

}
