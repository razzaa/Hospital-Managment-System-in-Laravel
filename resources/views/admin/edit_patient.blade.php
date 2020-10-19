@extends('master')
@section('masterfile')
<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        {!! Form::model($admin_patient_show,array('route'=>['admin_patient_show.update',$admin_patient_show->id], 'method'=>'PUT')) !!}
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
                                {!! Form::label('address','Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('address',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('city','City', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('city',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('contact_no','Contact Number', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('contact_no',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Martial Status</label>
                                <div class="col-md-6">
                                <input type="radio" name="martial_status"  value="single">
                                <label for="" >Single</label>
                                <input type="radio" name="martial_status" value="married">
                                <label  for="" >Married</label>
                                </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('religion','Religion', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('religion',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Gender:</label>
                                <div class="col-md-6">
                                <input type="radio" name="gender"  value="male">
                                <label for="" >Male</label>
                                <input type="radio" name="gender" value="female">
                                <label  for="" >Female</label>
                                </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('father_husband_name','Father/Husband Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('father_husband_name',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                {!! Form::label('cnic','CNIC', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('cnic',null,['class'=>'form-control']) !!}
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Department</label>
                                <div class="col-md-6">
                                <select name="department" id="" class="form-control" >
                                    <option value="0" selected disabled>Select Department</option>
                                    <option value="ali">Ali</option>
                                    <option value="raza">Raza</option>
                                    <option value="muhammad">Muhammad</option>
                                  <select>
                                  </div>
                                  </div>                  -->
                                  <div class="form-group row">
                                <!-- {!! Form::label('password','Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!} -->
                                    <div class="col-md-6">
                                    {!! Form::hidden('password',null,['class'=>'form-control', 'hide' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('birth_year','Date Of Birth', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                <div class="col-md-6">
                                {!! Form::date('birth_year',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('birth_year'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('birth_year') }}</strong>
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
                            {!!Form::close()!!}
                        </div>
            </div>
        </div>
</main>
@endsection