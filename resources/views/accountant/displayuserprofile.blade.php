@extends('accountant.master')
@section('masterfileaccountant')
<style>

    .details li {
      list-style: none;
    }
    li {
        margin-bottom:10px;
        
    }
</style>

<div class="container">
@foreach ($user as $da) 
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="/img/{{Auth::user()->avatar}}" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>{{Auth::user()->name}}</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{Auth::user()->email}}</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$da->contact_no}}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$da->address}}</p></li>
                            <!-- <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.razablog.com</p></a> -->
                          </ul>
                      </div>
                  </div>
                </div>
                </div>
                @endforeach
@endsection
