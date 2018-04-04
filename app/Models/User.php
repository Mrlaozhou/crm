<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Auth implements JWTSubject
{
    //
    protected $connection           =   'crm';
    protected $primaryKey           =   'uuid';
    protected $keyType              =   'string';
    protected $table                =   'rbac_admin';
    protected $hidden               =   [
        'password', 'salt'
    ];

    public function getJWTIdentifier ()
    {
        // TODO: Implement getJWTIdentifier() method.
    }

    public function getJWTCustomClaims ()
    {
        // TODO: Implement getJWTCustomClaims() method.
    }
}
