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

<nav id="menu">
    <ul class="links">
        <li><a href='{{ url('welcome') }}'>Home</a></li>
        <li><a href='{{ url('ideas') }}'>Ideas</a></li>
        <li><a href='{{ url('funding') }}'>Funding</a></li>
    </ul>
</nav>

<section id="banner">
    <div class="inner">
        <header>
            <h1>Find my Funds</h1>
            <p>Find my funds aims to allow start up companies
                to find investors by posting their ideas in the website.</p>
        </header>
        <a href="#login" class="button big scrolly">Log In!</a>
        <a href="#signup" class="button big scrolly">Sign Up!</a>
    </div>
</section>

<div id="login">

    <!-- Section -->
    <section class="wrapper style2">
        <div class="inner">
            <!-- 2 Columns -->
            <div class="flex flex-3">
                <div class="col col1"></div>
                <div class="col col2">
                    <h3>Log In</h3>
                    <p>Already a member? Log in now to post ideas or fund an idea.</p>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" required>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-info" value="Login">
                    </div>
                </div>
                <div class="col col3"></div>
            </div>
        </div>
    </section>
</div>

<div id="signup">
    <!-- Section -->
    <section class="wrapper style1">
        <div class="inner">
            <div class="flex flex-4">
                <div class="col col1"></div>
                <div class="col col2">
                    <h3>Sign Up!</h3>
                    <p>Create an account with us.</p>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="fullname">Full Name:</label>
                            <input type="text" class="form-control" id="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" required>
                        </div>
                        <div class="form-group">
                            <label for="cnfrmpwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="cnfrmpwdpwd" required>
                        </div>
                    </div>
                </div>
                <div class="col col3">
                    <br><br><br><br><br>
                    <div class="form-group">
                        <label for="accounttype">Account Type:</label>
                            <select class="form-control" type="text" id="sel1" required>
                                <option>Start Up company</option>
                                <option>Funder</option>
                            </select>
                    </div>
                    <br>
                    <div class="col-lg-offset-1">
                    <input type="submit" class="btn btn-info" value="Sign Up" style="float: right;">
                    </div>
                </div>
                <div class="col col4"></div>
            </div>
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

</body>
</html>