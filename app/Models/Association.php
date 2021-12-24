<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'added_at',
        'name',
        'sigle',
        'mobile',
        'phone',
        'email',
        'address',
        'bp',
        'description'
    ];

    public $timestamps = false;
    
}
