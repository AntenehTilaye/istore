<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IStore</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/m.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <style type="text/css">
        html,
        body,
        header,
        .intro-2 {
            height: 100%;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .intro-2 {
                height: 900px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .intro-2 {
                height: 980px;
            }
        }

    </style>
</head>

<body class="software-lp">

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>Istore</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse offset-md-6" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/istores">Stores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('store.register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('store.login') }}">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Intro Section-->
        <section class="view intro-2 rgba-gradient">
            <div class="mask">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-12 col-lg-6 text-center text-md-left margins">
                            <div class="white-text">
                                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">
                                    Explore IStore</h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s"> Explore before 
                                    Creating Your Own Store and start selling.
                                </h6>
                                <br>
                                <a href="{{ route('store.register') }}"
                                    class="btn btn-white btn-rounded purple-text font-weight-bold ml-lg-0 wow fadeInLeft"
                                    data-wow-delay="0.3s">I Want to Start Now</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </header>
    <!--Main Navigation-->

    <!--Main content-->
    <main>

       


        <!--/Fourth container-->
        <div class="container">

            <!--Section: Pricing v.3-->
            <section class="mt-4 mb-5">

                <div class="row">

                    @foreach ($stores as $store)
                        <div class="col-md-3 d-md-block">
                            <!--Avatar-->
                            <div class="avatar mx-auto col-md-12 text-center">
                                <a href="/show/{{ $store->store_id }}">
                                    <img src="{{ asset('storage/images/'.$store->logo) }}"
                                        class="rounded-circle img-fluid">
                                </a>
                            </div>
                            <!--Content-->
                            <h4 class="font-weight-bold mt-4 text-center">{{ $store->store_name }}</h4>
                            <p class="font-weight-normal"> <i class="fa fa-info-circle" aria-hidden="true"></i>
                                {{ substr($store->store_detail, 0, 90) }}
                            </p>
                            <!--Review-->
                            <div class="grey-text">
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                                <i class="far fa-star"> </i>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-12 mt-4">
                    {{ $stores->links() }}
                </div>
                
            </section>

        </div>
        <!--/Fourth container-->



    </main>
    <!--Main content-->


    <!--Footer-->
    <footer class="page-footer text-center text-md-left purple-grey lighten-5 pt-0">

        <div style="background-color: #9b0cee;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-12 col-md-5 text-left mb-md-0">
                        <h6 class="mb-0 white-text text-center text-md-left"><strong>Get connected with us on social
                                networks!</strong></h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-12 col-md-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="p-2 m-2 fa-lg fb-ic ml-0"><i class="fab fa-facebook-f white-text mr-lg-4"> </i></a>
                        <!--Twitter-->
                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text mr-lg-4"> </i></a>
                        <!--Google +-->
                        <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text mr-lg-4"> </i></a>
                        <!--Linkedin-->
                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text mr-lg-4"> </i></a>
                        <!--Instagram-->
                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text mr-lg-4"> </i></a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
                    <h6 class="text-uppercase font-weight-bold"><strong>Istore</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p> Creating Your Own Store is easy and fast with istore, you can get started with in 10 minutes.
                        sign up and start selling.</p>
                </div>
                <!--/.First column-->

                <!--Third column-->
                <div class="col-md-3 text-dark col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>

                        <a class="dark-grey-text" href="{{ route('store.register') }}">Register</a>

                    </p>

                    <p>

                        <a class="dark-grey-text" href="/">Become an Affiliate</a>

                    </p>

                    <p>

                        <a class="dark-grey-text" href="{{ route('store.login') }}">Login</a>

                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
                    <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fas fa-home mr-3"></i> Anteneh Tilaye</p>
                    <p><i class="fas fa-envelope mr-3"></i> Adama, Ethiopia</p>
                    <p><i class="fas fa-envelope mr-3"></i> Istore.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 251 969 489 521</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">

            <div class="container-fluid">

                © 2022 Copyright: <a href="/" target="_blank"> Istore </a>

            </div>

        </div>
        <!-- Copyright -->
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/m.min.js') }}"></script>
    <!-- Custom scripts -->
    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}

    <script>
        //Animation init
        new WOW().init();

        //Modal
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').focus()
        })

        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>

</body>

</html>
