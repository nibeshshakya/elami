<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">e-Lami</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li class="active"><a href="{{route('search')}}">search</a></li>
            <li class="active"><a href="{{route('addinfo')}}">add info</a></li>

            @if(\Auth::check())
            <li class="active"><a href="{{route('logout')}}">logout</a></li>


            {{--@elseif--}}
                {{--<li class="active"><a href="{{route('login')}}">login</a></li>--}}

            @endif
            {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{route('home')}}">add info <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="#">a</a></li>--}}
                    {{--<li><a href="#">b</a></li>--}}
                    {{--<li><a href="#">c</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li><a href="#">services</a></li>
            {{--<li><a href="#">search</a></li>--}}
            <li>  <input type="text" name="text" placeholder="search"> </li>
        </ul>
    </div>
</nav>



</body>
</html>
