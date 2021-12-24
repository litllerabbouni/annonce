<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'amount',
        'participation_id',
        'deleted_at'
    ];
}
