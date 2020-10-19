@extends('accountant.master')
@section('masterfileaccountant')
<div class="container text-center">

   
    <div class="row">
        <div class="col-lg-12">
           
            <p>
                <a href="{{url('accountant_invoice_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="far fa-money-bill-alt fa-5x"></i>
                    <br/><br/>
                  Invoice
                </a>
                <a href="{{url('admin_payment_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fa fa fa-columns	 fa-5x"></i>
                    <br/><br/>
                  Notice Board
                </a>
                <a href="{{url('admin_payment_show')}}" class="btn btn-squared-default bg-dark">
                    <i class="fas fa-credit-card	 fa-5x"></i>
                    <br/><br/>
                  Payment
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