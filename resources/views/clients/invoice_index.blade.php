
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
        <li><a href="{{URL::to('/client')}}">Client Booking</a></li>
    </ul>




    <div class="page-header">
        <h1>
            Customers Invoices
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>

            </small>
        </h1>
    </div><!-- /.page-header -->
    <!-- PAGE CONTENT BEGINS -->
    <div class="">
        <table id="financials" class="table table-striped table-bordered table-hover">

            <thead>
                <tr>

                    <th>Name</th>
                    <th>Invoice No.</th>
                    <th>Package</th>
                    <th>Balance</th>
                     <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $page)
                <tr>
                    <td>{{ $page->client_name }}</td>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->wedding_package }}</td>
                    <td>{{ $page->amount_owned }}</td>
                    <td>
                        
                        
                        
                        <a  href="{{URL::to('client.invoice_read',$page->id)}}" class="btn btn-danger btn-mini">View Invoices</a>
                        <a  href="{{URL::to('client.add_payments')}}" class="btn btn-danger btn-mini">Receive Payments</a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>


@include('layouts.footer')


@endsection
