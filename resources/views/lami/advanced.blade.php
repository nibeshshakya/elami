<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/marital/web/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 12:35:26 GMT -->
<head>
    <title>elami.com | Search </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.msin.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
                                <li><<a href="{{route('logout')}}">Logout</a></li>
                                {{--<li><a href="">Logout</a></li>--}}
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
                            <li><a href="{{ route('list') }}">Home</a></li>
                            <li><a href="{{ route('advancedsearch') }}">AdvanceSearch</a></li>
                            <li><a href="{{route('successstory')}}">SuccessStory</a></li>
                            {{--<li class="last"><a href="{{ route('contacts') }}">Contacts</a></li>--}}
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
        <ul>
            <br>
            <a href="index-2.html"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page">Advance Search</li>
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
    <form method="post" action="{{route('advancequery')}}">
        <div class="form_but1">
            <label class="col-sm-5 control-lable1">gender : </label>
            <div class="col-sm-7 form_radios">
                <div align="">
                    <select name="sex" class="form-control">
                        <option value="">* Select Gender</option>
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
            <label class="col-sm-5 control-lable1" for="age">Age : </label>
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
            <label class="col-sm-5 control-lable1" for="sex">surname : </label>
            <div class="col-sm-7 form_radios">
                <div class="select-block1">
                    <input class="form-control has-dark-background" name=surname id="surname" placeholder="surname" type="text">
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>



        {{--<div class="form_but1">--}}
            {{--<label class="col-sm-5 control-lable1" for="religion">religion : </label>--}}
            {{--<div class="col-sm-7 form_radios">--}}
                {{--<div class="select-block1">--}}
                    {{--<div align="">--}}
                        {{--<select name="religion" class="form-control">--}}
                            {{--<option value="">* Select religion</option>--}}
                            {{--<option value="hinduism">Hinduism</option>--}}
                            {{--<option value="buddhism">Buddhism</option>--}}
                            {{--<option value="christianity">Christianity</option>--}}
                            {{--<option value="muslim">Muslim</option>--}}

                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}


        {{--<div class="form_but1">--}}
            {{--<label class="col-sm-5 control-lable1" for="religion">address : </label>--}}
            {{--<div class="col-sm-7 form_radios">--}}
                {{--<div class="select-block1">--}}
                    {{--<input class="form-control has-dark-background" name='address' id="address" placeholder="address" type="text" >--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}




        {{--<div class="form_but1">--}}
            {{--<label class="col-sm-5 control-lable1" for="qualification">qualification : </label>--}}
            {{--<div class="col-sm-7 form_radios">--}}
                {{--<div class="select-block1">--}}
                    {{--<select name="religion" class="form-control">--}}
                        {{--<option value="">* Select your Qualification</option>--}}
                        {{--<option value="see">S.E.E</option>--}}
                        {{--<option value="slc">SLC</option>--}}
                        {{--<option value="graduate">Graduate</option>--}}
                        {{--<option value="diploma">Diploma</option>--}}
                        {{--<option value="phd">PhD</option>--}}

                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}


        {{--<div class="form_but1">--}}
            {{--<label class="col-sm-5 control-lable1" for="job">job : </label>--}}
            {{--<div class="col-sm-7 form_radios">--}}
                {{--<div class="select-block1">--}}
                    {{--<input class="form-control has-dark-background" name="jobtitle" id="job" placeholder="job" type="text" >--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}

        <div class="clearfix"> </div>

        {{--<div class="col-sm-7 form_radios">--}}
        <div class="input-group1">
            <input class="btn btn-primary" type="submit" value="Search">
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