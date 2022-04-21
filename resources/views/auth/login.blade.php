<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('user/images/favicon.ico') }}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
</head>
<body>

<!-- Sign in Start -->
<section class="sign-in-page">
    <div id="container-inside">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center bg-primary rounded">
                <div class="row m-0">
                    <div class="col-md-6 bg-white sign-in-page-data">
                        <div class="sign-in-from">
                            <h1 class="mb-0 text-center">Sign in</h1>
                            <p class="text-center text-dark">Enter your email address and password below.</p>


                            @if(session()->get('message') != '')
                                <div class="alert text-info" role="alert">
                                    <div class="iq-alert-text">
                                        <p>{{ session()->get('message') }}</p>
                                    </div>

                                </div>
                            @endif

                            <form class="mt-4" method="post" action="{{ route('login.custom') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1"
                                           placeholder="Enter email" value="{{ old('email') }}" >

                                    <div class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="{{ route('forget.password.get') }}" class="float-right">Forgot password?</a>
                                    <input type="password" name="password" class="form-control mb-0"
                                           id="exampleInputPassword1" placeholder="Password"
                                           value="{{ old('password') }}" >

                                    <div class="text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign in</button>
                                    <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a
                                            href="{{ route('register-user') }}">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>

                    @include('auth.slider')

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<script src="{{ asset('user/js/popper.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<!-- Appear JavaScript -->
<script src="{{ asset('user/js/jquery.appear.js') }}"></script>
<!-- Countdown JavaScript -->
<script src="{{ asset('user/js/countdown.min.js') }}"></script>
<!-- Counterup JavaScript -->
<script src="{{ asset('user/js/waypoints.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.counterup.min.js') }}"></script>
<!-- Wow JavaScript -->
<script src="{{ asset('user/js/wow.min.js') }}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{ asset('user/js/apexcharts.js') }}"></script>
<!-- lottie JavaScript -->
<script src="{{ asset('user/js/lottie.js') }}"></script>
<!-- Slick JavaScript -->
<script src="{{ asset('user/js/slick.min.js') }}"></script>
<!-- Select2 JavaScript -->
<script src="{{ asset('user/js/select2.min.js') }}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ asset('user/js/smooth-scrollbar.js') }}"></script>
<!-- Style Customizer -->
<script src="{{ asset('user/js/style-customizer.js') }}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ asset('user/js/chart-custom.js') }}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('user/js/custom.js') }}"></script>
</body>

</html>
