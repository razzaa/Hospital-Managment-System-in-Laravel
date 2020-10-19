<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminBedwardModel extends Model
{
    protected $fillable=[
        'patient_id','doctor_id','nurse_id','patient_name','doctor_name',
        'nurse_name','ward_no','bed_no','start_time','end_time','email'
    ];
}