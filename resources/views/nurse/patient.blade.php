@extends('nurse.master')
@section('content')
<div id="displayrecord">
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact No</th>
      <th scope="col">DOB</th>
      <th scope="col">Date of Creation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pat_data as $data)
    <tr>
    <td>{{$data->id}}</td>
      <td><img src="/img/{{$data->avatar}}" alt="profile_picture"  style="width:50px;height:50px; class="img-circle elevation-2"></td>
      <td>{{$data->name}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->contact_no}}</td>
      <td>{{$data->birth_year}}</td>
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