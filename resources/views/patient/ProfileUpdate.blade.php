@extends('patient.patient_sidebar')
@section('patientsidebarfile')
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
                    <form  action="{{route('patient_profile_edit.edit', $da->id)}}" method="PUT">
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
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="address" class="form-control" name="address" value="{{$da->address}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                    <div class="col-md-6">
                                        <input type="text" id="city" class="form-control" name="city" value="{{$da->city}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_no" class="col-md-4 col-form-label text-md-right">Contact Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="contact_no" class="form-control" name="contact_no" value="{{$da->contact_no}}">
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
                                    <label for="religion" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">Religion</label>
                                    <div class="col-md-6">
                                        <input type="text" id="religion" class="form-control" name="religion" value="{{$da->religion}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="father_husband_name" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">Father/Husband Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="father_husband_name" class="form-control" name="father_husband_name"value="{{$da->father_husband_name}}">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="cnic" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">CNIC</label>
                                    <div class="col-md-6">
                                        <input type="text" id="cnic" class="form-control" name="cnic" value="{{$da->cnic}}">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                  <label for="birth_year" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                                  <div class="col-md-6">
                                  <input id="birth_year" type="date" class="form-control" name="birth_year" value="{{$da->birth_year}}" required autofocus>
                                    @if ($errors->has('birth_year'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('birth_year') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                  </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Martial Status</label>
                                <input type="radio" name="martial_status"  value="single">
                                <label for="" >Single</label>
                                <input type="radio" name="martial_status" value="married">
                                <label  for="" >Married</label>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                        </button>
                                    </div>
                    
                    </form>
                    

                    @endif
                    @endforeach

@endsection
