<!DOCTYPE HTML>
<head>
    <title>Find my FUNDS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

<header id="header" class="alt">
    <div class="logo"><img src="../../images/FindMyFundslogo1.png" height="40" width="65"></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href='{{ url('/home') }}'>Home</a></li>
        <li><a href='{{ url('/ideas') }}'>Ideas</a></li>
        <li><a href='{{ url('/funding') }}'>Funding</a></li>
        <li><a href='{{ url('/welcome') }}'>Sign Out</a></li>
    </ul>
</nav>

<section id="banner2">
    <div class="inner">
        <header>
            <h1>Welcome to Find my Funds!</h1>
            <p>Find my funds aims to allow start up companies
                to find investors by posting their ideas in the website.</p>
        </header>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="copyright">
        <p>&copy; Find my Funds. All rights reserved.</p>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>