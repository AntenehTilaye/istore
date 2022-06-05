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
                                    Start Selling Today</h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                    Creating Your Own Store is easy and fast with istore, you can get started with in 10
                                    minutes.
                                    sign up and start selling
                                </h6>
                                <br>
                                <a href="{{ route('store.register') }}"
                                    class="btn btn-white btn-rounded purple-text font-weight-bold ml-lg-0 wow fadeInLeft"
                                    data-wow-delay="0.3s">Get Started</a>
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

        <!--First container-->
        <div class="container">

            <!--Section: Features v.1-->
            <section id="features" class="mb-5">

                <!--Section heading-->
                <h1 class="mb-3 my-5 pt-5 dark-grey-text wow fadeIn text-center" data-wow-delay="0.2s"><strong
                        class="font-weight-bold">Features</strong></h1>

                <!--Section description-->
                <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
                    some of the features you can get by signing up and creating your store. there a lot more where this
                    come from</p>

                <!--First row-->
                <div class="row features wow fadeIn" data-wow-delay="0.2s">

                    <div class="col-lg-4 text-center">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-cogs deep-purple-text"></i>
                            </div>
                            <br>
                            <h5 class="dark-grey-text font-weight-bold mt-2">Customization</h5>
                            <div class="mt-1">
                                <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting let. Lorem
                                    ipsum dolor sit
                                    amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-book deep-purple-text"></i>
                            </div>
                            <br>
                            <h5 class="dark-grey-text font-weight-bold mt-2">Easy tutorials</h5>
                            <div class="mt-1">
                                <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting let. Lorem
                                    ipsum dolor sit
                                    amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center mb-4">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-users deep-purple-text"></i>
                            </div>
                            <br>
                            <h5 class="dark-grey-text font-weight-bold mt-2">Free support</h5>
                            <div class="mt-1">
                                <p class="mx-3 grey-text">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting let. Lorem
                                    ipsum dolor sit
                                    amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/First row-->

            </section>
            <!--/Section: Features v.1-->

        </div>
        <!--First container-->

        <!--Second container-->
        <div class="container-fluid" style="background-color: #f9f9f9">
            <div class="container py-4">

                <!--Section: Download-->
                <section>

                    <!-- First row -->
                    <div class="row my-4 pt-5 wow fadeIn" data-wow-delay="0.4s">

                        <!-- First column -->
                        <div class="col-lg-7 col-md-12 mb-4 text-center">
                            <img src="https://mdbootstrap.com/img/Photos/Others/screen.jpg" alt=""
                                class="img-fluid z-depth-2 rounded">
                        </div>
                        <!-- /First column -->

                        <!-- Second column -->
                        <div class="col-lg-5 col-md-12 mb-4 text-left">

                            <!--Section heading-->
                            <h2 class="mb-3 my-5 dark-grey-text wow fadeIn" data-wow-delay="0.2s"><strong
                                    class="font-weight-bold">Sign up</strong> with Istore</h2>

                            <p class="grey-text mb-4">Creating Your Own Store is easy and fast with istore, you can get
                                started with in 10 minutes.
                                sign up and start selling</p>
                            <a href="{{ route('store.register') }}"
                                class="btn btn-white btn-rounded deep-purple-text font-weight-bold ml-0 wow fadeIn"
                                data-wow-delay="0.2s"><i class="fab fa-android pr-2" aria-hidden="true"></i>Sign up</a>
                            <a href="{{ route('store.login') }}"
                                class="btn btn-white btn-rounded deep-purple-text font-weight-bold wow fadeIn"
                                data-wow-delay="0.2s"><i class="fab fa-apple pr-2" aria-hidden="true"></i> Sign In</a>
                        </div>
                        <!-- /.Second column -->

                    </div>
                    <!-- /.First row -->

                </section>
                <!--/Section: Download-->

            </div>
        </div>
        <!--Second container-->

        <!--Third container-->
        <div class="streak streak-md streak-photo"
            style="background-image:url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg')">
            <div class="flex-center white-text purple-gradient">
                <div class="container py-3">

                    <!--Section: Features v.4-->
                    <section class="wow fadeIn" data-wow-delay="0.2s">

                        <!--Section heading-->
                        <h1 class="py-5 my-5 white-text text-center wow fadeIn" data-wow-delay="0.2s"><strong
                                class="font-weight-bold">Features</strong> of Istore</h1>

                        <!--Grid row-->
                        <div class="row features-small mb-5">

                            <!--Grid column-->
                            <div class="col-md-12 col-lg-4">

                                <!--Grid row-->
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <a type="button" class="btn-floating white btn-lg my-0"><i
                                                class="fas fa-tablet-alt deep-purple-text" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-bold white-text">Fully responsive</h5>
                                        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Reprehenderit
                                            maiores.</p>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <a type="button" class="btn-floating white btn-lg my-0"><i
                                                class="fas fa-level-up-alt deep-purple-text" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-bold white-text">Frequent updates</h5>
                                        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Reprehenderit
                                            maiores.</p>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <a type="button" class="btn-floating white btn-lg my-0"><i
                                                class="fas fa-phone deep-purple-text" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-bold white-text">Technical support</h5>
                                        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Reprehenderit
                                            maiores nam.</p>
                                    </div>
                                </div>
                                <!--Grid row-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12 col-lg-4 px-5 mb-2 text-center text-md-left flex-center">
                                <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new1.png" alt=""
                                    class="z-depth-0 img-fluid">
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12 col-lg-4">

                                <!--Grid row-->
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <a type="button" class="btn-floating white btn-lg my-0"><i
                                                class="far fa-object-group deep-purple-text"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-bold white-text">Editable layout</h5>
                                        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Reprehenderit
                                            maiores nam.</p>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <a type="button" class="btn-floating white btn-lg my-0"><i
                                                class="fas fa-rocket deep-purple-text" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-bold white-text">Fast and powerful</h5>
                                        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Reprehenderit
                                            maiores nam.</p>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <a type="button" class="btn-floating white btn-lg my-0"><i
                                                class="fas fa-cloud-upload-alt deep-purple-text"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-bold white-text">Cloud storage</h5>
                                        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Reprehenderit
                                            maiores nam.</p>
                                    </div>
                                </div>
                                <!--Grid row-->

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </section>
                    <!--/Section: Features v.4-->
                </div>
            </div>
        </div>
        <!--/Third container-->


        <!--/Fourth container-->
        <div class="container">

            <!--Section: Pricing v.3-->
            <section class="mt-4 mb-5">

                <!--Section heading-->
                <h1 class="mb-3 my-5 pt-5 text-center dark-grey-text wow fadeIn" data-wow-delay="0.2s"><strong
                        class="font-weight-bold">Stores</strong></h1>

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

            <!--Section: Pricing v.3-->
            <section class="mt-4 mb-5">

                <!--Section heading-->
                <h1 class="mb-3 my-5 pt-5 text-center dark-grey-text wow fadeIn" data-wow-delay="0.2s"><strong
                        class="font-weight-bold">Pricing</strong></h1>

                <!--Section description-->
                <p class="text-center w-responsive mx-auto my-5 grey-text">
                    you can get started with one of the three different pricing plans. compared to the features provided
                    by Istore all options are great options and you can upgrade any time.
                </p>

                <!--First row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card">

                            <!--Content-->
                            <div class="text-center">
                                <div class="card-body">
                                    <h5>Basic plan</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-circle d-flex justify-content-center align-items-center">
                                            <i class="fas fa-home deep-purple-text"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class="font-weight-bold dark-grey-text mt-3"><strong>$49</strong></h2>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Culpa pariatur id nobis
                                        accusamus
                                        deleniti cumque hic laborum.</p>
                                    <a href="{{ route('store.register') }}"
                                        class="btn btn-purple font-weight-bold btn-rounded">Buy now</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card purple-gradient">

                            <!--Content-->
                            <div class="text-center white-text">
                                <div class="card-body">
                                    <h5>Premium plan</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-circle d-flex justify-content-center align-items-center">
                                            <i class="fas fa-users white-text"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class="font-weight-bold white-text mt-3"><strong>$99</strong></h2>
                                    <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non
                                        distinctio
                                        cupiditate sequi atque.</p>
                                    <a href="{{ route('store.register') }}"
                                        class="btn btn-white font-weight-bold btn-rounded">Buy now</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Card-->
                        <div class="card">

                            <!--Content-->
                            <div class="text-center">
                                <div class="card-body">
                                    <h5>Advanced plan</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-circle d-flex justify-content-center align-items-center">
                                            <i class="fas fa-chart-bar deep-purple-text"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class="font-weight-bold dark-grey-text mt-3"><strong>$149</strong></h2>
                                    <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima
                                        ratione magni accusantium
                                        repellat
                                        eveniet quia vitae.</p>
                                    <a href="{{ route('store.register') }}"
                                        class="btn btn-purple font-weight-bold btn-rounded">Buy now</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--/Third column-->

                </div>
                <!--/First row-->

            </section>
            <!--/Section: Pricing v.3-->

            <hr>


            <!--Section: Testimonials v.4-->
            <section class="text-center pb-4">

                <!--Section heading-->
                <h1 class="mb-5 my-5 pt-5 text-center dark-grey-text wow fadeIn" data-wow-delay="0.2s"><strong
                        class="font-weight-bold">Our clients</strong> about us</h1>

                <div class="row">

                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item mb-5"
                        data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating btn-purple btn-sm" href="#multi-item-example" data-slide="prev"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a class="btn-floating btn-purple btn-sm" href="#multi-item-example" data-slide="next"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--Controls-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">

                                <!--Grid column-->
                                <div class="col-md-4">
                                    <div class="testimonial">
                                        <!--Avatar-->
                                        <div class="avatar mx-auto">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                                                class="rounded-circle img-fluid">
                                        </div>
                                        <!--Content-->
                                        <h4 class="font-weight-bold mt-4">Mark Great</h4>
                                        <h6 class="purple-text font-weight-bold my-3">Owner of Store</h6>
                                        <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Lorem
                                            ipsum dolor sit amet,
                                            consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>
                                        <!--Review-->
                                        <div class="grey-text">
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star-half-alt"> </i>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="testimonial">
                                        <!--Avatar-->
                                        <div class="avatar mx-auto">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                                class="rounded-circle img-fluid">
                                        </div>
                                        <!--Content-->
                                        <h4 class="font-weight-bold mt-4">John Doe</h4>
                                        <h6 class="purple-text font-weight-bold my-3">Owner od Store</h6>
                                        <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ut enim ad
                                            minima veniam, quis
                                            nostrum exercitationem ullam corporis laboriosam.</p>
                                        <!--Review-->
                                        <div class="grey-text">
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="testimonial">
                                        <!--Avatar-->
                                        <div class="avatar mx-auto">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                                                class="rounded-circle img-fluid">
                                        </div>
                                        <!--Content-->
                                        <h4 class="font-weight-bold mt-4">Van Rock</h4>
                                        <h6 class="purple-text font-weight-bold my-3">Owner of Store</h6>
                                        <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Quis autem
                                            vel eum iure
                                            reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                                        <!--Review-->
                                        <div class="grey-text">
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="fas fa-star"> </i>
                                            <i class="far fa-star"> </i>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--First slide-->



                        </div>
                        <!--Slides-->

                    </div>
                    <!--Carousel Wrapper-->

                </div>

            </section>
            <!--Section: Testimonials v.4-->

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
