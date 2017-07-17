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
        <li><a href="{{URL::to('/client')}}">Customer Bookings</a></li>
    </ul>


    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Customer Booking</h2>
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
                        <a  href="{{URL::to('/exportexcel')}}"> Export to Excel &nbsp;
                            <i class="ace-icon halflings-icon file" ></i>
                        </a>
                    </div>

                    <tr>

                        <th>Client Id</th>                        
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Package</th>
                        <th>Wedding Date</th>
                        <th>Location</th>
<!--                            <th>Amount Paid</th>-->

                        <th>Actions</th

                    </tr>
                    </thead>   
                    <tbody>
                        @foreach($clientbooking as $clientbooking )

                        <tr>

                            <td>{{$clientbooking ->id}}</td>   
                            <td>{{$clientbooking ->name}}</td>   
                            <td class='center'>{{$clientbooking ->phone}}</td> 
                            <td class='center'>{{$clientbooking ->email}}</td>  
                            <td class='center'>{{$clientbooking ->wedding_package}}</td> 
                            <td class='center'>{{$clientbooking ->wedding_date}}</td> 
                            <td class='center'>{{$clientbooking ->wedding_location}}</td>   
<!--                            <td class='center'>{{$clientbooking ->amount_owned}}</td> -->

                            <td class="center">

                                <a class="btn btn-info" href="{{URL::to('client_edit',$clientbooking ->id)}}">
                                    <i class="halflings-icon white edit"></i>                                            
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('delete_customer_details',$clientbooking ->id)}}">
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

