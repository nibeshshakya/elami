<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>elami | View Details</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dash-assets/css/bootstrap.min.css') }}" rel="stylesheet" />



    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('dash-assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>




    <link href="{{ asset('dash-assets/css/style3.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dash-assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash-assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('dash-assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('dash-assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="{{ asset('dash-assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="gray">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">

                <img src="{{asset('/images/logo_e3.png')}}" alt="logo">
                {{--<img src="{{asset('../images/1.jpg')}}" alt="profile" class="img-circle"  width="200" height="200">--}}
                <div class="day_value closed"><span><img class="img-thumbnail img-responsive" width="100px" height="100px" src="{{ asset('uploads/user/avatar/'.$profiledata->picture) }}" />
                    </span>
                </div>


                <span class="profile-username" >
                     @if($profiledata)
                                            <center>{{ $profiledata->name }}<br></center>

                      @endif
                </span>

            </div>

            <ul class="nav">
               {{-- <li>
                    <a href="profile.html">
                        <p>View Profile</p>
                    </a>
                </li>--}}

                <li>
                    <a href="{{route('editprofile')}}">

                        <p>Edit Profile</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p>Delete Account</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}">
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->


        <!-- ============================  Navigation Start =========================== -->
        <div class="navbar navbar-inverse-blue navbar">
            <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
            <div class="navbar-inner">
                <div class="container-fluid">
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
                                    {{--<li><a href="{{route('about')}}">About</a></li>--}}
                                    <li><a href="{{route('advancedsearch')}}">AdvanceSearch</a></li>
                                    <li><a href="{{route('successstory')}}">SuccessStory</a></li>
                                    {{--<li class="last"><a href="contact1.html">Contacts</a></li>--}}

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
                        <a href=""><i class="fa fa-home home_1"></i></a>
                        <span class="divider">&nbsp;|&nbsp;</span>
                        <li class="current-page">View Details</li>
                    </ul>
                </div>
                <div class="profile">
                    <div class="col_12">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div class="basic_1">
                                        <h3>Profile Information</h3>
                                        <div class="col-md-12 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                @if($profiledata)
                                                    <tbody>
                                                    <tr class="opened_1">
                                                        <td class="day_label">Name :</td>
                                                        <td class="day_value">{{ $profiledata->name }}</td>
                                                    </tr>
                                                    {{--<tr class="opened">--}}
                                                        {{--<td class="day_label">DOB :</td>--}}
                                                        {{--<td class="day_value">{{ $profiledata->dob }}</td>--}}
                                                    {{--</tr>--}}
                                                    <tr class="opened">
                                                        <td class="day_label">Surname:</td>
                                                        <td class="day_value">{{ $profiledata->surname }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Email:</td>
                                                        <td class="day_value">{{ $profiledata->email }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Height :</td>
                                                        <td class="day_value">{{ $profiledata->height }}</td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Sex:</td>
                                                        <td class="day_value closed"><span>{{ $profiledata->sex }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day_label">Image</td>
                                                        <td class="day_value closed"><span><img class="img-thumbnail img-responsive" width="100px" height="100px" src="{{ asset('uploads/user/avatar/'.$profiledata->picture) }}" /></span></td>
                                                    </tr>
                                                    </tbody>
                                                    @endif
                                                    </tbody>

                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="basic_1">
                                        <h3>Religious / Social Status</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                @if($socialdata)
                                                <tr class="opened">
                                                    <td class="day_label">religion:</td>
                                                    <td class="day_value">{{ $socialdata->religion }}</td>
                                                </tr>

                                                {{--<tr class="opened">--}}
                                                    {{--<td class="day_label">Caste :</td>--}}
                                                    {{--<td class="day_value">Bhramin</td>--}}
                                                {{--</tr>--}}
                                                <tr class="opened">
                                                    <td class="day_label">mothertongue:</td>
                                                    <td class="day_value">{{ $socialdata->mothertongue }}</td>
                                                </tr>

                                                <tr class="opened">
                                                    <td class="day_label">Intercaste :</td>
                                                    <td class="day_value closed"><span>Ok</span></td>
                                                </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="basic_1 basic_2">
                                        <h3>Education & Career</h3>
                                        <div class="col-md-8 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                {{--<tr class="opened">--}}
                                                    {{--<td class="day_label">Education   :</td>--}}
                                                    {{--<td class="day_value">Engineering</td>--}}
                                                {{--</tr>--}}


                                                @if($carrerdata)
                                                <tr class="opened">
                                                    <td class="day_label">jobtitle:</td>
                                                    <td class="day_value">{{ $carrerdata->jobtitle }}</td>
                                                </tr>

                                                <tr class="opened">
                                                    <td class="day_label">qualification:</td>
                                                    <td class="day_value">{{ $carrerdata->edutitle }}</td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">salary:</td>
                                                    <td class="day_value">{{ $carrerdata->salary }}</td>
                                                </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>


        <div class="footer">
            <div class="copy">
                <p>Copyright © 2017 elami.com <a href="http://w3layouts.com/" target="_blank"></a> </p>
            </div>
        </div>
    </div>
</body>


</html>
