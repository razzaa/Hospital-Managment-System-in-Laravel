@extends('patient.patient_sidebar')
@section('patientsidebarfile')
<?php
echo $makeappointment;
?>
<div class="container">
{!! Form::model($makeappointment,array('route'=>['make-appiontment.store'], 'method'=>'PUT')) !!}
<!-- {!! Form::open(array('route'=>'make-appiontment.store')) !!} -->
<div class="form-group">
{!! Form::label('Name') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<!-- <div class="form-group">
{!! Form::label('CNIC') !!}
{!! Form::text('cnic',null,['class'=>'form-control']) !!}
</div> -->
<div class="form-group">
{!! Form::label('Gender') !!}
{!! Form::text('gender',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Address') !!}
{!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('City') !!}
{!! Form::text('city',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Contact No') !!}
{!! Form::text('contact_no',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Martial Status') !!}
{!! Form::text('martial_status',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Religion') !!}
{!! Form::text('religion',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Father / Husband Name') !!}
{!! Form::text('father_husband_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Referred To') !!}
{!! Form::text('referred_to',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Date of Birth') !!}
{!! Form::text('birth_year',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::button('Save Data',['type'=>'submit','class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
</div>
@endsection