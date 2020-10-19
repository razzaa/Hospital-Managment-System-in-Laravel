<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminInvoiceModel extends Model
{
   protected $fillable=[
       "patient_name","doctor_charges","email",
       "miscellaneous","ward_charges","bed_charges","others_charges","confirmation","grand_total"
   ];
}
