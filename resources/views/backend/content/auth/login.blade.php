@extends('backend.layers.dashboard')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/backend/structure.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap/css/bootstrap.min.css') }}">
@endsection
@section('js')

    <script src="{{asset('library/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('library/owl-carousel/owl.carousel.js')}}"></script>
@endsection
@section('body')
    {{--    <main class="login-form">--}}
    {{--        <div class="cotainer">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <div class="card">--}}
    {{--                        <h3 class="card-header text-center">Login</h3>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <form method="POST" action="{{ route('login.custom') }}">--}}
    {{--                                @csrf--}}
    {{--                                <div class="form-group mb-3">--}}
    {{--                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required--}}
    {{--                                           autofocus>--}}
    {{--                                    @if ($errors->has('email'))--}}
    {{--                                        <span class="text-danger">{{ $errors->first('email') }}</span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                                <div class="form-group mb-3">--}}
    {{--                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>--}}
    {{--                                    @if ($errors->has('password'))--}}
    {{--                                        <span class="text-danger">{{ $errors->first('password') }}</span>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                                <div class="form-group mb-3">--}}
    {{--                                    <div class="checkbox">--}}
    {{--                                        <label>--}}
    {{--                                            <input type="checkbox" name="remember"> Remember Me--}}
    {{--                                        </label>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="d-grid mx-auto">--}}
    {{--                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>--}}
    {{--                                </div>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </main>--}}
    <div class="login-one">
    <div class="container-fluid login-one-container">
        <div class="p-30 h-100">
            <div class="row main-login-one h-100">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 p-0">
                        <form method="POST" action="{{ route('login.custom') }}" class="login-one-start">
                            @csrf
                            <h6 class="mt-2 text-primary text-center font-20">Đăng nhập</h6>
                            <p class="text-center text-muted mt-3 mb-3 font-14">Vui lòng đăng nhập tài khoản của bạn</p>
                            <div class="login-one-inputs mt-5">
                                <input type="text" placeholder="Tài Khoản" id="email" name="email" required autofocus/>
                                <i class="las la-user-alt"></i>
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="login-one-inputs mt-3">
                                <input type="password" placeholder="Password" id="password" name="Mật khẩu" required/>
                                <i class="las la-lock"></i>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="login-one-inputs check mt-4">
                                <input class="inp-cbx" name="remember" id="cbx" type="checkbox" style="display: none">
                                <label class="cbx" for="cbx">
                                <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                </span>
                                    <span class="font-13 text-muted">Lưu mật khẩu?</span>
                                </label>
                            </div>
                            <div class="login-one-inputs mt-4">
                                <button class="ripple-button ripple-button-primary btn-lg btn-login" type="submit">
                                    <div class="ripple-ripple js-ripple">
                                        <span class="ripple-ripple__circle"></span>
                                    </div>
                                    ĐĂNG NHẬP
                                </button>
                            </div>
                            <div class="login-one-inputs mt-4 text-center font-12 strong">
                                <a href="auth_forget_password_1.html" class="text-primary">Quên mật khẩu?</a>
                            </div>
                            <div class="login-one-inputs social-logins mt-4">
                                <div class="social-btn"><a href="#" class="fb-btn"><i class="lab la-facebook-f"></i></a>
                                </div>
                                <div class="social-btn"><a href="#" class="twitter-btn"><i class="lab la-twitter"></i>
                                    </a></div>
                                <div class="social-btn"><a href="#" class="google-btn"><i
                                            class="lab la-google-plus"></i>
                                    </a></div>
                            </div>
                        </form>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6 d-none d-md-block p-0">
                    <div class="slider-half">
                        <div class="slide-content">
                            <div class="top-sign-up ">
                                <div class="about-comp text-white mt-2">IT24H</div>
                                <div class="for-sign-up">
                                    <p class="text-white font-12 mt-2 font-weight-300">Bạn chưa có tài khoản?</p>
                                    <a href="auth_signup_1.html">Đăng Kí</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <i class="lar la-grin-alt font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Start your journey</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text">Everyone has been made
                                        for some particular work, and the desire for that work has been put in every
                                        heart</p>
                                </div>
                                <div class="item">
                                    <i class="lar la-clock font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Save your time</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text">Everyone has been made
                                        for some particular work, and the desire for that work has been put in every
                                        heart</p>
                                </div>
                                <div class="item">
                                    <i class="las la-hand-holding-usd font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Save your money</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text">Everyone has been made
                                        for some particular work, and the desire for that work has been put in every
                                        heart</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
