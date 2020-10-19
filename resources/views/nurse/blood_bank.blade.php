@extends('nurse.master')
@section('content')
<table  class="table table-bordered table-hover">
                  <thead class="thead-light">
                    <tr>
                    <th>Blood Id</th>
                    <th>Blood Group</th>
                    <th>Date of Creation</th>
                    </thead>
                    <tbody>
                    @foreach ($blood_data as $data)
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->blood_group}}</td>
                    <td>{{$data->created_at->diffForHumans()}}</td>
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