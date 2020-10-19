@extends('accountant.master')
@section('masterfileaccountant')
<div class="container">
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
 @if(session('message'))
 <div class="alert alert-success" role="alert">
 {{session('message')}}
 </div>
 @endif
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}'s Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($data as $da)
                    @if( $da->email== Auth::user()->email )
                    <form  action="{{route('accountant_updateprofile.edit', $da->id)}}" method="PUT">
                    @csrf
                    <div class="form-group">
                    <label for="name"><strong>Name:</strong></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                    <label for="email"><strong>Address:</strong></label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$da->address}}">
                    </div>
                    <div class="form-group">
                    <label for="email"><strong>Contact No:</strong></label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" value="{{$da->contact_no}}">
                    </div>
                    <button class="btn btn-primary" type="submit">Update Profile</button>
                    </form>

                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
