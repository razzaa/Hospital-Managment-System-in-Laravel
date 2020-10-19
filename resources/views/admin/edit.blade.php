@extends('master')
@section('masterfile')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-9">
         
{!! Form::model($adminurl,array('route'=>['adminurl.update',$adminurl->id], 'method'=>'PUT')) !!}
<div class="form-group">
{!! Form::label('ID') !!}
{!! Form::text('id',null,['class'=>'form-control', 'readonly' => 'true']) !!}
</div>

<div class="form-group">
{!! Form::label('Name') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('Email') !!}
{!! Form::email('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Profile</label>
                                <select name="admin" id="" class="col-md-4 col-form-label text-md-right" >
                                    <option value="0" selected disabled>Select Profile</option>
                                    <option value="admin">Admin</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="patient">Patient</option>
                                    <option value="accountant">Accountant</option>
                                    <option value="nurse">Nurse</option>
                                  <select>
                                  </div>
<!-- <div class="form-group">
{!! Form::label('Profile') !!}
{!! Form::text('admin',null,['class'=>'form-control']) !!}
</div> -->
<div class="form-group">
{!! Form::button('Save Employee Data',['type'=>'submit','class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
</div>

</div>
</div>


@endsection