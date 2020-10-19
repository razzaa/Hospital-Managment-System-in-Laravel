@extends('nurse.master')
@section('content')
<div class="container" style="background:white;">
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach

 @if(session('message'))
 <div class="alert alert-success" role="alert">
 {{session('message')}}
 </div>
 @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}'s Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="" method="post">
                    @csrf
                    <div class="form-group">
                    <input type="file" name="avatar" class="form-control">
                    <input type="hidden" class="form-control"  name="_token" value="{{csrf_token()}}">
                    </div>
                    <button class="btn btn-primary" type="submit">Upload Picture</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
