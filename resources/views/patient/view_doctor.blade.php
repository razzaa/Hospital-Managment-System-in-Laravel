@extends('patient.patient_sidebar')
@section('patientsidebarfile')
</br>
<table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Specilization</th>
                    <th>Contact Number</th>
                    <th>Fee</th>
                    <th>Date of Creation</th>
                    </tr>
                    </thead>
                    @foreach ($doctor_data as $data)
                    <tr>
                    <td>{{$data->id}}</td>
                    <td><img src="/img/{{$data->avatar}}" alt="profile_picture"  style="width:50px;height:50px; class="img-circle elevation-2"></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->department}}</td>
                    <td>{{$data->specilization}}</td>
                    <td>{{$data->phone_number}}</td>
                    <td>{{$data->servicecharge}}</td>
                    <td>{{$data->created_at->diffForHumans()}}</td>
                    </tr>
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