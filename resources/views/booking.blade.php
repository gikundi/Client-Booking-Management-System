
@extends('layouts.layout')

@section('content')  

<link rel="stylesheet" href="{{asset('css/skel-noscript.css')}}" />
<link rel="stylesheet" href="{{asset('css/alko_style.css')}}" />
<link rel="stylesheet" href="{{asset('css/nsoko_styles.css')}}" />
<link rel="stylesheet" href="{{asset('css/style-desktop.css')}}" />
<link id="base-style" href="{{asset('css/bootstrap-modal.css')}}"rel="stylesheet">
<link id="base-style" href="{{asset('js/bootstrap-modalmanager.js')}}"rel="stylesheet">
<link id="base-style" href="{{asset('js/bootstrap-modal.js')}}"rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/alko.js')}}"></script>
<script src="{{asset('js/config.js')}}"></script>
<script src="{{asset('js/skel.min.js')}}"></script>





<div class="text-center">
    <button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">View Demo</button>
</div>







<body onLoad="MM_preloadImages('images/adobe.png')">

    <!-- Nav -->
    <nav id="nav">
        <ul class="container">


            <li><a href="http://www.alkofilms.com">HOME</a></li>
            <li><a href="http://www.alkofilms.com">PORTFOLIO</a></li>

            <li><img src="images/nsoko.png"></li>

            <li><a href="http://www.alkofilms.com">ABOUT US</a></li>
            <li><a href="http://www.alkofilms.com">CONTACTS</a></li>
            <li><a href="#booknow">BOOK NOW</a></li>
        </ul>
    </nav>

    <!-- Home -->
    <div class="wrapper wrapper-style2">
        <article id="clothing">
            <header>

                <div id="background">
                    <div id="BOOKNOW"><a  href="#responsive" data-toggle="modal" ><img src="images/BOOKNOW.png"></a></div>
                    <div id="Rectangle1"><img src="images/Rectangle1.png"></div>
                    <div id="Layer4"><img src="images/Layer4.png"></div>
                    <div id="Layer3"><img src="images/Layer3.png"></div>
                    <div id="WEDDINGPACKAGE"><img src="images/WEDDINGPACKAGE.png"></div>
                    <div id="Rectangle2"><img src="images/Rectangle2.png"></div>
                    <div id="Rectangle3"><img src="images/Rectangle3.png"></div>
                    <div id="AllinonePackage"><img src="images/AllinonePackage.png"></div>
                    <div id="ThePackageaboveisfor"><img src="images/ThePackageaboveisfor.png"></div>
                    <div id="Rectangle4"><img src="images/Rectangle4.png"></div>
                    <div id="season"><img src="images/season.png"></div>


                </div>

            </header>


            </section>
    </div>


</div>
</div>


<footr>
    <p id="copyright" align="center"> 
        &copy;2016 Alkofilms. ALL Rights Reserved </p>
</footr>




</div>

</body>

<div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">

    <form action="{{route('customer.store')}}" method="post">



        {!! csrf_field() !!}

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Booking Details</h4>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Names:</label>
                            <input type="text" name="name"class="form-control" id="recipient-name">
                        </div>


                        <div class="form-group">
                            <label for="message-text" class="control-label"> Phone:</label>
                            <input type="text" name="phone" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="control-label"> Email:</label>
                            <input type="text"  name="email" class="form-control" id="recipient-name">
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="wedding_date">Wedding Date</label>
                            <div class="controls">
                                <input class="datepicker" for  name="wedding_date" format="yyyy-mm-dd" id="user_dob"  placeholder="yyyy-mm-dd" readonly="readonly" size="30" type="datetime">
                            </div>


                            <div class="form-group">
                                <label for="message-text" class="control-label"> Wedding Location:</label>
                                <input type="text"  name="wedding_location" class="form-control" id="recipient-name">
                            </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
</div>


<script>

    $(function () {
        $("#dob").datepicker();
    });
    $(function () {
        $("#dob2").datepicker();
    });

</script>





@endsection
