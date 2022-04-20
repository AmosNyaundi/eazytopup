<!doctype html>
<html lang="en" style="--iq-primary:rgb(0, 206, 209); --iq-light-primary:rgba(0, 206, 209,0.1); --iq-primary-hover:rgba(0, 206, 209,0.8);">
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
    <!-- Full calendar -->
    <link href="{{ asset('user/fullcalendar/core/main.css') }}" rel='stylesheet'/>
    <link href="{{ asset('user/fullcalendar/daygrid/main.css') }}" rel='stylesheet'/>
    <link href="{{ asset('user/fullcalendar/timegrid/main.css') }}" rel='stylesheet'/>
    <link href="{{ asset('user/fullcalendar/list/main.css') }}" rel='stylesheet'/>

    <link rel="stylesheet" href="{{ asset('user/css/flatpickr.min.css') }}">


    {{-- <link rel="stylesheet" href="{{ asset('user/css/dataTables.bootstrap4.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">

    @yield('custom-css')

    </head>
    <body>

        <!-- Wrapper Start -->
        <div class="wrapper">

    @include('navigation.nav-side')

    @include('navigation.nav-top')

    <!-- Page Content  -->
    @yield('content')

</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    {{-- <li class="list-inline-item"><a href="{{ route('privacy') }}" target="_blank">Privacy Policy</a> --}}
                    </li>
                    <li class="list-inline-item"><a href="{{ route('terms') }}" target="_blank">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <a href="https://chechi.co.ke" target="_blank">Chechi Ltd</a>.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->

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
<!-- lottie JavaScript -->
<script src="{{ asset('user/js/lottie.js') }}"></script>
<!-- am core JavaScript -->
<script src="{{ asset('user/js/core.js') }}"></script>
<!-- am charts JavaScript -->
<script src="{{ asset('user/js/charts.js') }}"></script>
<!-- am animated JavaScript -->
<script src="{{ asset('user/js/animated.js') }}"></script>
<!-- am kelly JavaScript -->
<script src="{{ asset('user/js/kelly.js') }}"></script>
<!-- am maps JavaScript -->
<script src="{{ asset('user/js/maps.js') }}"></script>
<!-- am worldLow JavaScript -->
<script src="{{ asset('user/js/worldLow.js') }}"></script>
<!-- Raphael-min JavaScript -->
<script src="{{ asset('user/js/raphael-min.js') }}"></script>
<!-- Morris JavaScript -->
<script src="{{ asset('user/js/morris.js') }}"></script>
<!-- Morris min JavaScript -->
<script src="{{ asset('user/js/morris.min.js') }}"></script>
<!-- Flatpicker Js -->
<script src="{{ asset('user/js/flatpickr.js') }}"></script>
<!-- Style Customizer -->
<script src="{{ asset('user/js/style-customizer.js') }}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ asset('user/js/chart-custom.js') }}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('user/js/custom.js') }}"></script>

<script src="{{ asset('user/js/Chart.min.js') }}"></script>

{{-- <script src="{{ asset('user/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('user/js/dataTables.bootstrap4.min.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
{{-- SweetAlert --}}
<script src="{{ asset('user/js/swal.min.js') }}"></script>

      @yield('scripts')

      <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>

   </body>

</html>
