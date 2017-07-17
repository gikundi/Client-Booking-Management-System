<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Alko films </title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->


        <!-- start: CSS -->
        <link id="bootstrap-style" href="{{asset('css/bootstrap.min.css')}}"rel="stylesheet">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}" rel="stylesheet">
        <link id="base-style" href="{{asset('css/style.css')}}"rel="stylesheet">
    

       

        <link id="base-style" href="{{asset('css/invoice_styles.css')}}"rel="stylesheet">
        <link id="base-style" href="{{asset('css/print.css')}}"rel="stylesheet">
        
        <link id="base-style" href="{{asset('js/bootstrap-modal.js')}}"rel="stylesheet">
        <link id="base-style-responsive" href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />

        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    </head>

    <body>


        <script src="{{asset('js/sweetalert.min.js')}}"></script>
        <!-- Include this after the sweet alert js file -->
        @include('sweet::alert')

        @yield('content')



        <!-- start: JavaScript-->

       

        <script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-1.0.0.min.js')}}"></script>

        <script src="{{asset('js/jquery-ui-1.10.0.custom.min.js')}}"></script>

        <script src="{{asset('js/jquery.ui.touch-punch.js')}}"></script>

        <script src="{{asset('js/modernizr.js')}}"></script>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <script src="{{asset('js/jquery.cookie.js')}}"></script>

        <script src="{{asset('js/fullcalendar.min.js')}}"></script>

        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('js/excanvas.js')}}"></script>
        <script src="{{asset('js/jquery.flot.js')}}"></script>
        <script src="{{asset('js/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('js/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>

        <script src="{{asset('js/jquery.chosen.min.js')}}"></script>

        <script src="{{asset('js/jquery.uniform.min.js')}}"></script>

        <script src="{{asset('js/jquery.cleditor.min.js')}}"></script>

        <script src="{{asset('js/jquery.noty.js')}}"></script>

        <script src="{{asset('js/jquery.elfinder.min.js')}}"></script>

        <script src="{{asset('js/jquery.raty.min.js')}}"></script>

        <script src="{{asset('js/jquery.iphone.toggle.js')}}"></script>

        <script src="{{asset('js/jquery.uploadify-3.1.min.js')}}"></script>

        <script src="{{asset('js/jquery.gritter.min.js')}}"></script>

        <script src="{{asset('js/jquery.imagesloaded.js')}}"></script>

        <script src="{{asset('js/jquery.masonry.min.js')}}"></script>

        <script src="{{asset('js/jquery.knob.modified.js')}}"></script>

        <script src="{{asset('js/jquery.sparkline.min.js')}}"></script>

        <script src="{{asset('js/counter.js')}}"></script>

        <script src="{{asset('js/retina.js')}}"></script>

        <script src="{{asset('js/custom.js')}}"></script>

    </body>
</html>