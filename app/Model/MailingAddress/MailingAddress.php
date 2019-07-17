<?php

namespace App\Model\MailingAddress;

use Illuminate\Database\Eloquent\Model;

class MailingAddress extends Model
{
    protected $connection = 'iaccsseamco01';

    protected $table = 'mailingaddress';
}
