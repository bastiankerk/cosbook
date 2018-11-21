@extends('layouts.app')

@section('content')
<title>Hello Streamers out there</title>

</head>
<body class="hold-transition login-page">


<div class="col-xs-12 network_name_wrapper" style="margin-bottom: 200px;">
    <div class="col-xs-12">
        <div class="widget-user-header bg-green" style="padding: 1px 25px 20px 45px;">
            <h1 style="margin-left: 0px;" class="widget-user-username">Wardrobe</h1>
            <h2 style="margin-left: 0px;" class="widget-user-desc">Why just play when you can cosplay?</h2>
        </div>
    </div>
</div>

<div class="col-xs-12">
    <div class="col-xs-12 col-lg-4">
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="../../index2.html" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option value="" selected disabled>How did you hear about us</option>
                        <option>Discord Channel</option>
                        <option>Facebook</option>
                        <option>From a Friend</option>
                        <option>Instagram</option>
                        <option>Twitch</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fab fa-facebook"></i> Sign in using Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fab fa-google-plus"></i> Sign in using Google+</a>
            </div>
            <a href="#">I forgot my password</a><br>
        </div>
    </div>
    <div class="col-xs-12 col-lg-4">
        <div class="box box-widget widget-user-2" style="min-height: 414px;">
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="/dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <h3 class="widget-user-username">Bastian Kerk</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="box-footer">
                <p style="padding: 0px 5px 0px 5px;">This Social Network is totally a open source development project. The project will be a social network for people who are any way connected with the cosplay scene.</p>
                <p style="padding: 0px 5px 0px 5px;">You could follow the process of the development like you want to.</p>

            </div>
            <div class="box-footer no-padding">

                <ul class="nav nav-stacked">
                    <li><a title="live develop sessions on twitch" target="_blank" href="https://www.twitch.tv/bastiankerk">Live Development on Twitch <i class="pull-right fa-2x fab fa-twitch"></i></a></li>
                    <li><a title="Feature Request via Discord Community" target="_blank" href="https://discord.gg/j23zt5">Request Features via Discord <i class="pull-right fa-2x fab fa-discord"></i></a></li>
                    <li><a title="Get in contact with out open source code" target="_blank" href="https://github.com/bastiankerk">Contribute via Github <i class="pull-right fa-2x fab fa-github"></i></a></li>
                    <li><a title="Meet the Father of the network on instagram" target="_blank" href="https://www.instagram.com/bastiankerk/">Follow Bastian on Instagram <i class="pull-right fa-2x fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-4">
        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="../../index.html" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa-xs fab fa-facebook"></i> Sign up using Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa-xs fab fa-google-plus"></i> Sign up using Google+</a>
            </div>

            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
    </div>
</div>

<div style="display: none">
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif
</div>
    <style>
        .box-widget .nav .fa-twitch {
            color: #6441a5;
        }
        .box-widget .nav .fa-discord {
            color: #7289da;
        }
        .box-widget .nav .fa-github {
            color: #000000;
        }
        .box-widget .nav .fa-instagram {
            color: #bc2a8d;
        }
        .login-page {
            background: url("/img/background.jpg") no-repeat;
            background-size: contain;
        }
    </style>

@endsection
