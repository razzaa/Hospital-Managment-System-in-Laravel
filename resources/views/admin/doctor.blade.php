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
  background-color: #2874A6;
  color: white;
  padding: 10px 20px;
  font-weight: bold;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
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
#hide{
  background-color: #D3DCE3;
  color: #447293;
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
  <button id="hide" type="button"  class="block">Doctor List</button>
  <button id="show" type="button"  class="block">Add New Doctor</button>
</div>

<div id="addnew" style="display:none";>

<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form name="my-form" enctype="multipart/form-data" method="PUT" action="{{ route('admin_doctor_show.create') }}">
                                @csrf
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
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone_number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control" name="present_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="permanent_address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="servicecharge" class="col-md-4 col-form-label text-md-right">Service Charge</label>
                                    <div class="col-md-6">
                                        <input type="text" id="servicecharge" class="form-control" name="servicecharge">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="specilization" class="col-md-4 col-form-label text-md-right">Specilization</label>
                                    <div class="col-md-6">
                                        <input type="text" id="specilization" class="form-control" name="specilization">
                                    </div>
                                </div>
                            
                                <!-- /////////////////////// -->
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Gender:</label>
                                <input type="radio" name="gender"  value="male">
                                <label for="" >Male</label>
                                <input type="radio" name="gender" value="female">
                                <label  for="" >Female</label>
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
                                  <label for="" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                                  <div class="col-md-6">
                                  <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>
                                    @if ($errors->has('dob'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                      @endif
                                      </div>
                                      </div>
                                      <!-- <div class="form-group">
                                      <input type="file" name="avatar" class="form-control">
                                      <input type="hidden" class="form-control"  name="_token" value="{{csrf_token()}}">
                                      </div> -->
                                  <!-- //////////////////////////////// -->
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                    @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                                </div>
                            </form>
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
      <!-- <th scope="col">Address</th> -->
      <th scope="col">Gender</th>
      <th scope="col">Contact No</th>
      <th scope="col">DOB</th>
      <th scope="col">Specilization</th>
      <th scope="col">Department</th>
      <th scope="col">Date of Creation</th>
      <th colspan='2'>Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($doc_data as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td><img src="/img/{{$data->avatar}}" alt="profile_picture"  style="width:50px;height:50px; class="img-circle elevation-2"></td>
      <td>{{$data->name}}</td>
      <!-- <td>{{$data->permanent_address}}</td> -->
      <td>{{$data->gender}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->dob}}</td>
      <td>{{$data->specilization}}</td>
      <td>{{$data->department}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
      <td>{{link_to_route('admin_doctor_show.edit','',[$data->id],['class'=>'fas fa-edit btn btn-success'])}}</td>
                       <td>
                        {!! Form::open(array('route'=>['admin_doctor_show.destroy',$data->id],'method'=>'DELETE')) !!}
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