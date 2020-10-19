<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CancelAppointmentModel extends Model
{
    protected $fillable=[
        "patient_name","doctor_name","date"
    ];
}
