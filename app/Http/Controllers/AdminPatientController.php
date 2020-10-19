<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\User;
use App\PatientProfileModel;
use App\Http\Requests\AdminPatientRequest;
class AdminPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pat_data=PatientProfileModel::all()->where('admin','patient');
        return view('admin.patient',compact('pat_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AdminPatientRequest $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin'=>'patient',
        ]);
        PatientProfileModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin'=>'patient',
            'gender' => $data['gender'],
            'address' => $data['address'],
            'city' => $data['city'],
            'contact_no' => $data['contact_no'],
            'martial_status' => $data['martial_status'],
            'religion' => $data['religion'],
            'father_husband_name' => $data['father_husband_name'],
            // 'cnic'=>$data['cnic'],
            'birth_year'=>$data['birth_year'],
        ]);
        return redirect()->route('admin_patient_show.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPatientRequest $request)
    {
       
        // return redirect()->route('admin_patient_show.index');
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
    public function edit(PatientProfileModel $admin_patient_show)
    {
        return view('admin.edit_patient',compact('admin_patient_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPatientRequest $request, PatientProfileModel $admin_patient_show)
    {
          // echo "update called";
          $admin_patient_show->update($request->all());
          return redirect()->route('admin_patient_show.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientProfileModel $admin_patient_show)
    {
        $admin_patient_show->delete();
        return redirect()->back();
    }
}
