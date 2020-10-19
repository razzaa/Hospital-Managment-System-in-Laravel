@extends('nurse.master')
@section('content')
<div id="displayrecord">

<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Nurse Name</th>
      <th scope="col">Ward Number</th>
      <th scope="col">Bed Number</th>
      <th scope="col">Admit Time</th>
      <th scope="col">Discharge Time</th>
      <th scope="col">Date of Creation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bedward as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->patient_name}}</td>
      <td>{{$data->doctor_name}}</td>
      <td>{{$data->nurse_name}}</td>
      <td>{{$data->ward_no}}</td>
      <td>{{$data->bed_no}}</td>
      <td>{{$data->start_time}}</td>
      <td>{{$data->end_time}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>
</body>
</html>
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