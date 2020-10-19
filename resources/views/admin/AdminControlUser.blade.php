@extends('master')
@section('masterfile')
                    <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                    <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Date of Creation</th>
                    <th>Profile</th>
                    <th colspan="2">Options</th>
             
                    </tr>
                    </thead>
                      @foreach($adminurl as $data)
                      @if(Auth::user()->id!=$data->id)
                       <tr>
                       <td>{{ $data->id }}</td>
                       <td><img src="/img/{{$data->avatar}}" alt="profile_picture"  style="width:50px;height:50px; class="img-circle elevation-2"></td>
                       <td>{{ $data->name }}</td>
                       <td>{{ $data->email }}</td>
                       <td>{{ $data->created_at->diffForHumans() }}</td>
                       <td>{{ $data->admin }}</td>
                       <!-- <td>@if($data->admin==0)<label>Not Verify</label>@endif
                            @if($data->admin==1)<label>Admin</label>@endif
                            @if($data->admin==2)<label>Doctor</label>@endif
                            @if($data->admin==3)<label>Patient</label>@endif
                            @if($data->admin==4)<label>Accountant</label>@endif
                            @if($data->admin==5)<label>Nurse</label>@endif
                          </td> -->
                      
                       
                       <td>{{link_to_route('adminurl.edit','',[$data->id],['class'=>'fas fa-edit btn btn-success'])}}</td>
                       <td>
                        {!! Form::open(array('route'=>['adminurl.destroy',$data->id],'method'=>'DELETE')) !!}
                        {!! Form::button('',['type'=>'submit','class'=>'fas fa-trash-alt btn btn-danger']) !!}
                        {!! Form::close() !!}
                        </td>
                        </tr>
                        @endif
                       @endforeach
                      </table>
        
      
        <style>
                table,
                thead,
                tr,
                tbody,
                th,
                td {
                  text-align: center;
                }
          </style>
@endsection
