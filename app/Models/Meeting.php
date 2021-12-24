<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'meeting_at',
        'address',
        'active',
        'description',
        'created_by',
        'updated_by'
    ];

}
