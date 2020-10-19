<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminAccountantModel;
use Auth;
use App\User;
class AccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=AdminAccountantModel::all();
        return view('accountant.ProfileUpdate',compact('data'));
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
    public function edit($id ,Request $request)
    {
        $user=AdminAccountantModel::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->address=$request['address'];
        $user->contact_no=$request['contact_no'];
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
    public function update(Request $request)
    {
        echo $request;
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
    public function profileview(){
        $user=AdminAccountantModel::all()->where('email',Auth::user()->email);
        return view('accountant.displayuserprofile',compact('user'));
    }
}
