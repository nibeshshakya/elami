

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>elami | Landing Page</title>

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

                <div class="sidebar-wrapper">
            <div class="logo">

                <img src="images/logo_e3.png" alt="logo">

            </div>

            <ul class="nav">
{{--{{ dd($picture) }}--}}
                <center><img src="{{ asset('uploads/user/avatar/'.$picture[0]->picture) }}" alt="profile" class="img-circle"  width="200" height="200"></center>
                <span class="profile-username" >




                                        <center>

                                            {{ Auth::user()->email }}<br></center>


                                        </span>

                <li>
                    @if(Auth::check())
                        <a href="{{ route('viewdetail', ['id' => Auth::user()->id ]) }}">View Profile</a>
                    @endif
                </li>
                <li>
                    @if(Auth::check())
                        <a href="{{ route('viewdetail', ['id' => Auth::user()->id ]) }}">View Detail</a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('editprofile') }}">

                        <p>Edit Profile</p>
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
                                    <li><a href="{{ route('list') }}">Home</a></li>
                                    {{--<li><a href="{{ route('about') }}">About</a></li>--}}
                                    <li><a href="{{ route('advancedsearch') }}">AdvanceSearch</a></li>
                                    <li><a href="{{route('successstory')}}">SuccessStory</a></li>
                                    {{--<li class="last"><a href="{{ route('contact') }}">Contacts</a></li>--}}

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div> <!-- end pull-right -->
                    <div class="clearfix"> </div>
                </div> <!-- end container -->
            </div> <!-- end navbar-inner -->
        </div> <!-- end navbar-inverse-blue -->
        <!-- ============================  Navigation End ============================ -->




        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">






                            <div class="card">
                            <div class="header">
                                <h4 class="title">Suggestion</h4>
                            </div>
                                @if(isset($userinfos))
                                    @foreach($userinfos as $userinfo)


                                    <div class="col-md-3" style="height:200px;width:200px;">
                                <img class="img-thumbnail img-responsive" max-height="200" max-width="200" src="{{ asset('uploads/user/avatar/'.$userinfo->picture)  }}" style="width:100%;background-size:cover;" >
                                <div class="footer">

                                    <center>Name: {{ $userinfo->firstname}}
                                        {{ $userinfo->surname}} | Age:{{ $userinfo->age }}<br>
                                        Height:{{ $userinfo->height }} | Address:{{ $userinfo->address }}<br>

                                   <a href="{{route('sendemail',['id'=>$userinfo->user_id]) }}" class="btn btn-block btn-primary">Interested </a>
                                    </center>
                                    {{--<a href="{{ route('viewUserProfile', ['id' => $userinfo->user_id]) }}" class="read-more">view full profile</a></p>--}}
                                </div>
                            </div>
                                    @endforeach
                                @endif


                                <br>
                                <br>


                        </div>

                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
<center>
                @if(isset($userinfos))
                {{  $userinfos->links() }}
                @endif

</center>




<br>
<br>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Services</h4>
                    </div>

                    <div class="col-md-3">
                        <img src="images/service1.jpg" width="200" height="200">
                        <div class="footer">

                            <center>abc banquet<br>
                                Location: naya bazar<br></center>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/service2.jpg" width="200" height="200">
                        <div class="footer">

                            <center>xyz banquet<br>
                                Location: sitapaila<br></center>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <img src="images/service3.jpg" width="200" height="200">
                        <div class="footer">

                            <center>rty banquet<br>
                                Location: kalimati<br></center>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/service4.jpg" width="200" height="200">
                        <div class="footer">

                            <center>fgh banquet<br>
                                Location: thamel<br></center>

                        </div>
                    </div>

                </div>
            </div>
        </div>








        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    2017 elami.com
                </p>
            </div>
        </footer>

    </div>
</div>
</div>
</div>


</body>


</html>














