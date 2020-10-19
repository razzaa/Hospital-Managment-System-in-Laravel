<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminInvoiceRequest extends FormRequest
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
            "doctor_charges"=>"required",
            "miscellaneous"=>"required",
            "ward_charges"=>"required",
            "bed_charges"=>"required",
            "others_charges"=>"required",
        ];
    }
}
