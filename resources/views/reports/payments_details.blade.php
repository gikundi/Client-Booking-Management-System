@extends('layouts.layout')

@include('layouts.navbar')

@include('layouts.sidebar')
@section('content')  
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{URL::to('/home')}}">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{URL::to('/client')}}">Customer Payments</a></li>
    </ul>


    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span> Payments History for Customer  {{$client_name}}</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>

                    <div class="col-sm-10 pull-right hidden-480" >
                        <a  href="{{URL::to('/payment_history',$who)}}"> Export to Excel &nbsp;
                            <i class="ace-icon halflings-icon file" ></i>
                        </a>
                    </div>

                    <tr>

                        <th>Date</th>
                        <th>Paid By</th>
                        <th>Payment Mode</th>
                        <th>Amount</th>

<!--                            <th>Amount Paid</th>-->

                        <th>Actions</th

                    </tr>
                    </thead>   
                    <tbody>
                        @foreach($payments as $payments )

                        <tr>


                            <td>{{$payments ->created_at}}</td>   
                            <td class='center'>{{$payments->paid_by}}</td> 
                            <td class='center'>{{$payments ->mop}}</td>  
                            <td class='center'>{{$payments->amount}}</td> 


                            <td class="center">

                                <a class="btn btn-info" href="">
                                    <i class="halflings-icon white edit"></i>                                            
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>
                </table>            
            </div>

        </div>
    </div>
</div>


@include('layouts.footer')
@endsection

