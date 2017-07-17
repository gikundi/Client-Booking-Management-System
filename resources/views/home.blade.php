@extends('layouts.layout')

@include('layouts.navbar')

@include('layouts.sidebar')
@section('content')  

<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>



    <div class="row-fluid">
        
         <a class="quick-button metro blue span2" href="{{URL::to('client')}}" >
                <i class="icon-group"></i>
                <p>Customer Booking</p>
                <span class="badge">{{$pend}}</span>
            </a>
      
       
    </div>	

    
</diV>


@include('layouts.footer')




@endsection