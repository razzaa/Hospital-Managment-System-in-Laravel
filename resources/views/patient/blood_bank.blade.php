@extends('patient.patient_sidebar')
@section('patientsidebarfile')
</br>
<table  class="table table-bordered table-hover">
                  <thead class="thead-light">
                    <tr>
                    <th>#</th>
                    <th>Blood Group</th>
                    <th>Date of Creation</th>
                    <th>Date of Updation</th>
                    </thead>
                    <tbody>
                    @foreach ($blood_data as $data)
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->blood_group}}</td>
                    <td>{{$data->created_at->diffForHumans()}}</td>
                    <td>{{$data->updated_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                    </tbody>
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