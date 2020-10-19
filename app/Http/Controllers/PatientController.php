<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\AdminDoctorModel;
use App\AdminBedwardModel;
use App\AdminInvoiceModel;
use  App\PatientProfileModel;
use App\AdminPaymentModel;
class PatientController extends Controller
{
    /*
    Get the doctor Data
    */
    public function view_doctor(){
        $doctor_data=AdminDoctorModel::all();
        return view('patient.view_doctor',compact('doctor_data'));
    }
    public function bed_ward(){
        // echo '('.(Auth::user()->id).')'.' ' .Auth::user()->name;
        //$bedward_data=AdminBedwardModel::all()->where('patient_name','('.Auth::user()->id.')' .Auth::user()->name  );
       // $bedward_data=AdminBedwardModel::find('('.(Auth::user()->id).')'.' ' .Auth::user()->name);
        $bedward_data=AdminBedwardModel::where('patient_name','LIKE','%'.Auth::user()->name)->get();
        return view('patient.view_bedward',compact('bedward_data'));
    }
    public function invoice_view(){
        $invoice=AdminInvoiceModel::where('patient_name','LIKE','%'.Auth::user()->name)->get();
        return view('patient.invoice',compact('invoice'));
    }
    public function payment_view(){
        $payment=AdminPaymentModel::all();
        return view('patient.payment',compact('payment'));
    }
    public function make_appiontment(){
        $doctor_data=AdminDoctorModel::all();
        return view('patient.make_appointment',compact('doctor_data'));
    }
    public function patient_profile_view(){
        $patient_data=PatientProfileModel::all();
       return view('patient.patient_profile',compact('patient_data'));
    }
    public function  patient_update(){
        $data=PatientProfileModel::all()->where('email',Auth::user()->email);
        return view('patient.ProfileUpdate',compact('data'));
    }
}
