
@extends('layouts.layout')

@include('layouts.navbar')

@include('layouts.sidebar')
@section('content') 


<div id="content"  class="span10">

    <div id="non-printable">

        <ul class="breadcrumb">
            <li>
                <i class="icon-home" ></i>
                <a href="{{URL::to('/home')}}">Home</a> 
                <i class="icon-angle-right" ></i>
            </li>
            <li><a href="{{URL::to('/client')}}">Client Booking</a></li>
        </ul>

    </div>
    <div id="background">

        <img src="{{asset('img/alko_login.png')}} " >
        <div id="Layer0"><img src="{{asset('images/Layer0.png')}}"></div>
        <div id="Layer1"><img src="{{asset('images/Layer1.png')}}"></div>


        <table   id="tablepayments"  > 

            <thead>
                <tr>

                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payments)
                <tr>


                    <td id="td1">{{ $payments->created_at->format('Y-m-d')}}</td>
                    <td id ="td2">{{ $payments->paid_by }}</td>
                    <td id="td3">{{ $payments->mop}}</td>
                    <td id="td4">{{ $payments->amount}}</td>
                     <td id="td5">{{ $payments->cts}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>


        <div id="layer_150000">150000</div>
        <div id="layer_50000_0">{{$amount_paid}}</div>
        <div id="layer_00"></div>
        <div id="layer_100000">{{$amount_owned}}</div>
        <div id="layer_00">00</div>
        <div id="layer_03">00</div>
        <div id="layer_02">00</div>
       
        <div id="borders"><img src="{{asset('images/borders.png')}}"></div>
        <div id="SUBTOTAL"><img src="{{asset('images/SUBTOTAL.png')}}"></div>
        <div id="PAID"><img src="{{asset('images/PAID.png')}}"></div>
        <div id="OUTSTANDING"><img src="{{asset('images/OUTSTANDING.png')}}"></div>
        <div id="AMOUNT"><img src="{{asset('images/AMOUNT.png')}}"></div>
        <div id="KSHS"><img src="{{asset('images/KSHS.png')}}"></div>
        <div id="Cts"><img src="{{asset('images/Cts.png')}}"></div>

        <div id="PAIDBY"><img src="{{asset('images/PAIDBY.png')}}"></div>
        <div id="MODEOFPAYMENT"><img src="{{asset('images/MODEOFPAYMENT.png')}}"></div>
        <div id="receiptborder"><img src="{{asset('images/receiptborder.png')}}"></div>
        <div id="rings"><img src="{{asset('images/rings.png')}}"></div>
        <div id="couple"><img src="{{asset('images/couple.png')}}"></div>
        <div id="layer_2252015">{{$date}}</div>
        <div id="layer_1200">120{{$customer->id}}</div>
        <div id="Date"><img src="{{asset('images/Date.png')}}"></div>
        <div id="DATE"><img src="{{asset('images/Date2.png')}}"></div>
        <div id="ReceiptNo"><img src="{{asset('images/ReceiptNo.png')}}"></div>
        <div id="Receipt"><img src="{{asset('images/Receipt.png')}}"></div>
        <div id="contacts"><img src="{{asset('images/contacts.png')}}"></div>

        <div id="print">
            <div class="col-sm-10 pull-right hidden-480" > 
                <a onclick="print('background')">
                    <i class="ace-icon halflings-icon print"></i>
                </a>
            </div>
        </div>

        <div id="alkologo"><img src="{{asset('images/alkologo.png')}}"></div>
        <div id="CLIENT"><img src="{{asset('images/CLIENT.png')}}"></div>
        <div id="PHONE"><img src="{{asset('images/PHONE.png')}}"></div>
        <div id="email"><img src="{{asset('images/email.png')}}"></div>
        <div id="denisgikundi05gmailc">denisgikundi05@gmail.com</div>
        <div id="PACKAGE"><img src="{{asset('images/PACKAGE.png')}}"></div>
        <div id="VIDEOcopy">{{$customer->wedding_package}}</div>
        <div id="DenisGikundi">{{$customer->name}}</div>
        <div id="layer_0704118721">{{$customer->phone}}</div>




    </div>




</div>





@include('layouts.footer')


@endsection


