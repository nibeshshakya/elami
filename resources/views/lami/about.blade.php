<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/marital/web/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 12:35:19 GMT -->
<head>
    <title>elami | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
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
                <li class="current-page">About</li>
            </ul>
        </div>
        <div class="about">
            <div class="col-md-6 about_left">
                <!-- <img src="images/a3.jpg" class="img-responsive" alt=""/> -->
                <video width="400" height="400" class="img-responsive" controls autoplay loop>
                    <source src="animation.mp4" type="video/mp4">
                    <source src="animation.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-6 about_right">
                <h1>About us</h1>
                <p>You believe in soulmates, so do we.
                    Connect with your perfect one here, on elami. elami Team is eager to help you find your partner at the earliest. Our customer care team will be pleased to assist you anytime you have a query. You can contact our customer care team in one of the following ways.</p>

            </div>
            <div class="clearfix"> </div>
        </div>
        <!---728x90--->
    </div>
</div>

<div class="about_bottom">
    <div class="col-md-12">
        <h3>Team</h3>
        <div class="col-md-3 about_grid1">
            <ul class="posts-grid our-team">
                <li class="list-item-1">
                    <div class="desc">
                        <h4>Anish Silakar</h4>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-3 about_grid1">
            <ul class="posts-grid our-team">
                <li class="list-item-1">
                    <div class="desc">
                        <h4>Jibindra Man Shakya</h4>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-3 about_grid1">
            <ul class="posts-grid our-team">
                <li class="list-item-1">
                    <div class="desc">
                        <h4>Nibesh Shakya</h4>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-3 about_grid1">
            <ul class="posts-grid our-team">
                <li class="list-item-1">
                    <div class="desc">
                        <h4>Nishant Nepali</h4>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-3 about_grid1">
            <ul class="posts-grid our-team">
                <li class="list-item-1">
                    <div class="desc">
                        <h4>Sujindra Maharjan</h4>
                    </div>
                </li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>


<div class="clearfix"> </div>
<div class="copy">
    <p>Copyright © 2017 elami.com <a href="http://w3layouts.com/" target="_blank"></a> </p>
</div>
</div>
</div>
</body>


</html>