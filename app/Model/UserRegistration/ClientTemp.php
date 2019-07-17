<?php

namespace App\Model\UserRegistration;

use Illuminate\Database\Eloquent\Model;

class ClientTemp extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    protected $fillable = [ 
        'ClientIDBrCode',
        'ClientID',
        'ClientIDChkDgt',
        'FName',
        'LName', 
        'SName', 
        'MName', 
        'AccountType', 
        'DateOpened', 
        'ClientType', 
        'DateOfBirth', 
        'Gender',
        'CivilStatus',
        'TINNum', 
        'Geographical', 
        'CellNum', 
        'OtherContactNum', 
        'EmailAddress', 
        'MailingAddress', 
        'ResAddStreet', 
        'ResAddBarangay', 
        'ResAddZipCode', 
        'BusJobTitle', 
        'BusName', 
        'BusOtherSourceOfIncome', 
        'BusProfession',
        'BusDateHired',
        'BusDateHired',
        'SpMonthlyIncome',
        'Status'
    ];

    public $timestamps = false;

    protected $table = 'client_temp';

    public function users() {
        return $this->hasMany('App\Model\User');
    }

    public function storeAll(array $data) {
        return ClientTemp::create($data);
    }
}
