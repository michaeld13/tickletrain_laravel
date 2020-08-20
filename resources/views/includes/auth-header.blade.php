        <header class="">

            <div class="top-header-container d-none d-lg-block">

                <nav class="top-header navbar-expand-md pt-3 pb-3">

                    <div class="container d-flex">
                        <button type="button" class="mr-2 ml-auto btn bbadge-warning text-white bg-orange">Download Extension</button>
                    </div>

                </nav>
            </div>

            <!-- Mobile Header -->

            <div class="wsmobileheader clearfix ">
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                <img src="{{asset('public/images/logo.png')}}" class="img-fluid mobile-logo mt-1">
                <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
            </div>

            <!-- Mobile Header -->

            <div class="wsmainfull clearfix  main-nav">

                <div class="wsmainwp clearfix d-flex">

                    <div class="desktoplogo"><a href="#"><img src="{{asset('public/images/logo.png')}}" class="img-fluid"></a></div>

                    <!--Main Menu HTML Code-->
                    <nav class="wsmenu clearfix ml-auto">
                        <ul class="wsmenu-list">

                            <li aria-haspopup="true"><a href="{{route('dashboard')}}" class="active">Dashboard</a></li>

                            <li aria-haspopup="true"><a href="{{route('campaigns.index')}}" >Campaigns</a></li>

                            <li aria-haspopup="true"><a href="#" >Tickles</a></li>

                            <li aria-haspopup="true"><a href="#" >Contacts</a></li>

                            <li aria-haspopup="true"><a href="#">Account <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="#">Profile</a></li>
                                    <li aria-haspopup="true"><a href="#">SMTP Settings</a></li>
                                    <li aria-haspopup="true"><a href="#">My Plan</a></li>
                                    <li aria-haspopup="true"><a href="#">Billing Details</a></li>
                                </ul>
                            </li>

                            <li aria-haspopup="true"><a href="{{route('logout')}}">Sign Out </a></li>
                          

                        </ul>

                    </nav>

                    <!--Menu HTML Code-->

                </div>

            </div>

        </header>