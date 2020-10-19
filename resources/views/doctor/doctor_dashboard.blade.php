@extends('doctor.doctor_sidebar')
@section('doctorsidebarfile')
<div class="container text-center">

    <div class="row">
        <div class="col-lg-12">
          
            <p >
            </br>
               
                <a href="{{url('doctor_pending_appointments')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-calendar-check	 fa-5x"></i>
                    <br/><br/>
                  Appointment
                </a>
                <a href="{{url('doctor_view_bloodbank')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-tint	 fa-5x"></i>
                    <br/><br/>
                  Blood Bank
                </a>
                <a href="{{url('doctor_view_badward')}}" class="btn btn-squared-default bg-dark">
                    <i class=" fas fa-bed	 fa-5x"></i>
                    <br/><br/>
                  Bed Ward
                </a>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
           
            <p>
         
            
                <a href="{{url('doctor_noticeboard')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa fa-columns	 fa-5x"></i>
                    <br/><br/>
                  Notice Board
                </a>
                <!-- <a href="#" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-cog	 fa-5x"></i>
                    <br/><br/>
                  Settings
                </a> -->
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          
            <p>
               
            <!-- <a href="#" class="btn btn-squared-default bg-dark">
                    <i class="fa fa-columns	 fa-5x"></i>
                    <br/><br/>
                  Notice Board
                </a>
            </p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          
            <p >
           
               
            </p>
        </div>
    </div>
</div>

<style>
    .btn-squared-default
    {
        margin:5px;
        width: 200px !important;
        height: 100px !important;
        font-size: 10px;
        text-decoration:bold;
        border-color: #A9CCE3;
    }

        .btn-squared-default:hover
        {
            border: 3px solid white;
            font-weight: 800;
        }

    
</style>
@endsection
