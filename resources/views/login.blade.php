<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Compare Properties Widget
    ================================================== -->
    <div class="compare-slide-menu">
        <div class="csm-trigger"></div>
    </div>
    <!-- Compare Properties Widget / End -->
    <!-- Header Container
    ================================================== -->
    <header id="header-container">
        <!-- Topbar -->
        <div id="top-bar">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Top bar -->
                    <ul class="top-bar-menu">
                        <li><i class="fa fa-phone"></i> (123) 123-456</li>
                        <li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>
                        <li>
                            <div class="top-bar-dropdown">
                                <span>Dropdown Menu</span>
                                <ul class="options">
                                    <li>
                                        <div class="arrow"></div>
                                    </li>
                                    <li><a href="#">Nice First Link</a></li>
                                    <li><a href="#">Second Link With Long Title</a></li>
                                    <li><a href="#">Third Link</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Left Side Content / End -->
                <!-- Left Side Content -->
                <div class="right-side">
                    <!-- Social Icons -->
                    <ul class="social-icons">
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    </ul>
                </div>
                <!-- Left Side Content / End -->
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Topbar / End -->
        <!-- Header -->
        <div id="header">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
      <span class="hamburger-box">
       <span class="hamburger-inner"></span>
      </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Listings</a>
                            </li>
                            <li><a href="#">Features</a>
                            </li>
                            <li><a class="current" href="#">Pages</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->
                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="login" class="sign-in"><i class="fa fa-user"></i> Log In</a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->
            </div>
        </div>
        <!-- Header / End -->
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->
    <!-- Titlebar
    ================================================== -->
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Log In </h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Log In</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact
    ================================================== -->
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Đăng nhập bằng Google
                </button>
                <!--Tab -->
                <div class="my-account style-1 margin-top-5 margin-bottom-40">
                    <ul class="tabs-nav">
                        <li class=""><a href="login/#tab1">Đăng nhập</a></li>
                    </ul>
                    <div class="tabs-container alt">
                        <!-- Login -->
                        <div class="tab-content" id="tab1">
                            <form method="post" class="login">
                                <div>
                                    <label>Email:
                                        <i class="im im-icon-Male"></i>
                                        <input name="email" class="form-control" type="text"
                                               placeholder="Nhập email">
                                    </label>
                                </div>
                                <div>
                                    <label for="password">Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password" id="password" placeholder="Nhập password" />
                                    </label>


                                </div>

                                <div class="form-row">
                                    <a href="" type="submit" class="button border fw margin-top-10">Sign in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container / End -->
    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chosen.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/rangeSlider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sticky-kit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/masonry.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mmenu.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tooltips.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <!-- Wrapper / End -->
</div>
</body>

</html>

