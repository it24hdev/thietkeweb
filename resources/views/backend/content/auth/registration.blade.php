@extends('backend.layers.dashboard')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/backend/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/structure.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/auth.css') }}">
@endsection
@section('js')
    <script src="{{asset('library/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('library/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('js/backend/auth.js')}}"></script>
@endsection
@section('body')
    <div class="container-fluid login-one-container">
        <div class="p-30 h-100">
            <div class="row main-login-one h-100">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="login-one-start">
                        <h6 class="mt-2 text-primary text-center font-20">Sign Up</h6>
                        <p class="text-center text-muted mt-3 mb-3 font-14">Fill up and create an account</p>
                        <div class="login-one-inputs mt-5">
                            <input type="email" placeholder="Email"/>
                            <i class="las la-envelope"></i>
                        </div>
                        <div class="login-one-inputs mt-3">
                            <input type="password" placeholder="Password"/>
                            <i class="las la-lock"></i>
                        </div>
                        <div class="capt mt-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="captcha">
                                    <h2 type="text" id="mainCaptcha"></h2>
                                </div>
                                <a class="text-primary font-25 ml-3 pointer" title="Change Captcha">
                                    <i class="las la-sync-alt" id="refresh" onclick="Captcha();"></i>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-3">
                                <div class="login-one-inputs mr-3">
                                    <input type="text" id="txtInputCaptcha" placeholder="Enter Captcha"/>
                                    <i class="las la-robot"></i>
                                </div>
                                <input class="btn btn-sm btn-primary" id="Button1" type="button" value="Check" onclick="ValidCaptcha();"/>
                                <i class="lar la-check-circle captcha-check text-success-teal font-25 " id="checkMark"></i>
                            </div>
                        </div>
                        <div class="login-one-inputs mt-5 check">
                            <input class="inp-cbx" id="cbx" type="checkbox" style="display: none"/>
                            <label class="cbx" for="cbx"><span>
                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                  <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg></span><span class="font-13">I agree to the <a class="text-primary" href="pages_privacy_policy.html" target="_blank">terms and policies</a></span></label>
                        </div>
                        <div class="login-one-inputs mt-4">
                            <button class="ripple-button ripple-button-primary btn-lg btn-login" type="button">
                                <div class="ripple-ripple js-ripple">
                                    <span class="ripple-ripple__circle"></span>
                                </div>
                                Create Account
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6 d-none d-md-block p-0">
                    <div class="slider-half">
                        <div class="slide-content">
                            <div class="top-sign-up ">
                                <div class="about-comp text-white mt-2">XatoWeb</div>
                                <div class="for-sign-up">
                                    <p class="text-white font-12 mt-2 font-weight-300">Already have an account ?</p>
                                    <a href="auth_login_1.html">Login</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <i class="lar la-grin-alt font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Start your journey</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text" >Everyone has been made for some particular work, and the desire for that work has been put in every heart</p>
                                </div>
                                <div class="item">
                                    <i class="lar la-clock font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Save your time</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text" >Everyone has been made for some particular work, and the desire for that work has been put in every heart</p>
                                </div>
                                <div class="item">
                                    <i class="las la-hand-holding-usd font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Save your money</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text" >Everyone has been made for some particular work, and the desire for that work has been put in every heart</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Register User</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
