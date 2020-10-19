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
  <button id="hide" type="button"  class="block">Note List</button>
  <button id="show" type="button"  class="block">Add Note</button>
</div>

<div id="addnew" style="display:none";>

<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form name="my-form" enctype="multipart/form-data" method="PUT" action="{{ route('noticeboard.create') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                                    <div class="col-md-6">
                                    <input type="text" id="title" class="form-control" name="title">
                                    </div>
                                </div>

                               
                                <div class="form-group row">
                                    <label for="note" class="col-md-4 col-form-label text-md-right">Note</label>
                                    <div class="col-md-6">
                                        <input type="text" id="notice" class="form-control" name="notice">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                                <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus>
                                    @if ($errors->has('date'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                      @endif
                                      </div>
                               </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Add
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
      <th scope="col">Title</th>
      <th scope="col">Notice</th>
      <th scope="col">Date</th>
      <th colspan="2">Options</th>
    </tr>
  </thead>
  <tbody>
  @foreach($notice as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->notice}}</td>
      <td>{{$data->date}}</td>
      <td>{{link_to_route('noticeboard.edit','',[$data->id],['class'=>'fas fa-edit btn btn-success'])}}</td>
                       <td>
                        {!! Form::open(array('route'=>['noticeboard.destroy',$data->id],'method'=>'DELETE')) !!}
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