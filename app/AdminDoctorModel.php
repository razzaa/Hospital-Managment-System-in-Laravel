<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminDoctorModel extends Model
{
    protected $fillable = [
        'name', 'email', 'password','admin','gender','department','specilization',
        'servicecharge','permanent_address','present_address','phone_number','dob','avatar',
    ];
}
