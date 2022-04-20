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

<!-- Sign up Start -->
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
                            <h1 class="mb-0 text-center">Sign Up</h1>
                            <p class="text-center text-dark">Enter your email address and password to access portal.</p>
                            <form class="mt-4" method="post" action="{{ route('register.custom') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputName1">Your Full Name</label>
                                    <input type="text" name="name" class="form-control mb-0"
                                           id="exampleInputName1"
                                           placeholder="Your Full Name" value="{{ old('name') }}" required>

                                    <div class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                        <label for="exampleInputEmail2">Email address</label>
                                        <input type="email" name="email" class="form-control mb-0"
                                               id="exampleInputEmail2" placeholder="Enter email"
                                               value="{{ old('email') }}" required>

                                        <div class="text-danger">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                        <label for="exampleInputPhone">Phone Number</label>
                                        <input type="text" name="phone" class="form-control mb-0" id="exampleInputPhone"
                                               placeholder="Phone Number" value="{{ old('phone') }}" required>

                                        <div class="text-danger">
                                            @error('phone')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control mb-0"
                                               id="exampleInputPassword1"
                                               placeholder="Password" required>

                                        <div class="text-danger">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                        <label for="exampleInputPassword2">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control mb-0"
                                               id="exampleInputPassword2"
                                               placeholder="Password" required>

                                        <div class="text-danger">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" name="terms" class="custom-control-input"
                                               id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a
                                                href="{{ route('terms') }}" target="_blank">Terms
                                                and Conditions</a></label>

                                        <div class="text-danger">
                                            @error('terms')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign Up</button>
                                    <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a
                                            href="{{ route('login') }}">Log In</a></span>
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
<script src="user/js/jquery.min.js"></script>
<script src="user/js/popper.min.js"></script>
<script src="user/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="user/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="user/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="user/js/waypoints.min.js"></script>
<script src="user/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="user/js/wow.min.js"></script>
<!-- lottie JavaScript -->
<script src="user/js/lottie.js"></script>
<!-- Apexcharts JavaScript -->
<script src="user/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="user/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="user/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="user/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="user/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="user/js/smooth-scrollbar.js"></script>
<!-- Style Customizer -->
<script src="user/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="user/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="user/js/custom.js"></script>
</body>

<!-- Mirrored from iqonic.design/themes/findash/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Sep 2020 17:56:26 GMT -->
</html>
