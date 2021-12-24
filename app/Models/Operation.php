<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'label',
        'sens'
    ];

    public $timestamps = false;
}
