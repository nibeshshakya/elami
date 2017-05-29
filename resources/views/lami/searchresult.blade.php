
{{--@if(isset($users))--}}
    {{--@foreach($users as $userinfo)--}}
       {{--<table border="1">--}}
        {{--<tr>--}}

            {{--<td>{{ $userinfo->email }}</td>--}}
            {{--<td>{{ $userinfo->name }}</td>--}}
            {{--<td>{{ $userinfo->firstname }}</td>--}}
            {{--<td>{{ $userinfo->surname }}</td>--}}
            {{--<td>{{ $userinfo->age }}</td>--}}
            {{--<td>{{ $userinfo->sex }}</td>--}}
            {{--<td>{{ $userinfo->height }}</td>--}}


        {{--</tr>--}}
       {{--</table>--}}
    {{--@endforeach--}}
{{--@endif--}}



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/marital/web/viewed-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 12:35:24 GMT -->
<head>
    <title>elami.com/search_result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet'  />
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
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
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-30027142-1', 'w3layouts.com');
    ga('send', 'pageview');
</script>
<script async type='text/javascript' src='../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>
<style type='text/css'>  .adsense_fixed{position:fixed;bottom:-8px;width:100%;z-index:999999999999;}.adsense_content{width:720px;margin:0 auto;position:relative;background:#fff;}.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}.adsense_btn_info{left:26px;font-family:Georgia;font-style:italic}.adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;background:rgba(255,255,255,.9);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}.adsense_info_content:after{content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;clear:both}.adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_fh5co-team{color:#000;font-style:italic;}</style>
<script>

    $(function() {
        $('.adsense_btn_close').click(function() {
            $(this).closest('.adsense_fixed').css('display', 'none');
        });

        $('.adsense_btn_info').click(function() {
            if ($('.adsense_info_content').is(':visible')) {
                $('.adsense_info_content').css('display', 'none');
            } else {
                $('.adsense_info_content').css('display', 'block');
            }
        });

    });

</script>
<body>




<!-- ResponsiveW3layouts -->


</div>
</div>

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
                                <!--  <li><a href="index-2.html">Logout</a></li> -->
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
                <a href="index.html"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">Searched Results</li>
            </ul>
        </div>

        <div class="col-md-12 profile_left">
            <div class="col_4">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Matches Found</a></li>
                        <!-- <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Privacy Settings</a></li> -->
                    </ul>
                    @if(isset($errormsz))
                        <div class="well alert alert-danger">{{ $errormsz }}</div>
                    @endif

                    @if(isset($successmsz))
                        <div class="well alert alert-success">{{ $successmsz }}</div>
                    @endif


                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">


                            <div class="clearfix"> </div>

                            @if(isset($users))
                                @foreach($users as $userinfo)
                            <div class="jobs-item with-thumb">
                                <div class="thumb_top">
                                    <div class="thumb"><a href="jobs_single.html">
                                            {{--<img src="images/a5.jpg" class="img-responsive" alt="{{$userinfo->name}} {{$userinfo->surname}}"/>--}}
                                            <img class="img-thumbnail img-responsive" max height="200" max width="200" src="{{ asset('uploads/user/avatar/'.$userinfo->picture) }}") }}" >
                                        </a></div>
                                    <div class="jobs_right">
                                        <h6 class="title"><a href="view_profile.html">{{$userinfo->name}} {{$userinfo->surname}}</a></h6>
                                        <h6 class="title"><a href="view_profile.html">age:{{$userinfo->age}}</a></h6>
                                        <h6 class="title"><a href="view_profile.html">height:{{$userinfo->height}}</a></h6>
                                        {{--<a href="view_profile.html" class="read-more">view full profile</a></p>--}}
                                        @if (Auth::check())
                                            <a href="{{route('login')}}" class="read-more">view full profile</a></p><br>

                                         @endif
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                @endforeach
                                @endif

                                --
                            </div>




                            <div class="footer">
                                <div class="container">


                                    <div class="clearfix"> </div>
                                    <div class="copy">
                                        <p>Copyright © 2017 elami.com <a href="http://w3layouts.com/" target="_blank"></a> </p>
                                    </div>
                                </div>
                            </div>
</body>


</html>


