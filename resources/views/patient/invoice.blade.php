@extends('patient.patient_sidebar')
@section('patientsidebarfile')
<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Charges</th>
      <th scope="col"> Miscellaneous</th>
      <th scope="col"> Bed Charges</th>
      <th scope="col"> Ward Charges</th>
      <th scope="col"> Others Charges</th>
      <th scope="col">Date of Creation</th>
      <th scope="col"> Invoice</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
  @foreach($invoice as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->patient_name}}</td>
      <td>{{$data->doctor_charges}}</td>
      <td>{{$data->miscellaneous}}</td>
      <td>{{$data->bed_charges}}</td>
      <td>{{$data->ward_charges}}</td>
      <td>{{$data->others_charges}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
      <td><a href="{{action('AdminInvoiceController@downloadPDF',$data->id)}}">Download</a></td>
      <td>{{$data->confirmation}}</td>
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