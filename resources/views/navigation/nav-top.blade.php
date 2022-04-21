<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0" style="margin-top: 12px">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-menu-line"></i></div>
                    <div class="hover-circle"><i class="ri-close-fill"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('user/images/favicon.ico') }}" class="img-fluid rounded" alt="">
                        <span>{{ config('app.name') }}</span>
                    </a>
                </div>
            </div>
            <div class="iq-search-bar">
               {{-- <a class="btn btn-info" href="" role="button"><i class="ri-message-2-line"></i>Transactions </a>
               <a class="btn btn-primary" href="" role="button"><i class="ri-arrow-go-forward-line"></i> Buy Airtime</a> --}}
             </div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>

            <ul class="navbar-list">
                <li class="line-height">
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                        <img src="{{ asset('user/images/user/'.(auth()->user()->face_image??'1.png')) }}"
                             class="img-fluid rounded mr-3" alt="user">
                        <div class="caption">
                            <h6 class="mb-0 line-height">
                                {{ auth()->user()->name }}


                                {{-- @if(count(auth()->user()->unreadNotifications)>0)
                                    <span class="badge badge-danger badge-pill rounded">
                                    {{ count(auth()->user()->unreadNotifications) }}
                                    </span>
                                @endif --}}

                            </h6>
                            {{-- <p class="mb-0 text-primary"> {{ auth()->user()->email }}</p> --}}
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">{{ auth()->user()->username }}</h5>
                                    <span class="text-white font-size-12">{{ auth()->user()->email }}</span>
                                </div>
                                <a href="" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-profile-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Edit Profile</h6>
                                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-notification-2-fill"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Notifications
                                                {{-- @if(count(auth()->user()->unreadNotifications)>0)
                                                    <span class="badge badge-danger badge-pill rounded">
                                                    {{ count(auth()->user()->unreadNotifications) }}
                                                    </span>
                                                @endif --}}
                                            </h6>
                                            <p class="mb-0 font-size-12">View unread notifications.</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-lock-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Privacy Settings</h6>
                                            <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                        </div>
                                    </div>
                                </a>

                                <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="{{ route('signout') }}" role="button">Sign
                                        out<i class="ri-login-box-line ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- TOP Nav Bar END -->

{{--@if(count(auth()->user()->unreadNotifications) > 0)--}}
{{--                    <ul class="navbar-list">--}}
{{--                        <li class="nav-item nav-icon">--}}
{{--                            <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">--}}
{{--                                <i class="ri-notification-line"></i>--}}
{{--                                <span class="bg-danger dots"></span>--}}
{{--                            </a>--}}
{{--                            <div class="iq-sub-dropdown">--}}
{{--                                <div class="iq-card shadow-none m-0">--}}
{{--                                    <div class="iq-card-body p-0 ">--}}
{{--                                        <div class="bg-primary p-3">--}}
{{--                                            <h5 class="mb-0 text-white">Unread Notifications--}}
{{--                                                <small class="badge  badge-light float-right pt-1">--}}
{{--                                                    {{ count(auth()->user()->unreadNotifications) }}--}}
{{--                                                </small>--}}
{{--                                            </h5>--}}
{{--                                        </div>--}}

{{--                                        @foreach(auth()->user()->unreadNotifications as $notification)--}}
{{--                                            <a href="#" class="iq-sub-card">--}}
{{--                                                <div class="media align-items-center">--}}
{{--                                                    <div class="media-body ml-3">--}}
{{--                                                        <h6 class="mb-0 ">Emma Watson Barry</h6>--}}
{{--                                                        <small class="float-right font-size-12">Just Now</small>--}}
{{--                                                        <p class="mb-0">95 MB</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                @endif --}}
