
<!DOCTYPE HTML>
<html>

<head>
    <title>elami.com/successstory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/js/bootstrap.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!----font-Awesome----->
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
                                <!-- <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li> -->
                                <li><<a href="{{route('logout')}}">Logout</a></li>
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
                            <li><a href="{{ route('list') }}">Home</a></li>
                            <li><a href="{{ route('advancedsearch') }}">AdvanceSearch</a></li>
                            <li><a href="{{route('successstory')}}">SuccessStory</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div> <!-- end pull-right -->
            <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inner -->
</div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<!---728x90--->
</div>
</div>

@if(isset($message))
    <div class="well alert alert-danger">{{ $message }}</div>
@endif

<div class="about_middle">
    <div class="container">
        <h2>Share Success Story</h2>
        <form id="contact-form" class="contact-form" method="post" action="{{route("insertsuccess")}}">
            <fieldset>
                <input type="text" class="text" placeholder="" name="name" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                <input type="text" class="text" placeholder="" name="phone" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
                <input type="text" class="text" placeholder="" name="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <textarea value="Success Story" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Success Story';}">Success Story</textarea>
                {{--<input type="file" name="picture" accept="image/*">--}}
                <input type="file" name="picture" id="picture" onchange="showMyImage(this)">

                <input name="submit" type="submit" id="submit" value="Share">
                <div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </fieldset>
        </form>
        <!---728x90--->
    </div>
</div>

<div class="footer">

    <div class="copy">
        <p>Copyright © 2017 elami.com </p>
    </div>
</div>
</div>
</body>
</html>