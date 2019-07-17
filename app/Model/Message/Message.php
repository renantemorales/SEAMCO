<?php

namespace App\Model\Message;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'messages';
    protected $fillable = ['Name', 'Email', 'Subject', 'Content'];

    public function storeAll(array $data) {
        return Message::create($data);
    }
}
