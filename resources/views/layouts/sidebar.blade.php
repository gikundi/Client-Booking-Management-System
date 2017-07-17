<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{URL::to('/home')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>


                    <li>
                        <a class="dropmenu" href="#"<i class="icon-envelope"></i><span class="hidden-tablet">Customer Booking</span><span class="label label-important"></span></a>
                        <ul>


                            <li><a class="submenu" href="{{URL::to('/client')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> View</span></a></li>
                            <li><a class="submenu" href="{{URL::to('client.invoice')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Statement</span></a></li>

                            <!--                            
<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                            <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>-->
                        </ul>	
                    </li>


                    <li>
                        <a class="dropmenu" href="#"<i class="icon-folder-open"></i><span class="hidden-tablet">Reports</span><span class="label label-important"></span></a>
                        <ul>


                            <li><a class="submenu" href="{{URL::to('/reports')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Payments</span></a></li>
                            

                            <!--                            
<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                            <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>-->
                        </ul>	
                    </li>           
  <!--
                                        <li><a href="{{URL::to('/client')}}"><i class="icon-envelope"></i><span class="hidden-tablet">Customer Booking</span></a></li>-->




                </ul>
            </div>
        </div>