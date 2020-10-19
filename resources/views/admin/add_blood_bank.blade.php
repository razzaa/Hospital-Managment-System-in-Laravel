@extends('master')
@section('masterfile')
{!! Form::open(array('route'=>'admin_blood_bank.store')) !!}
<div class="form-group">
{!! Form::label('Blood Group') !!}
{!! Form::text('blood_group',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::button('Save',['type'=>'submit','class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@endsection