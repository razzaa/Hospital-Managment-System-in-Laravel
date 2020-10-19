@extends('accountant.master')
@section('masterfileaccountant')
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
  <button id="hide" type="button"  class="block">Invoice List</button>
  <button id="show" type="button"  class="block">Make Invoice</button>
</div>

<div id="addnew" style="display:none";>

<!-- Add new record -->

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form name="my-form"  method="PUT" action="{{ route('admin_invoice_show.create') }}">
                                @csrf
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Patient</label>
                                <div class="col-md-6">
                                <select name="patient_name" id="patient_name" class="form-control">
                                <option value="0" selected disabled> -- Select One --</option>
                                    @foreach ($pat_data as $patient)
                                        <option value="({{$patient->id}}) {{ $patient->name }}"  {{ (isset($patient->id) || old('id')) }}>({{$patient->id}}) {{ $patient->name }} </option>
                                    @endforeach 
                                    <input type="hidden" id="email" class="form-control" name="email" value="{{ $patient->email }}">
                               </select>
                               </div>
                                </div>
                                <div class="form-group row">
                                    <label for="doctor_charges" class="col-md-4 col-form-label text-md-right">Doctor Charges</label>
                                    <div class="col-md-6">
                                        <input type="number" id="doctor_charges" class="form-control" name="doctor_charges">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="miscellaneous" class="col-md-4 col-form-label text-md-right">Miscellaneous</label>
                                    <div class="col-md-6">
                                        <input type="number" id="miscellaneous" class="form-control" name="miscellaneous">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ward_charges" class="col-md-4 col-form-label text-md-right">Ward Charges</label>
                                    <div class="col-md-6">
                                        <input type="number" id="ward_charges" class="form-control" name="ward_charges">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="confirmation" class="col-md-4 col-form-label text-md-right">Payment</label>
                                    <div class="col-md-6">
                                        <input type="text" id="confirmation" class="form-control" name="confirmation" value="Unpaid" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bed_charges" class="col-md-4 col-form-label text-md-right">Bed Charges</label>
                                    <div class="col-md-6">
                                        <input type="number" id="bed_charges" class="form-control" name="bed_charges">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="others_charges" class="col-md-4 col-form-label text-md-right">Others</label>
                                    <div class="col-md-6">
                                        <input type="others_charges" id="date" class="form-control" name="others_charges">
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Make Invoice
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                        </div>

            </div>
        </div>
    

</main>

</div>

<div id="displayrecord">
@if(Session::has('message'))
<div class="alert alert-warning" role="alert">
{{Session::get('message')}}
</div>
@endif
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Charges</th>
      <th scope="col"> Miscellaneous</th>
      <th scope="col"> Bed Charges</th>
      <th scope="col"> Ward Charges</th>
      <th scope="col"> Others Charges</th>
      <th scope="col">Date of Creation</th>
      <th scope="col">Download Invoice</th>
      <th scope="col">Payment</th>
      <th colspan='2'>Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($invoice as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->patient_name}}</td>
      <td>{{$data->doctor_charges}}</td>
      <td>{{$data->miscellaneous}}</td>
      <td>{{$data->bed_charges}}</td>
      <td>{{$data->ward_charges}}</td>
      <td>{{$data->others_charges}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
      <td><a href="{{action('AdminInvoiceController@downloadPDF',$data->id)}}">PDF Invoice</a></td>
      <td>{{$data->confirmation}}</td>
      <td>{{link_to_route('admin_invoice_show.edit','',[$data->id],['class'=>'fas fa-edit btn btn-success'])}}</td>
                       <td>
                        {!! Form::open(array('route'=>['admin_invoice_show.destroy',$data->id],'method'=>'DELETE')) !!}
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