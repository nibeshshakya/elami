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
    <style>
        .navbar{
            min-height:0;
        }
    </style>
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
                                {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                                {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                                <li><a href="{{ route('login') }}">Logout</a></li>
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
                            <li><a href="">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('advancedsearch') }}">Advanced Search</a></li>
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

<a href="" class="btn btn-primary"></a>
<hr>


{{--<div class="col-md-4">--}}
{{--</div>--}}


<div class="col-md-4">




<table class="table table-responsive table-bordered" border="1" bgcolor="" align="center">
    <thead>
    <tr>
        <th>s.no</th>
        <th>name</th>
        <th>firstname</th>
        <th>surname</th>
        <th>DOB</th>
        <th>email</th>
        <th>password</th>
        <th>height</th>
        <th>sex</th>
        <th>age</th>
        <th>image</th>
        <th>action</th>
        <th>address</th>
    </tr>
    </thead>




    <tbody>
    @if(isset($userinfos))
        @foreach($userinfos as $userinfo)
            <tr>
                <td>{{ $userinfo->sno }}</td>
                <td>{{ $userinfo->name }}</td>
                <td>{{ $userinfo->firstname }}</td>
                <td>{{ $userinfo->surname }}</td>

                <td>{{ $userinfo->DOB }}</td>
                <td>{{ $userinfo->email }}</td>
                <td>{{ $userinfo->password }}</td>
                <td>{{ $userinfo->height }}</td>
                <td>{{ $userinfo->sex }}</td>
                <td>{{ $userinfo->age }}</td>


                <td><img class="img-thumbnail img-responsive" width="100px" height="100px" src="{{ asset('uploads/user/avatar/'.$userinfo->picture) }}" ></td>
                <td><a href="" class="btn btn-primary">mail</a>
                </td>

                <td>{{ $userinfo->address }}</td>


            </tr>
        @endforeach
    @endif

    </tbody>
</table>

</div>
</body>

   {{--@if(isset($userinfos))--}}
    {{--{{  $userinfos->links() }}--}}
        {{--@endif--}}
{{--</div>--}}



{{--<div class="col-md-4">--}}
{{--</div>--}}
{{--</div>--}}
{{--</body>--}}
















{{--<!--Rotating card-->--}}

{{--@if(isset($userinfos))--}}
{{--@foreach($userinfos as $userinfo)--}}

{{--<div class="row">--}}
    {{--<div class="col-md-4">--}}


{{--<div class="card-wrapper">--}}
    {{--<div id="card-2" class="card-rotating effect__click">--}}

        {{--<!--Front Side-->--}}
        {{--<div class="face front card">--}}

            {{--<!-- Image-->--}}
            {{--<div class="card-up">--}}
                {{--<div class="view overlay hm-white-slight">--}}
                    {{--<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28110%29.jpg" class="img-fluid" alt="">--}}

                    {{--<img class="img-thumbnail img-responsive" width="100px" height="100px" src="{{ asset('uploads/user/avatar/'.$userinfo->picture) }}" >--}}
                    {{--<a>--}}
                        {{--<div class="mask waves-effect waves-light"></div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--/.Image-->--}}

            {{--<!--Content-->--}}
            {{--<div class="content">--}}
                {{--<a class="rotate-btn" data-card="card-2"><i class="fa fa-share-alt"></i></a>--}}
                {{--<h4>Card title</h4>--}}
                {{--<hr>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat tenetur odio suscipit non commodi vel eius veniam maxime.</p>--}}

                {{--<a class="link-text"><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>--}}
            {{--</div>--}}
            {{--<!--/.Content-->--}}

        {{--</div>--}}
        {{--<!--/.Front Side-->--}}

        {{--<!--Back Side-->--}}
        {{--<div class="face back">--}}

            {{--<!--Title-->--}}
            {{--<h4 class="card-title">Social shares <i class="fa fa-close rotate-btn" data-card="card-2"></i> </h4>--}}
            {{--<hr>--}}

            {{--<!--Social Icons-->--}}
            {{--<ul class="inline-ul">--}}
                {{--<li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>--}}
                {{--<li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>--}}
                {{--<li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>--}}
                {{--<li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>--}}
                {{--<li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>--}}
                {{--<li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>--}}
                {{--<li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>--}}
            {{--</ul>--}}

            {{--<h5>Join our community</h5>--}}
            {{--<hr>--}}

            {{--<!--Social Icons-->--}}
            {{--<ul class="inline-ul">--}}
                {{--<li><a class="btn btn-fb"><i class="fa fa-facebook"> </i></a></li>--}}
                {{--<li><a class="btn btn-tw"><i class="fa fa-twitter"> </i></a></li>--}}
                {{--<li><a class="btn btn-li"><i class="fa fa-linkedin"> </i></a></li>--}}
                {{--<li><a class="btn btn-ins"><i class="fa fa-instagram"> </i></a></li>--}}
            {{--</ul>--}}

        {{--</div>--}}
        {{--<!--/.Back Side-->--}}

    {{--</div>--}}
{{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--@endif--}}
<!--/.Rotating card-->