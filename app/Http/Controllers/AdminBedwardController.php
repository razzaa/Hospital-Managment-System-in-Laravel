<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminBedwardModel;
use App\AdminDoctorModel;
use App\AdminNurseModel;
use App\PatientProfileModel;
use App\Http\Requests\AdminBedwardRequest;
class AdminBedwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bedward=AdminBedwardModel::all();
        $doc_data=AdminDoctorModel::all();
        $nur_data=AdminNurseModel::all();
        $pat_data=PatientProfileModel::all();
        return view('admin.bedward',compact('bedward','doc_data','nur_data','pat_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AdminBedwardRequest $request)
    {
        AdminBedwardModel::create($request->all());
        return redirect()->back()->with("message","New Patient Add In A Ward!");
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
    public function edit(AdminBedwardModel $admin_bedward_show)
    {
        return view('admin.edit_bedward',compact('admin_bedward_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminBedwardRequest $request, AdminBedwardModel $admin_bedward_show)
    {
        // echo "update called";
        $admin_bedward_show->update($request->all());
        return redirect()->route('admin_bedward_show.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminBedwardModel $admin_bedward_show)
    {
        $admin_bedward_show->delete();
        return redirect()->back()->with("message","Admit Patient Remove Successfully");
    }
}
