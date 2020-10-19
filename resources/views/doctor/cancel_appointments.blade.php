@extends('doctor.doctor_sidebar')
@section('doctorsidebarfile')
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col"> Meetup Date</th>
      <th scope="col">Date of Creation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($appointment as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->patient_name}}</td>
      <td>{{$data->doctor_name}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
                      
    </tr>
   @endforeach
  </tbody>
</table>
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