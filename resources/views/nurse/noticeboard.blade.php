@extends('nurse.master')
@section('content')
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Notice</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($notice as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->title}}</td>
      <td>{{$data->notice}}</td>
      <td>{{$data->date}}</td>
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