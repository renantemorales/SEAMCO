<?php

namespace App\Model\Client;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $connection = 'iaccsseamco01';

    protected $table = 'client_temp';
    
    public $timestamps = false;
}