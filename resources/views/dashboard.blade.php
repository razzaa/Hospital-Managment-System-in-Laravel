@extends('master')
@section('masterfile')
<div class="container text-center">

    <div class="row">
        <div class="col-lg-12">
          
            <p >
            </br>
                <a href="{{url('admin_doctor_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa-user-md	 fa-5x"></i>
                    <br/><br/>
                  Doctor
                </a>
                <a href="{{url('admin_patient_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa-wheelchair		 fa-5x"></i>
                    <br/><br/>
                  Patient
                </a>
                <a href="{{url('admin_nurse_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa-plus-square		 fa-5x"></i>
                    <br/><br/>
                  Nurse
                </a>
                <a href="{{url('admin_appointment_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-calendar-check	 fa-5x"></i>
                    <br/><br/>
                  Appointment
                </a>
                <a href="{{url('admin_blood_bank')}}" class="btn btn-squared-default bg-dark">
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
            <a href="{{url('admin_accountant_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-money-bill-alt	 fa-5x"></i>
                    <br/><br/>
                  Accountant
                </a>
                <a href="{{url('admin_payment_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="far fa-credit-card	 fa-5x"></i>
                    <br/><br/>
                  Payment
                </a>
               
                <a href="{{url('admin_bedward_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-bed fa-5x"></i>
                    <br/><br/>
                  Bed Allotment
                </a>
                <a href="{{url('noticeboard')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa fa-columns	fa-5x"></i>
                    <br/><br/>
                  Notice Board
                </a>
                <a href="{{url('admin_invoice_show')}}" class="btn btn-squared-default bg-dark">
                <i class=" far fa-money-bill-alt 	fa-5x"></i>
                    <br/><br/>
                  Invoice
                </a>
                <a href="{{url('new_user_requests')}}" class="btn btn-squared-default bg-dark">
                <i class=" fa fa-plus 	fa-5x"></i>
                    <br/><br/>
                  Requests
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
            background-color:#154360;
            border: 3px solid white;
            font-weight: 800;
        }

    
</style>
@endsection
