<!-- header-start -->
<header>
    <div class="header-area ">
        <!--            <div class="header-top_area">-->
        <!--                <div class="container">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-xl-6 col-md-6 ">-->
        <!--                            <div class="social_media_links">-->
        <!--                                <a href="#">-->
        <!--                                    <i class="fa fa-linkedin"></i>-->
        <!--                                </a>-->
        <!--                                <a href="#">-->
        <!--                                    <i class="fa fa-facebook"></i>-->
        <!--                                </a>-->
        <!--                                <a href="#">-->
        <!--                                    <i class="fa fa-google-plus"></i>-->
        <!--                                </a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-xl-6 col-md-6">-->
        <!--                            <div class="short_contact_list">-->
        <!--                                <ul>-->
        <!--                                    <li><a href="#"> <i class="fa fa-envelope"></i> info@docmed.com</a></li>-->
        <!--                                    <li><a href="#"> <i class="fa fa-phone"></i> 160160</a></li>-->
        <!--                                </ul>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{url('/')}}/index">
                                <!--                                    <img src="img/logo.png" alt="">-->
                                <h1>SHOW.TV</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{url('/')}}/index">home</a></li>
                                    <li><a href="{{url('/')}}/seriesRandomly">Series</a></li>
                                    <!--                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>-->
                                    <!--                                            <ul class="submenu">-->
                                    <!--                                                <li><a href="episode.blade.php">blog</a></li>-->
                                    <!--                                                <li><a href="single-episode.blade.php">single-blog</a></li>-->
                                    <!--                                            </ul>-->
                                    <!--                                        </li>-->
                                    <!--                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>-->
                                    <!--                                            <ul class="submenu">-->
                                    <!--                                                <li><a href="elements.html">elements</a></li>-->
                                    <!--                                                <li><a href="about.html">about</a></li>-->
                                    <!--                                            </ul>-->
                                    <!--                                        </li>-->
                                    <li>
                                        <form class="form-inline mr-auto">
                                            <div class="md-form my-0">
                                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                <i class="fa fa-search ml-3" aria-hidden="true"></i>
                                            </div>
                                        </form>
                                    </li>
                                    <!--                                        <li><a href="contact.html">Contact</a></li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>

                    @if(Session::has('userid'))

                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="{{url('/')}}/logout">logout</a>
                                </div>
                            </div>
                        </div>

                    @else
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#loginForm">Login</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#registerForm">Register</a>
                                </div>
                            </div>
                        </div>

                    @endif



                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
