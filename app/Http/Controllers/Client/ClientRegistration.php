<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Model\Gender\Gender;
use App\Model\UserRegistration\ClientTemp;
use App\Model\CivilStatus\CivilStatus;
use App\Model\MailingAddress\MailingAddress;
use App\Model\OldCivilStatus\OldCivilStatus;
use App\Model\AccountType\AccountType;
use App\Model\Client\Client;
use App\Model\Recruiter\Recruiter;
use App\Model\Geo\Geo;
use App\Model\ClientTempID\ClientTempID;
use Exception;
use DB;

use App\Mail\RegisteredApplicant;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ClientRegistration extends Controller
{
    public function index() {
// Test
        session()->forget('applicantID');

        $Recruiters = Recruiter::orderBy('LName', 'asc')->get();
        $recruiters = [];
        foreach($Recruiters as $recruiter) {
            $recruiters[$recruiter->ClientID] = $recruiter->LName.', '.$recruiter->FName;
        }
        $accountTypes = AccountType::orderBy('AccTypeID', 'asc')->get();
        $genders = Gender::orderBy('GenderID', 'asc')->get();
        $civilStatuses = CivilStatus::orderBy('CivilStatID', 'asc')->get();
        $mailingAddresses = MailingAddress::orderBy('MailingAddressID', 'asc')->get();
        $geos = Geo::orderBy('GeoDesc', 'asc')->get();
        return view('pages.Register.seamco_register', compact('recruiters','genders', 'civilStatuses', 'mailingAddresses', 'accountTypes', 'geos'));
    }

    protected function create(Request $request)
    {
        $Recruiters = Recruiter::orderBy('LName', 'asc')->get();
        $recruiters = [];
        foreach($Recruiters as $recruiter) {
            $recruiters[$recruiter->ClientID] = $recruiter->LName.', '.$recruiter->FName;
        }
        $accountTypes = AccountType::orderBy('AccTypeID', 'asc')->get();
        $genders = Gender::orderBy('GenderID', 'asc')->get();
        $civilStatuses = CivilStatus::orderBy('CivilStatID', 'asc')->get();
        $mailingAddresses = MailingAddress::orderBy('MailingAddressID', 'asc')->get();
        $geos = Geo::orderBy('GeoDesc', 'asc')->get();
        
        $AccountType = 1;
        $ClientType = 1;
        $Status = 1;
        $FinalClientID = 0;
        $Recruiter = Recruiter::where('ClientID', $request->input('rec_id'))->first();
        $NewBRCode = $Recruiter->ClientIDBrCode;
        $ClientTempIDLast =  ClientTempID::get()->last();
        $NewClientIDLast =  Recruiter::get()->last();
        $DateOpened = date('Y-m-d H:i:s');
        //dd($DateOpened);

        if(is_null($NewClientIDLast))
        {
            $FinalClientID =  ($NewClientIDLast->ClientID) + 1;
            //dd('if(is_null($NewClientIDLast))',$FinalClientID);
        }
        else if(!is_null($NewClientIDLast) && is_null($ClientTempIDLast))
        {
            $FinalClientID =  (Recruiter::get()->last()->ClientID) + 1;
            //dd('else if(is_null($ClientTempIDLast))',$FinalClientID);
        }
        else{ $FinalClientID = ($ClientTempIDLast->ClientID) + 1; }

        $ClientIDChkDgt = sprintf("%04d", $NewBRCode).sprintf("%07d", $FinalClientID);

        // ---------------------START CHECKING NEXT DIGIT -  LUHN ALGORITHM--------------------------------
        $ClientIDChkDgt = preg_replace("/[^0-9]/","",$ClientIDChkDgt);      
    
        $vals = array_reverse(str_split($ClientIDChkDgt));
    
        $mult = true;
        foreach($vals as $k => $v){
            $vals[$k] = $mult ? $v*2: $v;
            $vals[$k] = (string)($vals[$k]);
            $mult = !$mult;
        } 
    
        $mp = array_map(function($v){
            return ($v > 9) ? $v[0] + $v[1] : $v;
        }, $vals);
    
        $sum = array_sum($mp);
    
        $md = $sum % 10;
    
        $result = 10 - $md;
        if($result == 10){ $NextCheckDigit = 0; }
        else { $NextCheckDigit = $result; }
        //dd($NextCheckDigit);

        // ----------------------END CHECKING NEXT DIGIT-----------------------

        if($request->input('MName') == ''){ $MName = " "; }else{ $MName = $request->input('MName'); }
        if($request->input('SName') == ''){ $SName = " "; }else{ $SName = $request->input('SName'); }
        if($request->input('OtherContactNum') == ''){ $OtherContactNum = " "; }else{ $OtherContactNum = $request->input('OtherContactNum'); }
        if($request->input('BusOtherSourceOfIncome') == ''){ $BusOtherSourceOfIncome = " "; }else{ $BusOtherSourceOfIncome = $request->input('BusOtherSourceOfIncome'); }

        DB::beginTransaction();
        try {
            $ClientTemp = new Client;
            $ClientTemp->ClientIDBrCode = $NewBRCode;
            $ClientTemp->ClientID = $FinalClientID;
            $ClientTemp->ClientIDChkDgt = $NextCheckDigit;
            $ClientTemp->Fname = $request->input('FName');
            $ClientTemp->Lname = $request->input('LName');  
            $ClientTemp->Mname = $MName; 
            $ClientTemp->Sname = $SName; 
            $ClientTemp->DateOpened= $DateOpened; 
            $ClientTemp->AccountType = $AccountType;
            $ClientTemp->ClientType = $ClientType;
            $ClientTemp->DateOfbirth = $request->input('DateOfBirth'); 
            $ClientTemp->Gender = $request->input('GenderDesc');
            $ClientTemp->CivilStatus = $request->input('CivilStatDesc');
            $ClientTemp->TINNum = $request->input('TINNum'); 
            $ClientTemp->Geographical = $request->input('GeoDesc'); 
            $ClientTemp->CellNum = $request->input('CellNum'); 
            $ClientTemp->OtherContactNum = $OtherContactNum; 
            $ClientTemp->EmailAddress = $request->input('EmailAddress'); 
            $ClientTemp->MailingAddress = $request->input('MailingAddressDesc'); 
            $ClientTemp->ResAddStreet = $request->input('ResAddStreet'); 
            $ClientTemp->ResAddBarangay = $request->input('ResAddBarangay'); 
            $ClientTemp->ResAddZipCode = $request->input('ResAddZipCode'); 
            $ClientTemp->BusJobTitle = $request->input('BusJobTitle'); 
            $ClientTemp->BusName = $request->input('BusName'); 
            $ClientTemp->BusOtherSourceOfIncome = $BusOtherSourceOfIncome; 
            $ClientTemp->BusProfession = $request->input('BusProfession');
            $ClientTemp->BusDateHired = $request->input('BusDateHired');
            $ClientTemp->RecruiterID = $request->input('rec_id');
            $ClientTemp->SpMonthlyIncome = $request->input('SpMonthlyIncome');
            $ClientTemp->Status = $Status;
            $ClientTemp->save();

            session(['applicantID'=>$FinalClientID]);

            //dd('applicantID', session('applicantID'));
           
            $applicantID = $FinalClientID;

            $email = 'renantemorales@coredev.ph';

            $mail = Mail::to($email)
            ->send(new RegisteredApplicant(env('APP_URL') . ':8000/$applicantID/vote/verify?email=' . $email));

            //return $ClientTemp;
                    
        } catch(Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();

        return redirect()->back()->with('message', 'IT WORKS!');
    }
}
