{{--<form action="{{ route('searchquery') }}" method="post">--}}
    {{--<div class="container">--}}


            {{--<h1>i ma looking for</h1>--}}

            {{--<div class="form-group row">--}}
                {{--<label for="username" class="col-sm-2 col-form-label"> <b>username</b></label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" class="form-control" id="username" name="username" placeholder="username">--}}
                {{--</div>--}}
                {{--<label for="sex" class="col-sm-2 col-form-label"> <b>sex</b></label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" class="form-control" id="sex" name="sex" placeholder="sex">--}}
                {{--</div>--}}
                {{--<label for="age" class="col-sm-2 col-form-label"> <b>age</b></label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" class="form-control" id="age" name="age" placeholder="age">--}}
                {{--</div>--}}

        {{--<label for="surname" class="col-sm-2 col-form-label"> <b>surname</b></label>--}}
        {{--<div class="col-sm-10">--}}
            {{--<input type="text" class="form-control" id="surname" name="surname" placeholder="surname">--}}
        {{--</div>--}}

            {{--</div>--}}
        {{--<div class="form-group row">--}}
            {{--<div class="offset-sm-2 col-sm-10">--}}
                {{--<button type="submit" class="btn btn-primary">Search</button>--}}
            {{--</div>--}}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</form>--}}





<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <script type="text/javascript">
        function AlertIt() {
            var answer = confirm ("Please login to continue.")
            if (answer)
                window.location="{{ route('login') }}"
        }
    </script>
</head>
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
<div class="container">
    <div class="breadcrumb1">
        <ul><br>
            <a href="index-2.html"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page">Regular Search</li>
        </ul>
    </div>
    <!--<script type="text/javascript">
     $(function () {
      $('#btnRadio').click(function () {
           var checkedradio = $('[name="gr"]:radio:checked').val();
           $("#sel").html("Selected Value: " + checkedradio);
       });
     });
    </script>-->
    <form method="post" action="{{route('searchquery')}}">
        <div class="form_but1">
            <label class="col-sm-2 control-lable1">sex : </label>
            <div class="col-sm-7 form_radios">
                <div align="">
                    <select name="sex" class="form-control">
                        <option value="male">male</option>
                        <option value="female">female</option>

                    </select>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>

        <!--   <div class="form_but1">
            <label class="col-sm-5 control-lable1" for="sex">Marital Status : </label>
            <div class="col-sm-7 form_radios">
                <input type="checkbox" class="radio_1" /> Single &nbsp;&nbsp;
                <input type="checkbox" class="radio_1" checked="checked" /> Divorced &nbsp;&nbsp;
                <input type="checkbox" class="radio_1" value="Cheese" /> Widowed &nbsp;&nbsp;
                <input type="checkbox" class="radio_1" value="Cheese" /> Separated &nbsp;&nbsp;
                <input type="checkbox" class="radio_1" value="Cheese" /> Any
            </div>
            <div class="clearfix"> </div>
          </div> -->

        <div class="form_but1">
            <label class="col-sm-2 control-lable1" for="age">Age : </label>
            <div class="col-sm-4 form_radios">
                <div class="select-block1">
                    <input class="transparent" name="startage" placeholder="From:" style="width: 34%;" type="text" value="">&nbsp;
                    -
                    &nbsp;
                    <input class="transparent" name="endage" placeholder="To:" style="width: 34%;" type="text" value="">
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>



        <div class="clearfix"> </div>


        <div class="form_but1">
            <label class="col-sm-2 control-lable1" for="sex">surname : </label>
            <div class="col-sm-7 form_radios">
                <div class="select-block1">
                    <input class="form-control has-dark-background" name=surname id="surname" placeholder="surname" type="text" required="">
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>


        {{--<div class="col-sm-7 form_radios">--}}
            <div class="input-group1">
                <input type="submit" value="Search">
            </div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>
</div>

<div class="clearfix"> </div>
<div class="copy">
    <p>Copyright © 2017 elami.com<a href="http://w3layouts.com/" target="_blank"></a> </p>
</div>
</div>
</div>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- FlexSlider -->
</body>


</html>