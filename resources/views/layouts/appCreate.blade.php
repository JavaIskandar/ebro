<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ asset('eshop/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/newStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('eshop/css/newAppStyle.css') }}" rel="stylesheet">
    <script src="{{ asset('js/konva.min.js') }}"></script>
    @stack('css')

    <!--[if lt IE 9]>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +62 8383 0000 582</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> E&Bro@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a><img src="{{ asset('storage/design/logo e&bro.png') }}"alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url('/') }}" class="active">Home</a></li>
                            <li><a href="{{ url('/create') }}">Create</a></li>
                            <li class="dropdown"><a href="shop.com">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="prd-laris.html">Produk terlaris</a></li>
                                    <li><a href="prd-populer.html">Produk terpopuler</a></li>
                                    <li><a href="prd-baru.html">Produk terbaru</a></li>
                                    <li><a href="diskon.html">Diskon</a></li>
                                    <li><a href="all-prd.html">Semua Produk</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div style="width: 100%" class="search_box pull-right">
                        <input style="width: 100%" type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


@yield('slider')

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                @yield('content')
            </div>


        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-2">
                    <div class="single-widget">
                        <h2>About E&Bro</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><i class="fa fa-home"></i> Jl.Ketintang</li>
                            <li>Krembangan</li>
                            <li>Surabaya</li>
                            <li>Jawa Timur</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2">
                    <div class="single-widget">
                        <h2>Contact Us</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><i class="fa fa-phone"></i> (+62)838 3000 0582</li>
                            <li><i class="fa fa-facebook"></i> (+62)838 3000 0582</li>
                            <li><i class="fa fa-envelope"></i> E&Bro@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-5 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About E&Bro</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018 E&BRO Universitas Negeri Surabaya. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

@stack('js')

<script src="{{ asset('eshop/js/html5shiv.js') }}"></script>
<script src="{{ asset('eshop/js/respond.min.js') }}"></script>

<script src="{{ asset('eshop/js/jquery.js') }}"></script>
<script src="{{ asset('eshop/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('eshop/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('eshop/js/price-range.js') }}"></script>
<script src="{{ asset('eshop/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('eshop/js/main.js') }}"></script>
</body>
</html>


