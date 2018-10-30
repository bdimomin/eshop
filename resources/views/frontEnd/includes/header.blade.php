<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Home | Smart Shop')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('frontEnd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{ asset('frontEnd/css/pignose.layerslider.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen" />


    <!-- //pignose css -->
    <link href="{{ asset('frontEnd/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/jquery-ui.css') }}">
    <!-- js -->
    <script type="text/javascript" src="{{ asset('frontEnd/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->

    <script src="{{asset('frontEnd/js/imagezoom.js')}}"></script>
    <script src="{{ asset('frontEnd/js/jquery.flexslider.js') }}"></script>

    <!-- cart -->
    <script src="{{ asset('frontEnd/js/simpleCart.min.js') }}"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ asset('frontEnd/js/bootstrap-3.1.1.min.js') }}"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="{{ asset('frontEnd/js/jquery.easing.min.js') }}"></script>
</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
            <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="{{route('homepage')}}"><img src="{{ asset('frontEnd/images/logo3.jpg')}}"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form>
                <div class="search">
                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                </div>
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All categories</option>
                        <option value="null">Electronics</option>
                        <option value="AX">kids Wear</option>
                        <option value="AX">Men's Wear</option>
                        <option value="AX">Women's Wear</option>
                        <option value="AX">Watches</option>
                    </select>
                </div>
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 header-right footer-bottom">
            <ul>
                <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

                </li>
                <li><a class="fb" href="#"></a></li>
                <li><a class="twi" href="#"></a></li>
                <li><a class="insta" href="#"></a></li>
                <li><a class="you" href="#"></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="{{route('mens')}}"><img src="{{ asset('frontEnd/images/woo1.jpg')}}" alt=" "/></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{route('mens')}}">Clothing</a></li>
                                                <li><a href="{{route('mens')}}">Wallets</a></li>
                                                <li><a href="{{route('mens')}}">Footwear</a></li>
                                                <li><a href="{{route('mens')}}">Watches</a></li>
                                                <li><a href="{{route('mens')}}">Accessories</a></li>
                                                <li><a href="{{route('mens')}}">Bags</a></li>
                                                <li><a href="{{route('mens')}}">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{route('mens')}}">Jewellery</a></li>
                                                <li><a href="{{route('mens')}}">Sunglasses</a></li>
                                                <li><a href="{{route('mens')}}">Perfumes</a></li>
                                                <li><a href="{{route('mens')}}">Beauty</a></li>
                                                <li><a href="{{route('mens')}}">Shirts</a></li>
                                                <li><a href="{{route('mens')}}">Sunglasses</a></li>
                                                <li><a href="{{route('mens')}}">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{route('womens')}}">Clothing</a></li>
                                                <li><a href="{{route('womens')}}">Wallets</a></li>
                                                <li><a href="{{route('womens')}}">Footwear</a></li>
                                                <li><a href="{{route('womens')}}">Watches</a></li>
                                                <li><a href="{{route('womens')}}">Accessories</a></li>
                                                <li><a href="{{route('womens')}}">Bags</a></li>
                                                <li><a href="{{route('womens')}}">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{route('womens')}}">Jewellery</a></li>
                                                <li><a href="{{route('womens')}}">Sunglasses</a></li>
                                                <li><a href="{{route('womens')}}">Perfumes</a></li>
                                                <li><a href="{{route('womens')}}">Beauty</a></li>
                                                <li><a href="{{route('womens')}}">Shirts</a></li>
                                                <li><a href="{{route('womens')}}">Sunglasses</a></li>
                                                <li><a href="{{route('womens')}}">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="{{route('womens')}}"><img src="{{ asset('frontEnd/images/woo.jpg')}}" alt=" "/></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class=" menu__item"><a class="menu__link" href="{{ route('electronics')}}">Electronics</a></li>

                            <li class=" menu__item"><a class="menu__link" href="{{ route('contact') }}">contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <a href="checkout.html">
                    <h3> <div class="total">
                            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>