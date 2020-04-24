@extends('layouts.app-backend')

@section('content')


    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(/backend/img/login-bg/login-bg-11.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Alpha</b> Dotcom</h4>
                    <p>
                        ALPHA DOTCOM is an innovative and total ICT solutions provider offering value added services
                        and products for both individuals and companies/organisations
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> <b>Alpha</b> Dotcom
                        <small>Innovative and total ICT solutions provider</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in-alt"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->



                <div class="login-content">

                                <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
                                @csrf

                                <div class="form-group row">
                                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>


                                <div class="form-group row">
                                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="checkbox checkbox-css m-b-30">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>

                                        </div>

                                <div class="login-buttons">
                                        <button type="submit" class="btn btn-success btn-block btn-lg">
                                            {{ __('Login') }}
                                        </button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>

                            </form>
                    <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                        Not a member yet? Click <a href="#">here</a> to register.
                    </div>
                    <a class="btn btn-link" href="#">Forgot Your Password?</a>
                     <br>
                    <hr />

                    <p class="pull-right" ><a href="{{('/')}}" class="btn btn-primary">Back to Main website</a> </p>

                    <br>
                    <hr />
                    <p class="text-center text-grey-darker mb-0">
                        &copy; Alpha Dotcom All Right Reserved 2019
                    </p>

                </div>

            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->






    </div>
    <!-- end page container -->
@endsection
