@extends('master')
@section('masterfile')
<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        {!! Form::model($admin_doctor_show,array('route'=>['admin_doctor_show.update',$admin_doctor_show->id], 'method'=>'PUT')) !!}
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
                                <label for="" class="col-md-4 col-form-label text-md-right">Gender:</label>
                                <div class="col-md-6">
                                <input type="radio" name="gender"  value="male">
                                <label for="" >Male</label>
                                <input type="radio" name="gender" value="female">
                                <label  for="" >Female</label>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Department</label>
                                <div class="col-md-6">
                                <select name="department" id="" class="form-control" >
                                    <option value="0" selected disabled>Select Department</option>
                                    <option value="Emergency department">Emergency department</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Intensive care unit">Intensive care unit</option>
                                    <option value="Gynaecology">Gynaecology</option>
                                  <select>
                                  </div>
                                  </div>
                                <div class="form-group row">
                                {!! Form::label('specilization','Specilization', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('specilization',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('servicecharge','Service Charge', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('servicecharge',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('permanent_address','Permanent Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('permanent_address',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                <!-- {!! Form::label('password','Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!} -->
                                    <div class="col-md-6">
                                    {!! Form::hidden('password','Password',null,['class'=>'form-control', 'hide' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('present_address','Present Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('present_address',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                <!-- {!! Form::label('avatar','Image', ['class' => 'col-md-4 col-form-label text-md-right']) !!} -->
                                    <div class="col-md-6">
                                    {!! Form::hidden('avatar',null,['class'=>'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('phone_number','Contact Number', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('phone_number',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('admin','Profile', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('admin',null,['class'=>'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('dob','Date Of Birth', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                <div class="col-md-6">
                                {!! Form::date('dob',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('dob'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                      @endif
                                      </div>
                               </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Add
                                        </button>
                                    </div>
                                    </br>
                                    <div>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                    </div>
                                </div>
                            {!!Form::close()!!}
                        </div>
            </div>
        </div>
</main>
@endsection