@extends('master')
@section('masterfile')
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#addnew").hide();
    $("#displayrecord").show();
    $(this).css('background','#D3DCE3 ');/////////////
    $(this).css('color','#447293');
    $("#show").css('background','#2874A6');
    $("#show").css('color','#f7f7f7');
    // $("#show").css("border", "black solid 1px"); 
  });
  $("#show").click(function(){
    $("#displayrecord").hide();
    $("#addnew").show();
    $(this).css('background','#D3DCE3 ');////////////////
    $(this).css('color','#447293');
    $("#hide").css('background','#2874A6');//onclick color change
    $("#hide").css('color','white');
    // $("#hide").css("border", "#343A40 solid 1px"); 
  });
});
</script>
<style>
.block {
  display: block;
  width: 50%;
  border: none;
  color: white;
  background-color: #2874A6;
  padding: 10px 20px;
  font-weight: bold;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
}
#hide{
  background-color: #D3DCE3;
  color: #447293;
}

.block:hover {
  background-color: white;
  color: black;
}
</style>
<!-- start new record form css -->
<style>
body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}

.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}

.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}

.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
</style>
<!-- end new record form css -->
</head>
<body>
<div class="btn-group" role="group" aria-label="Basic example" style="width:100%"  >
  <button id="hide" type="button"  class="block">Patient List</button>
  <button id="show" type="button"  class="block">Add New Patient</button>
</div>

<div id="addnew" style="display:none";>

<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form name="my-form"  method="PUT" action="{{ route('admin_patient_show.create') }}">
                                @csrf
                                <!-- <div class="form-group row">
                                    <label for="patient_id" class="col-md-4 col-form-label text-md-right">Patient-Id</label>
                                    <div class="col-md-6">
                                    <input id="patient_id" type="text" class="form-control @error('patient_id') is-invalid @enderror" name="patient_id" value="{{ old('patient_id') }}" required autocomplete="patient_id" autofocus>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                    
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="address" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                    <div class="col-md-6">
                                        <input type="text" id="city" class="form-control" name="city">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_no" class="col-md-4 col-form-label text-md-right">Contact Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="contact_no" class="form-control" name="contact_no">
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
                                        <input type="text" id="religion" class="form-control" name="religion">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="father_husband_name" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">Father/Husband Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="father_husband_name" class="form-control" name="father_husband_name">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="cnic" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">CNIC</label>
                                    <div class="col-md-6">
                                        <input type="text" id="cnic" class="form-control" name="cnic">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                  <label for="birth_year" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                                  <div class="col-md-6">
                                  <input id="birth_year" type="date" class="form-control" name="birth_year" value="{{ old('birth_year') }}" required autofocus>
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
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                            `       @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                        </div>

            </div>
        </div>
    

</main>

</div>

<div id="displayrecord">
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact No</th>
      <th scope="col">DOB</th>
      <th scope="col">Date of Creation</th>
      <th colspan='2'>Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pat_data as $data)
    <tr>
    <td>{{$data->id}}</td>
      <td><img src="/img/{{$data->avatar}}" alt="profile_picture"  style="width:50px;height:50px; class="img-circle elevation-2"></td>
      <td>{{$data->name}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->contact_no}}</td>
      <td>{{$data->birth_year}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
      <td>{{link_to_route('admin_patient_show.edit','',[$data->id],['class'=>'fas fa-edit btn btn-success'])}}</td>
                       <td>
                        {!! Form::open(array('route'=>['admin_patient_show.destroy',$data->id],'method'=>'DELETE')) !!}
                        {!! Form::button('',['type'=>'submit','class'=>'fas fa-trash-alt btn btn-danger']) !!}
                        {!! Form::close() !!}
                        </td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>
</body>
</html>
<style>
                table,
                thead,
                tr,
                tbody,
                th,
                td {
                  text-align: center;
                }
          </style>
@endsection