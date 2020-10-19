@extends('patient.patient_sidebar')
@section('patientsidebarfile')
</br>
<table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                    <th>#</th>
                    <th>Doctor Name</th>
                    <th>Nurse Name</th>
                    <th>Ward Number</th>
                    <th>Bed Number</th>
                    <th>Admit Date</th>
                    <th> Discharge Date</th>
                    <th>Date of Creation</th>
                    </tr>
                    </thead>
                    @foreach ($bedward_data as $data)
                    <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->doctor_name}}</td>
                    <td>{{$data->nurse_name}}</td>
                    <td>{{$data->ward_no}}</td>
                    <td>{{$data->bed_no}}</td>
                    <td>{{$data->start_time}}</td>
                    <td>{{$data->end_time}}</td>
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