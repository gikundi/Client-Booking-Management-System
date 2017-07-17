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
        <li><a href="{{URL::to('')}}">Customer Details</a></li>
    </ul>

      {!! Form::model($book,['method' => 'PATCH','route'=>['client.update',$book->id]]) !!}
      
       <div class="form-group">
           
         
           
        {!! Form::label('Id', 'Id:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    

    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
      
      
    <div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Wedding Package', 'Wedding Package:') !!}
        {!! Form::text('wedding_package',null,['class'=>'form-control']) !!}
    </div>
      
      
    <div class="form-group">
        {!! Form::label('Wedding Date', 'Wedding Date:') !!}
        {!! Form::text('wedding_date',null,['class'=>'form-control']) !!}
    </div>
      
     
       <div class="form-group">
        {!! Form::label('Location', 'Location:') !!}
        {!! Form::text('wedding_location',null,['class'=>'form-control']) !!}
    </div>
      
      
      
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop