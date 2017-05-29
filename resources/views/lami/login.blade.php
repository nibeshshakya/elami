<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/marital/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 12:35:19 GMT -->
<head>
    <title>elami.com/login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!----font-Awesome----->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
</head>
<body>

<body>



<!-- ============================  Navigation Start =========================== -->
<div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
    <div class="navbar-inner navbar-inner_1">
        <div class="container">
            <div class="navigation">
                <nav id="colorNav">
                    <ul>
                        <li class="green">
                            <a href="#" class="icon-home"></a>
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <!-- <li><a href="index-2.html">Logout</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <a class="brand" href="{{ route('home') }}"><img src="../images/logo_e3.png" alt="logo"></a>
            <div class="pull-right">
                <nav class="navbar nav_bottom" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('search') }}">Search</a></li>
                            <li class="last"><a href="{{ route('contacts') }}">Contacts</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div> <!-- end pull-right -->
            <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inner -->
</div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index-2.html"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">Login</li>
            </ul>
        </div>
        <!---728x90--->





        @if(isset($errormsz))
            <div class="well alert alert-danger">{{ $errormsz }}</div>
        @endif




        {{--@if(isset($successmsz))--}}
            {{--<div class="well alert alert-success">{{ $successmsz }}</div>--}}
        {{--@endif--}}


        <div class="services">
            <div class="col-sm-6 login_left">
                <form action="{{ route('login') }}" method="POST">
                    <div class="form-item form-type-textfield form-item-name">
                        <label for="edit-name">email <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="email" name="email" value="" size="60" maxlength="60" class="form-text required">
                    </div>
                    <div class="form-item form-type-password form-item-pass">
                        <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                        <input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required">
                    </div>
                    <div class="form-actions">
                        <input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
                    </div>
                <div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
        <!---728x90--->
    </div>
</div>

</body>

</html>