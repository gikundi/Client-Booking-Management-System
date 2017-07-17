
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
            Customer Invoices
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                {{$customer->name}}
            </small>
        </h1>
    </div><!-- /.page-header -->
    <!-- PAGE CONTENT BEGINS -->

    <div class="">
        <table id=" " class="table table-striped table-bordered table-hover">

            <thead>
                <tr>

                    <th>Invoice No.</th>
                    <th>Amount Paid</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $page)
                <tr>

                    <td>{{ $page->id}}</td>
                    <td>{{$amount_paid}}</td>

                    <td>
                        <a type="submit" href="{{URL::to('client.invoice_print',$page->id)}}" class="btn btn-danger btn-mini">Print Invoices</a>
                        <a type="submit" href="#" class="btn btn-danger btn-mini">Clear</a>

                    </td>

                </tr>
                
                     @endforeach

            </tbody>
        </table>
    </div>
    <button onclick="javascript:history.back()">Back</button>

    @include('layouts.footer')

    @endsection
