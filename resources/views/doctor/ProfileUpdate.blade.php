@extends('doctor.doctor_sidebar')
@section('doctorsidebarfile')
@foreach($errors->all() as $error)
<div class="alert alert-warning" role="alert">
<li>{{$error}}</li>
</div>
@endforeach
 @if(session('message'))
 <div class="alert alert-success" role="alert">
 {{session('message')}}
 </div>
 @endif
</br>
                    @foreach ($data as $da)
                    @if( $da->email== Auth::user()->email )
                    <form  action="{{route('doctor_profile_edit.edit', $da->id)}}" method="PUT">
                    @csrf
                    
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}"  autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email" readonly>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                    
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="specilization" class="col-md-4 col-form-label text-md-right">Specilization</label>
                                    <div class="col-md-6">
                                        <input type="text" id="specilization" class="form-control" name="specilization" value="{{$da->specilization}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="servicecharge" class="col-md-4 col-form-label text-md-right">Fee </label>
                                    <div class="col-md-6">
                                        <input type="text" id="servicecharge" class="form-control" name="servicecharge" value="{{$da->servicecharge}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control" name="present_address" value="{{$da->present_address}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="permanent_address" value="{{$da->permanent_address}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone_number" value="{{$da->phone_number}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Department</label>
                                <select name="department" id="" class="col-md-4 col-form-label text-md-right" >
                                    <option value="0" selected disabled>Select Department</option>
                                    <option value="Emergency department">Emergency department</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Intensive care unit">Intensive care unit</option>
                                    <option value="Gynaecology">Gynaecology</option>
                                  <select>
                                  </div>
                                <div class="form-group row">
                                    <label for="admin" class="col-md-4 col-form-label text-md-right">Profile</label>
                                    <div class="col-md-6">
                                        <input type="text" id="admin" class="form-control" name="admin" value="{{$da->admin}} "readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <input type="radio" name="gender"  value="male">
                                <label for="" >Male</label>
                                <input type="radio" name="gender" value="female">
                                <label  for="" >Female</label>
                                </div>
                              
                                <div class="form-group row">
                                  <label for="dob" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                                  <div class="col-md-6">
                                  <input id="dob" type="date" class="form-control" name="dob" value="{{$da->dob}}" required autofocus>
                                    @if ($errors->has('dob'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                  </div>
                                <!-- <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Martial Status</label>
                                <input type="radio" name="martial_status"  value="single">
                                <label for="" >Single</label>
                                <input type="radio" name="martial_status" value="married">
                                <label  for="" >Married</label>
                                </div> -->

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                        </button>
                                    </div>
                    
                    </form>
                    

                    @endif
                    @endforeach

@endsection
