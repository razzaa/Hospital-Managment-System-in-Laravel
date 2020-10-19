<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminDoctorRequest extends FormRequest
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
            "email"=>"required |  unique:users",
            "name"=>"required",
             "email"=>"required", 
             "password"=>"required",
             "gender"=>"required",
             "department"=>"required",
             "specilization"=>"required",
        "servicecharge"=>"required",
        "permanent_address"=>"required",
        "present_address"=>"required",
        "phone_number"=>"required",
        "dob"=>"required",
        ];
    }
}
