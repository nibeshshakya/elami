
<!DOCTYPE HTML>
<html>


<head>
    <title>Detailed Profile | View_profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
                                <li><a href="../index-2.html">Logout</a></li>
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
                            <li><a href="{{route('list')}}">Home</a></li>


                            <li><a href="{{route('advancedsearch')}}">AdvancedSearch</a></li>
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
<form method="post" action="{{route('insertinfo')}}">

<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.html"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">Add Information</li>
            </ul>
        </div>
        <div class="profile">
            <div class="col_12">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Fill All the Feilds</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="basic_1">
                                <h3>Social Status</h3>
                                <div class="col-md-6 basic_1-left">
                                    <table class="table_working_hours">
                                        <tbody>

                                        <tr class="opened">
                                            <td class="day_label">Mother Tongue:</td>
                                            <td class="day_value"><input type="text" name="mothertongue" size="62"></td>
                                        </tr>

                                        <tr class="opened">
                                            <td class="day_label">Religion:</td>
                                            <td class="day_value"><input type="text" name="religion" size="62"></td>
                                        </tr>

                                        {{--<tr class="opened">--}}
                                            {{--<td class="day_label">Caste :</td>--}}
                                            {{--<td class="day_value"><input type="text" name="caste" size="15"></td>--}}
                                        {{--</tr>--}}

                                        {{--<tr class="opened">--}}
                                            {{--<td class="day_label">Intercaste :</td>--}}
                                            {{--<td class="day_value closed"><span>--}}
                                                    {{--<input type="radio" name="intercaste" value="Yes">Yes--}}
{{--                                                    <input type="radio" value="intercaste" value="No" checked>No--}}

                                                {{--</span></td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="basic_1 basic_2">
                                <h3>Education & Career</h3>
                                <div class="col-md-6 basic_1-left">
                                    <table class="table_working_hours">
                                        <tbody>
                                        <tr class="opened">
                                            <td class="day_label">Education   :</td>
                                            <td class="day_value"><select name="edutitle" class="form-control">
                                                    <option value="">* Select your Qualification</option>
                                                    <option value="see">S.E.E</option>
                                                    <option value="slc">SLC</option>
                                                    <option value="graduate">Graduate</option>
                                                    <option value="diploma">Diploma</option>
                                                    <option value="phd">PhD</option>

                                                </select></td>
                                        </tr>
                                        <tr class="opened">
                                            <td class="day_label">Job Details:</td>
                                            <td class="day_value"><input type="text" name="jobtitle" size="62"></td>
                                        </tr>
                                        <tr class="opened">
                                            <td class="day_label">Salary :</td>
                                            <td class="day_value"><input type="text" name="salary" size="62"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <br>
                        {{--<div class="basic_1">--}}
                            {{--<h3>Social Status</h3>--}}
                            {{--<div class="col-md-6 basic_1-left">--}}
                                {{--<table class="table_working_hours">--}}
                                    {{--<tbody>--}}

                                    {{--<tr class="opened">--}}
                                        {{--<td class="day_label">Education   :</td>--}}
                                        {{--<td class="day_value"><input type="text" name="edutitle" size="15"></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr class="opened">--}}
                                        {{--<td class="day_label">Job Details :</td>--}}
                                        {{--<td class="day_value"><input type="text" name="jobtitle" size="15"></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr class="opened">--}}
                                        {{--<td class="day_label">Gender :</td>--}}
                                        {{--<td class="day_value"><input type="text" name="gender" size="15"></td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" class="btn btn-danger" name="submit" value="Submit">
                    </div>
                    <div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


            <div class="footer">

                <div class="copy">
                    <p>Copyright © 2017 elami.com <a href="http://w3layouts.com/" target="_blank"></a> </p>
                </div>
            </div>
        </div>
</body>
</html>