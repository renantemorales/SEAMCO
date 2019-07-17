<?php

namespace App\Model\ClientTempID;

use Illuminate\Database\Eloquent\Model;

class ClientTempID extends Model
{
    protected $connection = 'iaccsseamco01';

    protected $table = 'client_temp';
}
