        <header class="">

            <div class="top-header-container d-none d-lg-block">

                <nav class="top-header navbar-expand-md pt-3 pb-3">

                    <div class="container d-flex">

                        @if (!Auth::check())
                        <button 
                         type="button" 
                         class="mr-2 ml-auto btn btn-outline-orange" data-toggle="modal"
                         data-target="#loginModal"
                        >Login</button>
                        <button type="button" class="btn badge-warning text-white bg-orange">Subscribe</button>
                        @else
                        <button type="button" class="mr-2 ml-auto btn bbadge-warning text-white bg-orange">Download Extension</button>
                        @endif



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
                            <li class="d-md-none">
                                <button type="button" class="mr-2 ml-auto btn btn-outline-orange">Login</button>
                                <button type="button" class="btn badge-warning text-white">Subscribe</button>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="active">Home</a></li>


                            <li aria-haspopup="true"><a href="#">Features <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="#">Close More Sales </a></li>
                                    <li aria-haspopup="true"><a href="#">Easy To Use</a></li>
                                    <li aria-haspopup="true"><a href="#">Get Personal</a></li>
                                    <li aria-haspopup="true"><a href="#">Nurturing Your Leads</a></li>
                                    <li aria-haspopup="true"><a href="#">Reply Tracking</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="#">Submenu item 1</a></li>
                                            <li aria-haspopup="true"><a href="#">Submenu item 2</a></li>
                                            <li aria-haspopup="true"><a href="#">Submenu item 3</a></li>
                                    
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li aria-haspopup="true"><a href="#">Compatibility <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="#">Gmail </a></li>
                                    <li aria-haspopup="true"><a href="#">Outlook</a></li>
                                    <li aria-haspopup="true"><a href="#">Yahoo Mail</a></li>
                                    <li aria-haspopup="true"><a href="#">Android</a></li>
                                    <li aria-haspopup="true"><a href="#">Apple Mail</a></li>
                                    <li aria-haspopup="true"><a href="#">Thunderbird</a></li>
                                </ul>
                            </li>

                            <li aria-haspopup="true"><a href="#">Blog<i class="fas fa-angle-down"></i></a>

                                <div class="wsmegamenu clearfix">
                                    <div class="container">
                                        <div class="row">

                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list" id="blog-list-1">
                                               
                                            </ul>

                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list" id="blog-list-2">
                                            </ul>

                                             <ul class="col-lg-4 col-md-12 col-xs-12 link-list" id="blog-list-3">
                                            </ul>

                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li aria-haspopup="true"><a href="#">About us</a></li>

                            <li aria-haspopup="true"><a href="#">Contact </a></li>

                            @if (Auth::check())
                            <li aria-haspopup="true"><a href="{{route('logout')}}">Logout </a></li>
                            @endif

                        </ul>

                    </nav>

                    <!--Menu HTML Code-->

                </div>

            </div>

        </header>