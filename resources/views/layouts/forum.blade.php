

<!DOCTYPE html5>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Student Forum</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>
    <header id="top">
        <div class="nav-wrap">
            <div class="logo">
                <a href="/" class="brand">
                    <h1><i class="fa fa-stack-overflow" aria-hidden="true"></i> Push&amp;Pop</h1>
                </a>
            </div>
            <div class="searchbox">
                <form method="post">
                    <input type="text" placeholder="Search here ..."><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </form>
            </div>
            <nav>
                <ul> 
                    <li><a href="/login" id="login">Log in <i id="arrow" class="fa fa-chevron-down" aria-hidden="true"></i></a</li>
                    <li><a href="/register">Register</a></li>
                </ul>
                <div id="login-wrap">
                    <form method="POST" action="#">
                        <input type="text" name="email" placeholder="Enter your email">
                        <input type="password" name="password" placeholder="Enter your password">
                        <input type="submit" value="Login" name="login">
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <div class="wrapper">
        @yield('main-content')
        @yield('sidebar')
    </div>
    <!-- Wrapper ends -->
    <div id="backtotop">
        <a href="#top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <footer class="footer-wrap">
        <p>Copyright 2016 Student Portal</p>
    </footer>

    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    
    <script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>