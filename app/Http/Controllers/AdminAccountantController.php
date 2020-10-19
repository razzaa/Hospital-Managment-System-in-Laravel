<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use Auth;
use App\AdminAccountantModel;
use App\Http\Requests\AdminAccountantRequest;
class AdminAccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acc_data=AdminAccountantModel::all()->where('admin','accountant');
        // if(Auth::user()->admin=="accountant"){
        //     return $this->edit(Auth::user()->id);
        // }
        return view('admin.accountant',compact('acc_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AdminAccountantRequest $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin'=>'accountant',
            // 'admin'=>Input::get($data['league']),
        ]);
        AdminAccountantModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'contact_no' => $data['contact_no'],
            'admin'=>'accountant',
        ]);
        return redirect()->back();//route('admin_doctor_show.index');
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
    public function edit(AdminAccountantModel $admin_accountant_show)
    {
        return view('admin.edit_accountant',compact('admin_accountant_show'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminAccountantRequest $request, AdminAccountantModel $admin_accountant_show)
    {
         // echo "update called";
         $admin_accountant_show->update($request->all());
         return redirect()->route('admin_accountant_show.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminAccountantModel $admin_accountant_show)
    {
        $admin_accountant_show->delete();
        return redirect()->back();
    }
}
