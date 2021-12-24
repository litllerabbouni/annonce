<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'expense_label',
        'expense_operation',
        'expense_sens',
        'expense_amount',
        'resource_label',
        'resource_operation',
        'resource_sens',
        'resource_amount'
    ];

}
