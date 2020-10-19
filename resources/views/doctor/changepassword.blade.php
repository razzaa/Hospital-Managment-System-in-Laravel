@extends('doctor.doctor_sidebar')
@section('doctorsidebarfile')
<div class="container" style="background:white;">
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@if(session('error'))
 <div class="alert alert-danger" role="alert">
 {{session('error')}}
 </div>
 @endif
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

                    <form action="" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="current_password"><strong>Current Password:</strong></label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>

                    <div class="form-group">
                    <label for="password"><strong>New Password:</strong></label>
                    <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                    <label for="new_password_confirmation"><strong>Confirm New Password:</strong></label>
                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                    </div>
                    <button class="btn btn-primary" type="submit">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
