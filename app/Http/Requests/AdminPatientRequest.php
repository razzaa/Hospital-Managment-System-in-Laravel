<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                "name"=>"required",
                "email"=>"required |  unique:users",
                "password"=>"required",
                "email"=>"required", 
                "address"=>"required",
                "city"=>"required",
                "contact_no"=>"required",
                // "contact_no"=>"required | regex:/^(03)[0-9]{9}$/",
                "martial_status"=>"required",
                "religion"=>"required",
                "gender"=>"required",
                "father_husband_name"=>"required",
                // "cnic"=>"required",
                // "cnic"=>"required |regex:/^[1-9][0-9][0-9]{13}$/",
                "birth_year"=>"required",
        ];
    }
}
