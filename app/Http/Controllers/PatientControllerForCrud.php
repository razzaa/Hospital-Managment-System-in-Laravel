<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\PatientProfileModel;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;
use App\NoticeboardModel;
class PatientControllerForCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor_data=User::all()->where('admin','2');
        return view('patient.make_appiontment',compact('doctor_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PatientProfileModel $data)
    {
        $data=PatientProfileModel::all()->where('patient_id',Auth::user()->id);
        return view('patient.edit',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PatientProfileModel::create
        
        ([
            
            'patient_id' => Auth::user()->id,
            'name' => $request['name'],
            'address'=>$request['address'],
            'city'=>$request['city'],
            'contact_no'=>$request['contact_no'],
            'gender'=>$request['gender'],
            'martial_status'=>$request['martial_status'],
            'religion'=>$request['religion'],
            'father_husband_name'=>$request['father_husband_name'],
            // 'cnic'=>$request['cnic'],
            'referred_to'=>$request['referred_to'],
            'birth_year'=>$request['birth_year'],
        ]);
        // PatientProfileModel::create($request->all());
        return redirect()->back()->with('VaraibleName','CustomMessage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $patient_data=PatientProfileModel::all();
       return view('patient.patient_profile',compact('patient_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , PatientRequest $request)
    {
        $user=PatientProfileModel::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->address=$request['address'];
        $user->contact_no=$request['contact_no'];
        $user->martial_status=$request['martial_status'];
        $user->religion=$request['religion'];
        $user->father_husband_name=$request['father_husband_name'];
        // $user->cnic=$request['cnic'];
        $user->city=$request['city'];
        $user->birth_year=$request['birth_year'];

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function noticeboard(){
        $notice=NoticeboardModel::all();
        return view('patient.noticeboard',compact('notice'));
    }
}
