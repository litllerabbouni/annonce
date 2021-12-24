<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'name', 
        'email', 
        'password',
        'email_verified_at',
        'birthday',
        'birthplace',
        'father',
        'mother',
        'mobile',
        'phone',
        'bp',
        'address',
        'admin',
        'active',
        'profession',
        'children',
        'added_at',
        ['name', 'birthday'],
        'created_by',
        'updated_by',
        'email_verified_at',
        'last_seen',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
