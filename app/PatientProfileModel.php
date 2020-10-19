<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientProfileModel extends Model
{
    protected $fillable = [
        'patient_id', 'name', 'email','password','address','city',
        'contact_no','martial_status','religion','gender','father_husband_name',
        'cnic','birth_year','avatar'
    ];
}
