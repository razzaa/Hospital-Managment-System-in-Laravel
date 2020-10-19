<?php

namespace App\Http\Controllers;
use Hash;
use Image;
use App\User;
use App\AdminDoctorModel;
use Illuminate\Http\Request;
use App\Http\Requests\AdminDoctorRequest;
class AdminDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc_data=AdminDoctorModel::all();
        return view('admin.doctor',compact('doc_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AdminDoctorRequest $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin'=>'doctor',
        ]);

        //    echo $data->file('avatar');
            // $filename=time().".".$avatar->getClientOriginalExtension();
            // Image::make($avatar)->resize(250,250)->save(public_path('/img/'.$filename));
        
           
   
            // $request->validate([
            //         'email'=>'required | unique'
            // ]);
        
        AdminDoctorModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin'=>'doctor',
            'gender' => $data['gender'],
            'department' => $data['department'],
            'specilization' => $data['specilization'],
            'servicecharge' => $data['servicecharge'],
            'permanent_address' => $data['permanent_address'],
            'present_address' => $data['present_address'],
            'phone_number' => $data['phone_number'],
            'dob'=>$data['dob'],
        ]);

       return redirect()->back();//route('admin_doctor_show.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminDoctorRequest $request)
    {
        echo "called";
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
    public function edit(AdminDoctorModel $admin_doctor_show)
    {
        return view('admin.edit_doctor',compact('admin_doctor_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminDoctorRequest $request, AdminDoctorModel $admin_doctor_show)
    {
        // echo "update called";
        $admin_doctor_show->update($request->all());
        return redirect()->route('admin_doctor_show.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminDoctorModel $admin_doctor_show,User $adminurl)
    {
        $adminurl->delete();
        $admin_doctor_show->delete();
        return redirect()->back();
    }
}
