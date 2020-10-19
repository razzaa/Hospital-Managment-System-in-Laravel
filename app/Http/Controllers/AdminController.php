<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminDoctorController;
use App\AdminDoctorModel;
use App\AdminAccountantModel;
use App\PatientProfileModel;
use App\AdminNurseModel;
use Illuminate\Http\Request;
use App\User;
use App\AdminHistoryModel;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all()->except(Auth::id());
        //$users = User::all()->except(Auth::user()->id);
        $adminurl=User::all();
        return view('admin.AdminControlUser',compact('adminurl'));
        //echo "Index function of Doctor Controller";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(User $adminurl)
    {
        return view('admin.edit',compact('adminurl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $adminurl)
    {
        if($request->admin=="doctor"){
        AdminDoctorModel::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'admin'=>'doctor',
            'gender' => '',
            'department' => '',
            'specilization' => '',
            'servicecharge' => '',
            'permanent_address' => '',
            'present_address' => '',
            'phone_number' => '',
            'dob'=>'',
        ]);
        }
        else if($request->admin=="patient"){
            PatientProfileModel::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'admin'=>'patient',
                'gender' =>'',
                'address' => '',
                'city' => '',
                'contact_no' => '',
                'martial_status' => '',
                'religion' => '',
                'father_husband_name' => '',
                // 'cnic'=>'',
                'birth_year'=>'',
            ]);
        }
        else if($request->admin=="nurse"){
            AdminNurseModel::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'address' =>'',
                'contact_no' => '',
                'admin'=>'nurse',
            ]);
        }
        else if($request->admin=="accountant"){
            AdminAccountantModel::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'address' =>'',
                'contact_no' => '',
                'admin'=>'accountant',
            ]);
        }
        
        $adminurl->update($request->all());
        return redirect()->route('adminurl.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $adminurl)
    {
        AdminHistoryModel::create([
            'name' => $adminurl['name'],
            'email' => $adminurl['email'],
            'password' => Hash::make($adminurl['password']),
            'admin'=>$adminurl['admin'],
        ]);
        $adminurl->delete();
        return redirect()->back();
    }
    public function newRequests(){
        $adminurl=User::where('admin','zero')->get();
        return view('admin.new_user_request',compact('adminurl'));
    }
}
