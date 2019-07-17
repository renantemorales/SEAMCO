<?php

namespace App\Http\Controllers\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Model\Message\Message;
use DB;
use DataTables;
use App\Http\Requests\Message\Messages;

class MessageController extends Controller
{
    public $model;

    public function __construct(Message $message) {
        $this->model = $message;
    }

    public function save(Messages $request)
    {
        DB::connection('mysql2');
        if($this->model->storeAll($request->all())) {
            return view('/pages/Contact/seamco_contact')->with('message', 'Thank you for your comments/ suggestions');
        }
    }

}
