<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ isset($title) ? $title : 'IStore' }}</title>
    {{-- <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB --> --}}

    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav id="front-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                {{-- <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button> --}}

                <!-- Brand -->
                <a id="ic" class="navbar-brand nav-link d-flex align-items-center text-black text-decoration-none"
                    href="#" role="button" aria-expanded="false">
                    <img src="{{ asset('storage/images/' . $store->logo) }}" class="rounded-circle" height="30"
                        alt="Store Logo" loading="lazy" />{{ $store->store_name }}
                </a>

                <!-- Search form -->
                <form class="d-none d-sm-flex input-group w-auto my-auto ml-2">
                    <input autocomplete="off" type="search" class="form-control rounded search-input"
                        placeholder='Search product ...' style="min-width: 100px" />
                    <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                </form>


                <!-- Right links -->
                <ul id="sidebarMenu" class="menu navbar-nav ms-auto d-flex flex-row sidebar2 collapse mx-5">

                    <li class="nav-item">
                        <a class="{{ $current == 1 ? 'active' : '' }} nav-link d-flex align-items-center btn btn-sm shadow-0 mx-2 list-group list-group-flush mx-3 mt-4"
                            href="/show/{{ $store->store_id }}/" role="button">
                            <i class="fa fa-home" aria-hidden="true"> Home</i>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ $current == 2 ? 'active' : '' }} nav-link d-flex align-items-center btn btn-sm shadow-0 mx-2 list-group list-group-flush mx-3 mt-4"
                            href="/show/{{ $store->store_id }}/all_categories" role="button"><i
                                class="fa fa-tasks" aria-hidden="true"> Product</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ $current == 3 ? 'active' : '' }} nav-link d-flex align-items-center btn btn-sm shadow-0 mx-2 list-group list-group-flush mx-3 mt-4"
                            href="/{{ $store->store_id }}/cart" role="button">
                            <i class="fa fa-shopping-cart" aria-hidden="true"> Cart <span class="basket-item-count">
                                    <span class="badge badge-pill"></span>
                                </span></i>

                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="{{ $current == 4 ? 'active' : '' }} nav-link d-flex align-items-center btn btn-sm shadow-0 mx-2 list-group list-group-flush mx-3 mt-4"
                            href="/show/{{ $store->store_id }}/" role="button">
                            <i class="fa fa-info-circle" aria-hidden="true"> About</i>

                        </a>
                    </li> --}}

                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    @yield('content')

    <!-- Footer -->
    <footer class="front-footer section page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #6e4dc9;">

            <div class="container">

                <!-- Grid row -->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-md-left mb-4 mb-md-0">

                        <h6 class="mb-0">Get connected with us on social networks!</h6>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic ml-0 px-2">

                            <i class="fab fa-facebook-f"> </i>

                        </a>

                        <!-- Twitter -->
                        <a class="tw-ic px-2">

                            <i class="fab fa-twitter"> </i>

                        </a>

                        <!-- Google + -->
                        <a class="gplus-ic px-2">

                            <i class="fab fa-google-plus-g"> </i>

                        </a>

                        <!-- Linkedin -->
                        <a class="li-ic px-2">

                            <i class="fab fa-linkedin-in"> </i>

                        </a>

                        <!-- Instagram -->
                        <a class="ins-ic px-2">

                            <i class="fab fa-instagram"> </i>

                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>

        </div>

        <!-- Footer Links -->
        <div class="container mt-5 mb-4 text-center text-md-left">

            <div class="row mt-3">

                <!-- First column -->
                <div class="col-md-4 col-lg-4 col-xl-3 mb-4">

                    <h6 class="text-uppercase font-weight-bold">

                        <strong>{{ Str::substr($store->store_name, 0, 5) }}</strong>

                    </h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p class="text-justify">{{ $store->store_detail }}</p>

                </div>
                <!-- First column -->

                <!-- Third column -->
                <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase font-weight-bold">

                        <strong>Useful links</strong>

                    </h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>

                        <a href="{{ route('store.register') }}">Register</a>

                    </p>

                    <p>

                        <a href="/">Become an Affiliate</a>

                    </p>

                    <p>

                        <a href="{{ route('store.login') }}">Login</a>

                    </p>

                    

                </div>
                <!-- Third column -->

                <!-- Fourth column -->
                <div class="col-md-4 col-lg-3 col-xl-3">

                    <h6 class="text-uppercase font-weight-bold">

                        <strong>Contact</strong>

                    </h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>

                        <i class="fas fa-home mr-3"></i>{{ $store->address }}
                    </p>

                    <p>

                        <i class="fas fa-envelope mr-3"></i> {{ $store->email }}
                    </p>

                    <p>

                        <i class="fas fa-phone mr-3"></i> {{ $store->phone }}
                    </p>
                </div>
                <!-- Fourth column -->

            </div>

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">

            <div class="container-fluid">

                © 2022 Copyright: <a href="/" target="_blank"> Istore </a>

            </div>

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('chartjs/chart.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>

</html>
