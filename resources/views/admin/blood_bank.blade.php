@extends('master')
@section('masterfile')
@if(session('message'))
 <div class="alert alert-success" role="alert">
 {{session('message')}}
 </div>
 @endif
 @if(session('messagedelete'))
 <div class="alert alert-warning" role="alert">
 {{session('messagedelete')}}
 </div>
 @endif
<a href="{{route('admin_blood_bank.create')}}" class="btn btn-outline-success" class="pull-right" >
Add New</a><br></div>
<div class="container">
<div class="d-flex justify-content-center">
<table  class="table table-bordered table-hover">
</br><div class="float-right">
                  <thead class="thead-light">
                    <tr>
                    <th>Blood Id</th>
                    <th>Blood Group</th>
                    <th>Date of Creation</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ($blood_data as $data)
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->blood_group}}</td>
                    <td>{{$data->created_at->diffForHumans()}}</td>
                    <td>
                        {!! Form::open(array('route'=>['admin_blood_bank.destroy',$data->id],'method'=>'DELETE')) !!}
                        {!! Form::button('',['type'=>'submit','class'=>'fas fa-trash-alt btn btn-danger']) !!}
                        {!! Form::close() !!}
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                      </table>
                      </div>
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