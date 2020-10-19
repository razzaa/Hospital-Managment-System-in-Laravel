@extends('master')
@section('masterfile')
<!-- Update record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        {!! Form::model($admin_bedward_show,array('route'=>['admin_bedward_show.update',$admin_bedward_show->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            </div>
                                <div class="form-group row">
                                {!! Form::label('id','#', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('id',null,['class'=>'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('patient_name','Patient Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('patient_name',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('doctor_name','Doctor Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('doctor_name',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('nurse_name','Nurse Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('nurse_name',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                
                              
                                <div class="form-group row">
                                {!! Form::label('ward_no',' Ward Number', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('ward_no',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            
                                
                                <div class="form-group row">
                                {!! Form::label('bed_no','Bed Number', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('bed_no',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('start_time','Admit Date', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::date('start_time',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('end_time','Discharge Date', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::date('end_time',null,['class'=>'form-control']) !!}
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
                            {!!Form::close()!!}
                        </div>
            </div>
        </div>
</main>
@endsection