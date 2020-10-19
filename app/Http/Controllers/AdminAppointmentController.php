<?php

namespace App\Http\Controllers;
use App\CancelAppointmentModel;
use Illuminate\Http\Request;
use App\AdminAppointmentModel;
use App\User;
use Auth;
use App\AdminBedwardModel;
use App\AdminDoctorModel;
use App\AdminNurseModel;
use App\PatientProfileModel;
use App\Http\Requests\AdminAppointmentRequest;
class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment=AdminAppointmentModel::all();
        $doc_data=AdminDoctorModel::all();
        $pat_data=PatientProfileModel::all();
        if(Auth::user()->admin=="patient"){
            $appointment=AdminAppointmentModel::where('patient_name','LIKE',Auth::user()->name.' '.'('.Auth::user()->email.')')->get();
            return view('patient.make_appointment',compact('doc_data','pat_data','appointment'));
        }
        return view('admin.appointment',compact('doc_data','pat_data','appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AdminAppointmentRequest $request)
    {
        AdminAppointmentModel::create($request->all());
        return redirect()->back()->with("message","New Add Successfully!");
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
    public function edit(AdminAppointmentModel $admin_appointment_show)
    {
        if(Auth::user()->admin=="patient"){
            return view('patient.edit_appointment',compact('admin_appointment_show'));
        }
        return view('admin.edit_appointment',compact('admin_appointment_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminAppointmentRequest $request, AdminAppointmentModel $admin_appointment_show)
    {
        //   echo "update called";
          $admin_appointment_show->update($request->all());
          return redirect()->route('admin_appointment_show.index')->with("message","Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminAppointmentModel $admin_appointment_show)
    {
        
        CancelAppointmentModel::create([
            'patient_name' => $admin_appointment_show['patient_name'],
            'doctor_name' => $admin_appointment_show['doctor_name'],
            'date' => $admin_appointment_show['date'],          
        ]);

        $admin_appointment_show->delete();
        return redirect()->back()->with("message","Appointment Remove Successfully!");
    }
}
