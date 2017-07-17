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
        <li><a href="{{URL::to('/client')}}">Receive Payments</a></li>
    </ul>


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Receive Payments</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">

                <form action="{{route('client.store')}}" method="post">
                  
                    
                    
                    {!! csrf_field() !!}

                    <fieldset>


                        <div class="control-group">
                            <label class="control-label" for="appendedInput">Client Id</label>
                            <div class="controls">
                                <div class="input-append">


                                    <input id="appendedInput"  name="client_id" size="16" type="text">
                                </div>
                                <span class="help-inline"></span>
                            </div>
                            
                             <label class="control-label" for="appendedInput">Amount</label>
                             <div class="controls">
                                <div class="input-append">


                                    <input id="appendedInput"  name="amount" size="16" type="text"> <span class="add-on">.00</span>
                                </div>
                                <span class="help-inline"></span>
                            </div>
                            
                             
                            
								<label class="control-label" for="selectError">Mode of payment<label>
								<div class="controls">
                                                                    <select name="payment">
									<option value="cash">CASH</option>
                                                                        <option value="cash">MPESA</option>
									<option value="cash">BANK</option>
									
								  </select>
								</div>
							
                              
                             
                             
                             
                             
                             
                              <label class="control-label" for="appendedInput">Paid By</label>
                            <div class="controls">
                                <div class="input-append">


                                    <input id="appendedInput"  name="paid_by" size="16" type="text">
                                </div>
                                <span class="help-inline"></span>
                            </div>
                              
                              
                              
                  
                            
                        </div>    




                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Receive</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

</div>

@include('layouts.footer')

@endsection