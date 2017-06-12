<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/marital/web/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 12:35:19 GMT -->
<head>
    <title>elami.com/register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
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
    <script>
        function showMyImage(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img=document.getElementById("thumbnil");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
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
                                <li><a href="index-2.html">Logout</a></li>
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
                <li class="current-page">Basic Registration Form</li>
            </ul>
        </div>
        <!---728x90--->
        <div class="services">
            {{--<div class="col-sm-6 login_left">--}}
                <form action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">

                    <div class="col-sm-6 login_left">
                    <div class="form-group">

                        <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" size="60" maxlength="60" class="form-text required">
                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('name')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-name" name="firstname" value="{{ old('firstname') }}" size="60" maxlength="60" class="form-text required">
                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('firstname')}}
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="edit-name">Middle Name </label>
                        <input type="text" id="edit-name" name="middlename" value="{{ old('middlename') }}" size="60" maxlength="60" class="form-text required">

                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('middlename')}}
                            </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-name" name="surname" value="{{ old('surname') }}" size="60" maxlength="60" class="form-text required">
                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('surname')}}
                            </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                        <input type="password" id="edit-pass" name="password" value="{{ old('password') }}" size="60" maxlength="128" class="form-text required">

                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('password')}}
                            </span>
                        @endif

                    </div>






                        <div class="form-group">
                        <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
                        <input type="email" id="email" name="email" value="" size="60" maxlength="60" class="form-text required">

                            {{--@if(isset($errors))--}}
                                {{--<span class="">--}}
                                    {{--{{$errors->register->first('email')}}--}}
                            {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    </div>
                    </div>

                        <div class="col-sm-6 login_right">

                            <div class="form-group">
                                <label for="edit-name">Contact <span class="form-required" title="This field is required.">*</span></label>
                                <input type="text" id="contact" name="contact" value="{{ old('contact') }}" size="60" maxlength="60" class="form-text required">
                                @if(isset($errors))
                                    <span class="">
                                    {{$errors->register->first('contact')}}
                            </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="edit-name">Address <span class="form-required" title="This field is required.">*</span></label>
                                <input type="text" id="address" name="address" value="{{ old('address') }}" size="60" maxlength="60" class="form-text required">
                                @if(isset($errors))
                                    <span class="">
                                    {{$errors->register->first('address')}}
                            </span>
                                @endif

                            </div>


                            <div class="form-group">
                        <label for="edit-name">Height <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="height" name="height" value="{{ old('height') }}" size="60" maxlength="60" class="form-text required">
                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('height')}}
                            </span>
                        @endif
                    </div>




                    <div class="form-group">
                        <label for="edit-name">Age <span class="form-required" title="This field is required.">*</span></label>
                        <input type="number" id="age" name="age" value="{{ old('age') }}" size="60" maxlength="60" class="form-text required">

                        @if(isset($errors))
                            <span class="">
                                    {{$errors->register->first('age')}}
                            </span>
                        @endif

                    </div>

                    {{--<div class="age_select">--}}
                        {{--<label for="edit-pass">DOB <span class="form-required" title="This field is required.">*</span></label>--}}
                        {{--<div class="age_grid">--}}
                            {{--<div class="col-sm-4 form_box">--}}
                                {{--<input type="date" id="dob" name="dob" value="{{ old('dob') }}" size="60" maxlength="60" class="form-text required">--}}
                                {{--@if(isset($errors))--}}
                                    {{--<span class="">--}}
                                    {{--{{$errors->register->first('dob')}}--}}
                            {{--</span>--}}
                                {{--@endif--}}


                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="clearfix"> </div>
                        {{--</div>--}}


                    {{--<div class="age_select">--}}
                        {{--<label for="edit-pass">Sex <span class="form-required" title="This field is required.">*</span></label>--}}
                        {{--<div class="age_grid">--}}
                            {{--<div class="col-sm-4 form_box">--}}
                                {{--<input type="text" id="sex" name="sex" value="" size="60" maxlength="60" class="form-text required">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}

                    <div align="">
                        <label for="edit-pass">Sex <span class="form-required" title="This field is required.">*</span></label>
                        <select name="sex" class="form-control">
                            <option value="male">male</option>
                            <option value="female">female</option>

                          </select>
                    </div>
            {{--<div class="form-group form-group1">--}}
                {{--<label class="col-sm-7 control-lable" for="sex">Upload Photo : </label>--}}
            {{--</div>--}}
            {{--<input type="file" name="picture" id="picture">--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
                            <br>
                        <label for="edit-pass">Upload Photo <span class="form-required" title="This field is required.">*</span></label>
                        <div class="age_grid">
                            <div class="col-sm-4 form_box">
                <input type="file" name="picture" id="picture" onchange="showMyImage(this)">
                <br/>
                <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
                            </div>
                            {{--</div>--}}
                            <div class="clearfix"> </div>
                        </div>



                <div class="clearfix"> </div>

<br>

                {{--<div class="form-actions">
                    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
                </div>--}}

                    </div>

                    <br>
                    <div class="col-sm-6 login_left">
                        <input type="submit" id="edit-submit" name="op" value="Submit" class="btn btn-primary">
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