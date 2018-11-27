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
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                    </div>
                </div>
            </form>

            {{--<div class="social-auth-links text-center">--}}
                {{--<p>- OR -</p>--}}
                {{--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fab fa-facebook"></i> Sign in using Facebook</a>--}}
                {{--<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fab fa-google-plus"></i> Sign in using Google+</a>--}}
            {{--</div>--}}
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

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input id="user_name" type="text" placeholder="Username" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}" required autofocus>
                    <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('user_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('user_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">

                    <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" placeholder="Password repeat" class="form-control" name="password_confirmation" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <select class="form-control" name="register_reason">
                        <option value="" selected disabled>How did you hear about us?</option>
                        <option value="Discord">Discord Channel</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Friend">From a Friend</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Twitch">Twitch</option>
                    </select>
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
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>

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
            background-size: cover;
        }
    </style>

@endsection
