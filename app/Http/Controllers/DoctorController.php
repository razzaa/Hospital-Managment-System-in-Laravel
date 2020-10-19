<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\AdminBedwardModel;
use App\BloodBankModel;
use App\AdminDoctorModel;
use App\AdminAppointmentModel;
use App\CancelAppointmentModel;
use App\AppointmentHistoryModel;
use App\Http\Requests\DoctorRequest;
use Carbon\Carbon;
use App\NoticeboardModel;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctorurl=User::all();
        return view('admin.AdminControlUser',compact('doctorurl'));
        //echo "Index function of Doctor Controller";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create function called!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,DoctorRequest $request)
    {
        $user=AdminDoctorModel::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->gender=$request['gender'];
        $user->department=$request['department'];
        $user->specilization=$request['specilization'];
        $user->servicecharge=$request['servicecharge'];
        $user->permanent_address=$request['permanent_address'];
        $user->present_address=$request['present_address'];
        $user->phone_number=$request['phone_number'];
        $user->dob=$request['dob'];

        $user->save();
        $user=Auth::user();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->save();
        return back()->with('message','Profile Updated Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $doctorurl)
    {

        //echo "Update Function";
        $doctorurl->update($request->all());
        return redirect()->route('doctorurl.index');//->with('msg2','Employee has beed updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $doctorurl)
    {
        $doctorurl->delete();
        return redirect()->back();//->with('msg3','Employee has beed deleted');
    }
    public function view_badward(){
        $bedward_data=AdminBedwardModel::where('doctor_name','LIKE','%'.Auth::user()->name)->get();
        return view('doctor.view_bedward',compact('bedward_data'));
    }
    public function view_bloodbank(){
        $blood_data=BloodBankModel::all();
        return  view('doctor.blood_bank',compact('blood_data'));
    }
    public function view_profile(){
        $user=AdminDoctorModel::all()->where('email',Auth::user()->email);
        return view('doctor.displayuserprofile',compact('user'));
    }
    public  function doctor_update(){
        $data=AdminDoctorModel::all()->where('email',Auth::user()->email);
        return view('doctor.ProfileUpdate',compact('data'));
    }
    public function  pending_appointments(){
        $appointment=AdminAppointmentModel::where('doctor_name','LIKE',Auth::user()->name.' '.'('.Auth::user()->email.')')->get();
        $copy=DB::table('admin_appointment_models')->where('admin_appointment_models.date','<', Carbon::now()->subMinutes(10))->get();
            DB::table('admin_appointment_models')->where('admin_appointment_models.date','<', Carbon::now()->subMinutes(10))->delete();
         foreach($copy as $record) {
             DB::table("appointment_history_models")->insert(get_object_vars($record));
         }
        return view('doctor.pending_appointments',compact('appointment'));
    }
    public function appointment_history(){
        $appointment=AppointmentHistoryModel::where('doctor_name','LIKE',Auth::user()->name.' '.'('.Auth::user()->email.')')->get();
        return view('doctor.appointment_history',compact('appointment'));
    }
    public function cancel_appointments(){
        $appointment=CancelAppointmentModel::where('doctor_name','LIKE',Auth::user()->name.' '.'('.Auth::user()->email.')')->get();
        return view('doctor.cancel_appointments',compact('appointment'));
    }
    public function noticeboard(){
        $notice=NoticeboardModel::all();
        return view('doctor.noticeboard',compact('notice'));
    }
}
