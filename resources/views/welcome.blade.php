<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="MajaBaca" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('template/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('template/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="{{asset('teamplate/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!--//webfonts-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <section class="main-header">
            <div class="header-top text-md-left text-center">
                <div class="container">
                    <div class="d-md-flex justify-content-between">
                        <p class="text-capitalize">Jika ada pertanyaan hubungi +62 </p>
                        <ul class="social-iconsv2 agileinfo mt-md-0 mt-2">
                            <li class="ml-lg-5">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /header-top-->
            <header class="main-header">
                <nav class="navbar second navbar-expand-lg navbar-light bg-light pagescrollfix">
                    <div class="container">
                        <h1>
                            <a class="navbar-brand" href="#">
                                Komunitas
                                <span>MajaBaca</span>
                            </a>
                        </h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup1"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-toggle" id="navbarNavAltMarkup1">
                            <div class="navbar-nav secondfix ml-lg-auto">
                                <ul class="navbar-nav text-center">
                                    <li class="nav-item active  mr-3">
                                        <a class="nav-link" href="index.html">Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  mr-3">
                                        <a class="nav-link scroll" href="#about">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#services">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#contact">contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </section>
            <!-- //header -->
        <!-- banner -->
        <div class="banner">
            <div class="container">
                <div class="banner-text-agile">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Carousel -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4">
                                            <span>this is</span> salient</h3>
                                        <p class="mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
                                        <a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">explore services</a>
                                    </div>
                                    <!-- slider text -->
                                    <div class="carousel-item">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4">
                                            <span>successful </span>careers</h3>
                                        <p class="mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
                                        <a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">explore services</a>
                                    </div>
                                    <!-- slider text -->
                                    <div class="carousel-item text-white">
                                        <h3 class="b-w3ltxt  text-capitalize mt-md-4">
                                            <span>expert</span> consultants</h3>
                                        <p class="mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
                                        <a class="btn btn-banner mt-md-3 mt-2 text-capitalize scroll" href="#services" role="button">explore services</a>
                                    </div>
                                    <!-- slider text -->
                                </div>
                            </div>
                            <!-- Carousel -->
                        </div>
                        <div class="offset-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- banner bottom -->
        <div class="serv_bottom py-sm-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h4 class="agile-ser_bot text-light text-capitalize">Sed mi tortor, commodo a felis in fringilla.</h4>
                        <p class="text-secondary">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                    </div>
                    <div class="col-lg-4 my-lg-auto mt-3 text-lg-right">
                        <a href="#services" class="text-capitalize serv_link btn scroll">view services</a>
                    </div>
                </div>
            </div>
        </div>