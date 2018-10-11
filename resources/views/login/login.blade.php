<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{url('/backend')}}/"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    {{-- Bootstrap Core CSS --}}
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- animation CSS --}}
    <link href="css/animate.css" rel="stylesheet">
    {{-- Custom CSS --}}
    <link href="css/style.css" rel="stylesheet">
    {{-- color CSS --}}
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    {{--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--}}
</head>

<body>
    {{-- Preloader --}}
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form method="POST" class="form-horizontal form-material" id="loginform" action="">
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="email" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    @csrf
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Dont have an account? <a href="register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- jQuery --}}
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    {{-- Bootstrap Core JavaScript --}}
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    {{-- Menu Plugin JavaScript --}}
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

    {{--slimscroll JavaScript --}}
    <script src="js/jquery.slimscroll.js"></script>
    {{--Wave Effects --}}
    <script src="js/waves.js"></script>
    {{-- Custom Theme JavaScript --}}
    <script src="js/custom.min.js"></script>
    {{--Style Switcher --}}
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>