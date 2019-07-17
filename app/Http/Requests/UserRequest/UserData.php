<?php

namespace App\Http\Requests\UserRequest;

use Illuminate\Foundation\Http\FormRequest;

class UserData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Password' => 'required',
            'FName' => 'required',
            'LName' => 'required', 
            'MName' => 'required', 
            'SName' => 'required', 
            'DateOfBirth' => 'required', 
            'Gender' => 'required',
            'CivilStatus' => 'required',
            'TINNum' => 'required', 
            'CellNum' => 'required', 
            'OtherContactNum' => 'required', 
            'EmailAddress' => 'required', 
            'MailingAddress' => 'required', 
            'ResAddStreet' => 'required', 
            'ResAddBarangay' => 'required', 
            'ResAddCity' => 'required', 
            'ResAddZipCode' => 'required', 
            'BusJobTitle' => 'required', 
            'BusName' => 'required', 
            'BusOtherSourceOfIncome' => 'required', 
            'Rating' => 'required', 
            'BusProfession' => 'required',
            'BusDateHired' => 'required'
        ];
    }
}
