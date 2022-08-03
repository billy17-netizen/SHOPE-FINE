<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        name="viewport"
    />
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <title>@yield('title')</title>
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
    <link href="{{asset('style/main.css')}}" rel="stylesheet"/>
    @stack('prepend-style')
</head>

<body>
<!--Dashboard page-->
<div class="page-dashboard">
    <div class="d-flex" data-aos="fade-right" id="wrapper">
        <!--Sidebar-->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <a href="{{route('home')}}">
                    <img alt="" class="my-4" src="/images/Dashboard-store-logo.svg"/>
                </a>
            </div>
            <div class="list-group list-group-flush">
                <a
                    class="list-group-item list-group-item-action {{(request()->is('dashboard')) ? 'active' : ''}}"
                    href="{{route('dashboard')}}"
                >Dashboard</a
                >
                <a
                    class="list-group-item list-group-item-action {{(request()->is('dashboard/products*')) ? 'active' : ''}}"
                    href="{{route('dashboard.products')}}"
                >My Products</a
                >
                <a
                    class="list-group-item list-group-item-action {{(request()->is('dashboard/transactions*')) ? 'active' : ''}}"
                    href="{{route('dashboard.transactions')}}"
                >Transactions</a
                >
                <a
                    class="list-group-item list-group-item-action {{(request()->is('dashboard/settings*')) ? 'active' : ''}}"
                    href="{{route('dashboard.settings.store')}}"
                >Store Settings</a
                >
                <a
                    class="list-group-item list-group-item-action {{(request()->is('dashboard/account*')) ? 'active' : ''}}"
                    href="{{route('dashboard.settings.account')}}"
                >My Account</a
                >
            </div>
        </div>
        <!--End Sidebar-->

        <!--Page Content-->
        <div id="page-content-wrapper">
            <nav
                aria-label="Navbar"
                class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
                data-aos="fade-down"
            >
                <div class="container-fluid">
                    <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                        &laquo; Menu
                    </button>
                    <button
                        aria-controls="navbarResponsive"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        class="navbar-toggler"
                        data-target="#navbarSupportedContent"
                        data-toggle="collapse"
                        type="button"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Desktop Menu -->
                        <ul class="navbar-nav d-none d-lg-flex ml-auto">
                            <li class="nav-item dropdown">
                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link"
                                    data-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                >
                                    <img
                                        alt=""
                                        class="rounded-circle mr-2 profile-picture"
                                        src="/images/icon-user.png"
                                    />
                                    Hi, {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                                    <a href="{{route('dashboard.settings.account')}}" class="dropdown-item"
                                    >Settings</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('cart')}}" class="nav-link d-inline-block mt-2">
                                    @php
                                        $cart=\App\Models\Cart::where('users_id',Auth::user()->id)->count();
                                    @endphp
                                    @if($cart > 0)
                                        <img src="{{asset('images/icon-cart-filled.png')}}" alt=""/>
                                        <span class="cart-badge">{{$cart}}</span>
                                    @else
                                        <img src="{{asset('images/icon-cart-empty.png')}}" alt=""/>
                                    @endif
                                </a>
                            </li>
                        </ul>

                        <!-- Mobile Menu -->
                        <ul class="navbar-nav d-block d-lg-none">
                            <li class="nav-item">
                                <a href="{{route('cart')}}" class="nav-link d-inline-block">
                                    Cart
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Hi, {{ Auth::user()->name }}
                                </a>
                                <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Section Content-->
            @yield('content')

        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
@stack('prepend-script')
<script src="/vendor/jquery/jquery.slim.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function () {
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });
</script>
@stack('addon-script')
</body>
</html>
