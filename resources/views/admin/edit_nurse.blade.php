@extends('master')
@section('masterfile')
<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        {!! Form::model($admin_nurse_show,array('route'=>['admin_nurse_show.update',$admin_nurse_show->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            </div>
                                <div class="form-group row">
                                {!! Form::label('id','#', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('id',null,['class'=>'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('name','Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('email','Email', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::email('email',null,['class'=>'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                </div>
                                
                                
                              
                                <div class="form-group row">
                                {!! Form::label('address',' Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('address',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                <!-- {!! Form::label('password','Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!} -->
                                    <div class="col-md-6">
                                    {!! Form::hidden('password',null,['class'=>'form-control', 'hide' => 'true']) !!}
                                    </div>
                                </div>
                                
                                <!-- <div class="form-group row">
                                {!! Form::label('avatar','Image', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::hidden('avatar',null,['class'=>'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                {!! Form::label('contact_no','Contact Number', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('contact_no',null,['class'=>'form-control']) !!}
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