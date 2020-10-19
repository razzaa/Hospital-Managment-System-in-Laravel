@extends('master')

@section('masterfile')
<div class="container">
                    <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Date of Creation</th>
                    <th>Profile</th>
                    </tr>
                    </thead>
                      @foreach($adhistory as $data)
                       <tr>
                       <td>{{ $data->id }}</td>
                       <td>{{ $data->name }}</td>
                       <td>{{ $data->email }}</td>
                       <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>@if($data->admin==0)<label>Not Verify</label>@endif
                            @if($data->admin==1)<label>Admin</label>@endif
                            @if($data->admin==2)<label>Doctor</label>@endif
                            @if($data->admin==3)<label>Patient</label>@endif
                            @if($data->admin==4)<label>Accountant</label>@endif
                            @if($data->admin==5)<label>Nurse</label>@endif
                          </td>
                        </tr>
                       @endforeach
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
