@extends('master')
@section('masterfile')
<!-- Add new record -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        {!! Form::model($noticeboard,array('route'=>['noticeboard.update',$noticeboard->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            </div>
                                <div class="form-group row">
                                {!! Form::label('title','Title', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('notice','Notice', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-6">
                                    {!! Form::text('notice',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                {!! Form::label('date','Date', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                                <div class="col-md-6">
                                {!! Form::date('date',null,['class'=>'form-control']) !!}
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
                            {!!Form::close()!!}
                        </div>
            </div>
        </div>
</main>
@endsection