<?php

namespace App\Model\Member;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $connection = 'mysql2';

    protected $table = 'members';
}
