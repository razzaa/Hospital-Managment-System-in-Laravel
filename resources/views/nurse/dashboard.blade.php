@extends('nurse.master')
@section('content')
<div class="container text-center">

    <div class="row">
        <div class="col-lg-12">
          
            <p >
            </br>
                <a href="{{url('nurse_doctor_view')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa-user-md	 fa-5x"></i>
                    <br/><br/>
                  Doctor
                </a>
                <a href="{{url('nurse_patient_view')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa-wheelchair		 fa-5x"></i>
                    <br/><br/>
                  Patient
                </a>
            
              
                <a href="{{url('nurse_blood_bank_view')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-tint	 fa-5x"></i>
                    <br/><br/>
                  Blood Bank
                </a>
                
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
           
            <p>
            
               
                <a href="{{url('nurse_noticeboard_view')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa fa-columns	 fa-5x"></i>
                    <br/><br/>
                  Notice Board
                </a>
                <a href="{{url('nurse_bedward_view')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-bed	 fa-5x"></i>
                    <br/><br/>
                  Bedward
                </a>
               
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