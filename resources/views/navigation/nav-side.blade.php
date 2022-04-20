<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-navbar-logo d-flex justify-content-between">
        <a href="{{ url('/') }}" class="header-logo">
            <img src="{{ asset('user/images/logo.png') }}" class="img-fluid rounded" alt="">
            <span style="font-size: 15px">{{ config('app.name') }}</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-menu-line"></i></div>
                <div class="hover-circle"><i class="ri-close-fill"></i></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                <li class="@yield('home')">
                    <a href="{{ route('home') }}" class="iq-waves-effect">
                        <i class="las la-home iq-arrow-left"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                 <li aria-expanded="true" class="@yield('agents')">
                    <a href="#agents" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-users iq-arrow-left"></i>
                        <span>Agents</span>
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="agents" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('commission')">
                            <a href="{{ route ('commission') }} ">
                                <i class="las la-shopping-bag"></i>
                                Commission
                            </a>
                        </li>
                        <li class="@yield('create')">
                            <a href="{{ route ('create') }}">
                                <i class="las la-user-plus"></i>
                                Add Agent
                            </a>
                        </li>
                        <li class="@yield('agents')">
                            <a href="{{ route ('agents') }} ">
                                <i class="las la-eye"></i>
                                View Agents
                            </a>
                        </li>

                    </ul>
                </li>

                <li aria-expanded="true" class="@yield('sales')">
                    <a href="#sales" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-coins iq-arrow-left"></i>
                        <span>Sales</span>
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="sales" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('sales')">
                            <a href="{{ route ('sales') }} ">
                                <i class="las la-chart-bar"></i>
                                Total Sales
                            </a>
                        </li>
                        <li class="@yield('pay')">
                            <a href="{{ route ('pay') }} ">
                                <i class="las la-wallet"></i>
                                Pay Agents
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
