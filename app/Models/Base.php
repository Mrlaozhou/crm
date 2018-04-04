<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Base extends Model
{
    //
    protected $connection               =   'crm';











    protected static function getUUID ($sign='')
    {
        return Uuid::uuid1()->getHex();
    }
}
