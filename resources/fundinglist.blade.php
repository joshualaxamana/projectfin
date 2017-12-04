<!DOCTYPE HTML>
<html>
<head>
    <title>Funding</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.html">Urban <span>by TEMPLATED</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href='{{url('/home')}}'>Home</a></li>
        <li><a href='{{url('/ideas')}}'>Ideas</a></li>
        <li><a href='{{url('/funding')}}'>Funding</a></li>
        <li><a href='{{url('/welcome')}}'>Sign Out</a></li>
    </ul>
</nav>

<!-- Main -->
<div id="main">
    <div id="main">

    @foreach($funding as $value)
        <!-- Section -->
            <section class="wrapper style1">
                <div class="inner">
                    <!-- 2 Columns -->
                    <div class="flex flex-2">
                        <div class="col col1">
                            {{--<div class="image round fit">--}}
                            {{--<a href="generic.html" class="link"><img src="images/pic01.jpg" alt="" /></a>--}}
                            {{--</div>--}}
                            <h3>{{$value -> $Title}}</h3>
                        </div>
                        <div class="col col2">
                            <p>{{$value -> description}}</p>
                            <a href="{{URL::to('fundinglist/'. $value -> id . '/funding')}}" class="button">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
    @endforeach
    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

</body>
</html>