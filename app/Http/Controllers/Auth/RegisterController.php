<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\Handler;
use App\Model\UserRegistration\User;
use App\Model\Gender\Gender;
use App\Model\UserRegistration\ClientTemp;
use App\Model\CivilStatus\CivilStatus;
use App\Model\MailingAddress\MailingAddress;
use App\Model\OldCivilStatus\OldCivilStatus;
use Exception;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Fname' => ['required', 'integer', 'max: 255'],
            'LName' => ['required', 'string', 'max:255'],
            'MName' => ['required', 'string', 'max:255'],
            'DateOfBirth' => ['required', 'date'],
            'Gender' => ['required', 'string', 'max:255'],
            'CivilStatus' => ['required', 'string', 'max:255'],
            'TINNum' => ['required', 'string', 'max:255'],
            'CellNum' => ['required', 'string', 'max:255'],
            'OtherContactNum' => ['required', 'string', 'max:255'],
            'EmailAddress' => ['required', 'string', 'max:255'],
            'MailingAddress' => ['required', 'integer', 'max:255'],
            'ResAddStreet' => ['required', 'string', 'max:255'],
            'ResAddBarangay' => ['required', 'string', 'max:255'],
            'ResAddCity' => ['required', 'date'],
            'ResAddZipCode' => ['required', 'string', 'max:255'],
            'ResAddZipCode' => ['required', 'integer', 'max:255'],
            'BusJobTitle' => ['required', 'integer', 'max:255'],
            'BusName' => ['required', 'string', 'max:255'],
            'referrBusOtherSourceOfIncomeed_by' => ['required', 'string', 'max:255'],
            'Rating' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'BusProfession' => ['required', 'string', 'min:6', 'confirmed'],
            'BusDateHired' => ['required', 'string', 'min:6', 'confirmed']
        ]);
    }

    public function index() {
        $genders = Gender::orderBy('GenderID', 'asc')->get();
        $civilStatuses = CivilStatus::orderBy('CivilStatID', 'asc')->get();
        $mailingAddresses = MailingAddress::orderBy('MailingAddressID', 'asc')->get();
        return view('pages.Register.seamco_register', compact('genders', 'civilStatuses', 'mailingAddresses'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        DB::beginTransaction();
        try {
            $ClientTemp = new ClientTemp;
            $ClientTemp->Fname = $request->input('FName');
            $ClientTemp->Lname = $request->input('LName'); 
            $ClientTemp->Mname= $request->input('MName'); 
            $ClientTemp->DateOfbirth = $request->input('DateOfBirth'); 
            $ClientTemp->Gender = $request->input('Gender');
            $ClientTemp->CivilStatus = $request->input('CivilStatus');
            $ClientTemp->TINNum = $request->input('TINNum'); 
            $ClientTemp->CellNum = $request->input('CellNum'); 
            $ClientTemp->OtherContactNum = $request->input('OtherContactNum'); 
            $ClientTemp->EmailAddress = $request->input('EmailAddress'); 
            $ClientTemp->MailingAddress = $request->input('MailingAddress'); 
            $ClientTemp->ResAddStreet = $request->input('ResAddStreet'); 
            $ClientTemp->ResAddBarangay = $request->input('ResAddBarangay'); 
            $ClientTemp->ResAddCity = $request->input('ResAddCity');
            $ClientTemp->ResAddZipCode = $request->input('ResAddZipCode'); 
            $ClientTemp->BusJobTitle = $request->input('BusJobTitle'); 
            $ClientTemp->BusName = $request->input('BusName'); 
            $ClientTemp->BusOtherSourceOfIncome = $request->input('BusOtherSourceOfIncome'); 
            $ClientTemp->Rating = $request->input('Rating'); 
            $ClientTemp->BusProfession = $request->input('BusProfession');
            $ClientTemp->BusDateHired = $request->input('BusDateHired');
            $ClientTemp->save();

            $user = new User;
            $user->client_temp_id = $ClientTemp->id;
            $user->EmailAddress = $ClientTemp->EmailAddress;
            $user->Password = Hash::make($request->input('Password'));
            $user->save();    

        } catch(Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return view('pages.Register.seamco_register')->with('message', 'successfully saved!');  
    }
}