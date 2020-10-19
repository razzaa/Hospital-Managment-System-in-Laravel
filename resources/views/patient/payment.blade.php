@extends('patient.patient_sidebar')
@section('patientsidebarfile')
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col"> Amount</th>
      <th scope="col"> Invoice</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payment as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->patient_name}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->invoice}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection