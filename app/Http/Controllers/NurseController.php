<?php

namespace App\Http\Controllers;
use App\AdminNurseModel;
use App\AdminDoctorModel;
use Illuminate\Http\Request;
use App\PatientProfileModel;
use Auth;
use App\User;
use App\AdminBedwardModel;
use  App\BloodBankModel;
use App\NoticeboardModel;
class NurseController extends Controller
{
    public function display_profile(){
        $user=AdminNurseModel::all()->where('email',Auth::user()->email);
        return view('nurse.displayuserprofile',compact('user'));
    }
    public function nurse_update(){
        $data=AdminNurseModel::all()->where('email',Auth::user()->email);
        return view('nurse.ProfileUpdate',compact('data'));
    }
    public function doctor(){
        $doc_data=AdminDoctorModel::all();
        return view('nurse.doctor',compact('doc_data'));
    }
    public function patient(){
        $pat_data=PatientProfileModel::all();
        return view('nurse.patient',compact('pat_data'));
    }

    public function bedward(){
        // $filter = User::where('name','LIKE','%'.$variable.'%')->get();
        $bedward=AdminBedwardModel::where('nurse_name','LIKE','%'.Auth::user()->name.'%')->get();
        return view('nurse.bedward',compact('bedward'));
    }
    
    public function blood_bank(){
        $blood_data=BloodBankModel::all();
        return view('nurse.blood_bank',compact('blood_data'));
    }
    public function notice_board(){
        $notice=NoticeboardModel::all();
        return view('nurse.noticeboard',compact('notice'));
    }
}
