@extends('patient.patient_sidebar')
@section('patientsidebarfile')

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
<div class="btn-group" role="group" aria-label="Basic example" style="width:100%"  >
  <button id="hide" type="button"  class="block">Appointment List</button>
  <button id="show" type="button"  class="block">Make Appointment</button>
</div>

<div id="addnew" style="display:none";>

<!-- Add new record -->

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form name="my-form"  method="PUT" action="{{ route('admin_appointment_show.create') }}">
                                @csrf
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Doctor</label>
                                <div class="col-md-6">
                                <select name="doctor_name" id="doctor_name" class="form-control">
                                <option value="0" selected disabled> -- Select One --</option>
                                    @foreach ($doc_data as $doctor)
                                        <option value="{{$doctor->name}} ({{ $doctor->email }})"  {{ (isset($doctor->id) || old('id')) }}>({{$doctor->id}}) {{ $doctor->name }} </option>
                                    @endforeach 
                               </select>
                               </div>
                                </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Patient</label>
                                <div class="col-md-6">
                               
                                        <input type="text" class="form-control" value="{{Auth::user()->name}} ({{ Auth::user()->email }})" name="patient_name" readonly >
                                
                               </div>
                                </div>
                                <div class="form-group row">
                                    <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                                    <div class="col-md-6">
                                        <input type="date" id="date" class="form-control" name="date">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Make Appointment
                                        </button>
                                    </div>
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
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col"> Meetup Date</th>
      <th scope="col">Date of Creation</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($appointment as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->patient_name}}</td>
      <td>{{$data->doctor_name}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
                       <td>
                        {!! Form::open(array('route'=>['admin_appointment_show.destroy',$data->id],'method'=>'DELETE')) !!}
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
