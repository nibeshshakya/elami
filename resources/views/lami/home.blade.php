
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/marital/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 12:35:19 GMT -->
<head>
    <title>elami.com</title>
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

<!-- ============================  Navigation Start =========================== -->
<div class="navbar navbar-inverse-blue navbar navbar-fixed-top" style="min-height: inherit;">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
    <div class="navbar-inner">
        <div class="container">
            <div class="navigation">
                <nav id="colorNav">
                    <ul>
                        <li class="green">
                            <a href="#" class="icon-home"></a>
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <!--  <li><a href="index-2.html">Logout</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <a class="brand" href="index-2.html"><img src="../images/logo_e3.png" alt="logo"></a>
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
                            <li class="last"><a href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div> <!-- end pull-right -->
            <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inner -->
</div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="banner" style="position:relative; height: 100vh">
    <div class="container" style="padding: 100px 0 0 0">
        <div class="banner_info col-sm-8">
            <h3>Millions of verified Members</h3>
            <!-- <a href="view_profile.html" class="hvr-shutter-out-horizontal">Create your Profile</a> -->
        </div>
        {{--<div class="col-sm-4 ">--}}
            {{--<form action="{{ route('login') }}" method="POST">--}}
                {{--<div class="form-item form-type-textfield form-item-name">--}}
                    {{--<label for="edit-name">email <span class="form-required" title="This field is required.">*</span></label>--}}
                    {{--<input type="text" id="email" name="email" value="" size="60" maxlength="60" class="form-text required">--}}
                {{--</div>--}}
                {{--<div class="form-item form-type-password form-item-pass">--}}
                    {{--<label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>--}}
                    {{--<input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required">--}}
                {{--</div>--}}
                {{--<div class="form-actions">--}}
                    {{--<input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">--}}


                    {{--<div class="form-actions">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}

        <div class="col-sm-4 ">
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


                    {{--<div class="form-actions">--}}
                </div>
                <div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </form>
        </div>

    </div>
    <div class="profile_search ">
        <div class=" wrap_1">
            <form method="post" action="{{route('searchquery')}}">
                {{--<div class="search_top">--}}
                <div class="inline-block">
                    <label class="gender_1">I am looking for :</label>
                    <div class="age_box1" style="max-width: 100%; display: inline-block;">
                        <select name="sex">
                            <option value="">* Select Gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                </div>

                {{--<div class="inline-block">--}}
                {{--<label class="gender_1">Age :</label>--}}
                {{--<div class="age_box1" style="max-width: 100%; display: inline-block;">--}}
                {{--<input class="form-control has-dark-background" name=age id="age" placeholder="age" type="text" required="">--}}
                {{--</div>--}}
                {{--</div>--}}


                <div class="inline-block">
                    <div class="age_box2" style="max-width: 320px;">
                        <label class="gender_1">Age :</label>
                        <input class="transparent" name="startage" placeholder="From:" style="width: 34%;" type="text" value="">&nbsp;
                        -
                        &nbsp;
                        <input class="transparent" name="endage" placeholder="To:" style="width: 34%;" type="text" value="">
                    </div>
                </div>



                <div class="inline-block">
                    <label class="gender_1">Surname :</label>
                    <div class="age_box1" style="max-width: 100%; display: inline-block;">
                        <input class="form-control has-dark-background" name="surname" id="surname" placeholder="surname" type="text" required="">
                    </div>
                </div>

                <div></div>
                <div class="submit inline-block">
                    <input id="submit-btn" class="hvr-wobble-vertical" type="submit" value="Find Matches">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>

</div>
<!---728x90--->
<div class="grid_1">
    <div class="container">
        <h1>Featured Profiles</h1>
        <div class="heart-divider">
            <span class="grey-line"></span>
            <i class="fa fa-heart pink-heart"></i>
            <i class="fa fa-heart grey-heart"></i>
            <span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
            <li><div class="col_1"><a href="view_profile.html">
                        <img src="../images/1.jpg" alt="" height="10px" width="10px" class="hover-animation image-zoom-in img-responsive"/>
                        <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                            <div class="center-middle">About Him</div>
                        </div>
                        <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian, Australia<br>Corporate</h3></a></div>
            </li>
            <li><div class="col_1"><a href="view_profile.html">
                        <img src="../images/2.jpg" alt="" class="hover-animation image-zoom-in img-responsive"/>
                        <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                            <div class="center-middle">About Her</div>
                        </div>
                        <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian, Australia<br>Corporate</h3></a></div>
            </li>
            <li><div class="col_1"><a href="view_profile.html">
                        <img src="../images/3.jpg" alt="" class="hover-animation image-zoom-in img-responsive"/>
                        <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                            <div class="center-middle">About Him</div>
                        </div>
                        <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian, Australia<br>Corporate</h3></a></div>
            </li>
            <li><div class="col_1"><a href="view_profile.html">
                        <img src="images/4.jpg" alt="" class="hover-animation image-zoom-in img-responsive"/>
                        <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                            <div class="center-middle">About Her</div>
                        </div>
                        <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian, Australia<br>Corporate</h3></a></div>
            </li>
            <li><div class="col_1"><a href="view_profile.html">
                        <img src="images/5.jpg" alt="" class="hover-animation image-zoom-in img-responsive"/>
                        <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                            <div class="center-middle">About Him</div>
                        </div>
                        <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian, Australia<br>Corporate</h3></a></div>
            </li>
            <li><div class="col_1"><a href="view_profile.html">
                        <img src="images/6.jpg" alt="" class="hover-animation image-zoom-in img-responsive"/>
                        <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                            <div class="center-middle">About Her</div>
                        </div>
                        <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Christian, Australia<br>Corporate</h3></a></div>
            </li>
        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 6,
                    animationSpeed: 1000,
                    autoPlay:false,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
    </div>
</div>
<!---728x90--->
<div class="grid_2">
    <div class="container">
        <h2>Success Stories</h2>
        <div class="heart-divider">
            <span class="grey-line"></span>
            <i class="fa fa-heart pink-heart"></i>
            <i class="fa fa-heart grey-heart"></i>
            <span class="grey-line"></span>
        </div>
        <div class="row_1">
            <div class="col-md-8 suceess_story">
                <ul>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/7.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/8.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/9.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/10.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/11.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/12.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="suceess_story-date">
                            <span class="entry-1">Dec 20, 2015</span>
                        </div>
                        <div class="suceess_story-content-container">
                            <figure class="suceess_story-content-featured-image">
                                <img width="75" height="75" src="images/13.jpg" class="img-responsive" alt=""/>
                            </figure>
                            <div class="suceess_story-content-info">
                                <h4><a href="#">Lorem & Ipsum</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer">
            <div class="container">


                <div class="clearfix"> </div>
                <div class="copy">
                    <p>Copyright © 2017 elami.com <a href="http://w3layouts.com/" target="_blank"></a> </p>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>