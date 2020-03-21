<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SHOW.TV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css/responsive.css')}}">
</head>

<body>
@include('includes.navBar')

<div class="col-md-12 pl-5 pr-5">
    @if(Session::has('error'))
        <p class="alert alert-danger" style="margin-top: 20px;">{{ Session::get('error') }}</p>
    @endif

    @if(Session::has('success'))
        <p class="alert alert-success" style="margin-top: 20px;">{{ Session::get('success') }}</p>
    @endif
</div>




@yield('content')
<!-- footer start -->
{{--<footer class="footer">--}}
{{--    <div class="copy-right_text">--}}
{{--        <div class="container">--}}
{{--            <div class="footer_border"></div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <p class="copy_right text-center">--}}
{{--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
{{--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<!-- footer end  -->
<!-- link that opens popup -->

<!-- form itself end-->
<form method="post" action="{{url('/')}}/postLogin" id="loginForm" class="white-popup-block mfp-hide" style="text-align: center">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Login</h3>
{{--            <form action="#">--}}
                <div class="row" style="text-align: left; font-weight: bold">
                    <div class="col-xl-6">
                        <lapal>Email:</lapal>
                        <input type="email"  placeholder="Email" name="email" required>
                    </div>
                    <div class="col-xl-6">
                        <lapal>Password:</lapal>
                        <input type="password"  placeholder="Password" name="password" required>
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed-btn3">login</button>
                    </div>
                </div>
{{--            </form>--}}
        </div>
    </div>
</form>
<!-- form itself end -->

<form method="post" action="{{url('/')}}/postRegistration" id="registerForm" enctype="multipart/form-data" class="white-popup-block mfp-hide" style="text-align: center">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Register</h3>
{{--            <form action="#">--}}
                <div class="row" style="text-align: left; font-weight: bold">

                    <div class="col-xl-6">
                        <lapal>Name:</lapal>
                        <input type="text"  placeholder="Name" name="name" required>
                    </div>
                    <div class="col-xl-6">
                        <lapal>Email:</lapal>
                        <input type="email"  placeholder="Email" name="email" required>
                    </div>
                    <div class="col-xl-6">
                        <lapal>Password:</lapal>
                        <input type="password"  placeholder="Password" name="password" required>
                    </div>
                    <div class="col-xl-6">
                        <lapal>picture:</lapal>
                        <input type="file"  name="user_picture" required>
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed-btn3">Register</button>
                    </div>
                </div>
{{--            </form>--}}
        </div>
    </div>
</form>

<!-- JS here -->
<script src="{{URL::asset('app-assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/ajax-form.js')}}"></script>
<script src="{{URL::asset('app-assets/js/waypoints.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/scrollIt.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/wow.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/nice-select.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/plugins.js')}}"></script>
<script src="{{URL::asset('app-assets/js/gijgo.min.js')}}"></script>
<!--contact js-->
<script src="{{URL::asset('app-assets/js/contact.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.form.js')}}"></script>
<script src="{{URL::asset('app-assets/js/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('app-assets/js/mail-script.js')}}"></script>

<script src="{{URL::asset('app-assets/js/main.js')}}"></script>

@yield('script')

<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
</body>

</html>
