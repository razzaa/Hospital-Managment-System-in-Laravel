<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminBedwardRequest extends FormRequest
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
            "patient_name"=>"required",
            "doctor_name"=>"required",
            "nurse_name"=>"required",
            "ward_no"=>"required",
            "bed_no"=>"required",
            "start_time"=>"required",
            "end_time"=>"required",
        ];
    }
}
