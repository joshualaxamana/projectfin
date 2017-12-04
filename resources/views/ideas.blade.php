<!DOCTYPE HTML>
<html>
<head>
    <title>Find my FUNDS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <div class="logo"><img src="../../images/FindMyFundslogo1.png" height="40" width="65"></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href='{{ url('/welcome') }}'>Home</a></li>
        <li><a href='{{ url('/ideas') }}'>Ideas</a></li>
        <li><a href='{{ url('/funding') }}'>Funding</a></li>
    </ul>
</nav>

<!-- Main -->
<div id="main">

    <!-- Section -->
    <section class="wrapper">
        <div class="inner">
                <header class="align-center">
                    <h1>IDEAS</h1>
                    <p>Post an idea that needs funding.</p>
                </header>
                <form>
                    <form action="form_handler.php" method="post">
                    <div class="flex flex-3">
                        <div class="col col1"></div>
                        <div class="col col2">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" required>
                            <br>
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description"></textarea>
                            <br>
                            <input type="submit" class="btn btn-info" value="Post">
                        </div>
                        <div class="col col3"></div>
                    </div>
                </form>
            </div>
    </section>
</div>

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
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>


</body>
</html>