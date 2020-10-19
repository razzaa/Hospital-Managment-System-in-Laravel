@extends('accountant.master')
@section('masterfileaccountant')
<!-- Update record -->
<!-- Add new record -->

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        {!! Form::model($admin_invoice_show,array('route'=>['admin_invoice_show.update',$admin_invoice_show->id], 'method'=>'PUT')) !!}
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
                                {!! Form::label('doctor_charges','Doctor Charges', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::number('doctor_charges',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                {!! Form::label('Miscellaneous','Miscellaneous', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::number('miscellaneous',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('bed_charges','Bed Charges', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::number('bed_charges',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('ward_charges','Ward Charges', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::number('ward_charges',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('others_charges','Other Charges', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::number('others_charges',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('confirmation','Payment', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('confirmation',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                        </button>
                                    </div>
                                    
                                    @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                                </div>
                                {!!Form::close()!!}
                            @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                        </div>

            </div>
        </div>
    

</main>

@endsection