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
                            <h2 class="mb-0 text-center">Reset Password </h2>

                             @if (Session::has('message'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif

                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label for="email_address">Email Address</label>

                                    <input type="text" id="email_address" class="form-control mb-0" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                            </div>

                            <div class="form-group">
                                <label for="password" >Password</label>
                                    <input type="password" id="password" class="form-control mb-0" name="password" required autofocus>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" >Confirm Password</label>
                                    <input type="password" id="password-confirm" class="form-control mb-0" name="password_confirmation" required autofocus>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
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
