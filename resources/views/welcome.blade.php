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
</header>


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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col col3"></div>
            </div>
        </div>
    </section>
</div>

<div id="signup">
    <!-- Section -->
    <form method="post" action="">
        <section class="wrapper style1">
            <div class="inner">
                <div class="flex flex-4">
                    <div class="col col1"></div>
                    <div class="col col2">
                        <h3>Sign Up!</h3>
                        <p>Create an account with us.</p>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col col3">
                        <br><br><br><br><br>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="contactno">Contact Number:</label>
                                <input type="text" class="form-control" name="contactno" required>
                            </div>
                            <label for="accountnumber">Bank Account Number:</label>
                            <input type="text" class="form-control" name="accountnumber" required>
                        </div>
                        <div class="form-group">
                            <label for="usertype">Account Type:</label>
                            <select class="form-control" type="text" name="usertype" required>
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

    </form>
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