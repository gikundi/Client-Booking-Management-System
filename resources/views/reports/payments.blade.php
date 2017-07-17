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
        <li><a href="{{URL::to('/client')}}">Reports</a></li>
    </ul>


    <div class="row-fluid sortable">		
        <div class="box span12">


            <div class="box-content">

                <form action="{{route('reports.store')}}" method="post">


                    {!! csrf_field() !!}

                    <fieldset>
                        <label class="control-label" for="appendedInput">Client Id</label>
                        <div class="controls">
                            <div class="input-append">


                                <input id="appendedInput"  name="client_id" size="16" type="text">
                            </div>
                            <span class="help-inline"></span>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Search</button>

                        </div>
                    </fieldset>
                </form>

            </div>

        </div>


        @include('layouts.footer')
        @endsection

