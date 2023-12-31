<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka - Ecommerce HTML Template.</title>
    <meta name="keywords"
          content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops"/>
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{asset('')}}assets/images/favicon/favicon.png" sizes="32x32"/>
    <link rel="apple-touch-icon" href="{{asset('')}}assets/images/favicon/favicon.png"/>
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png"/>

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/vendor/ecicons.min.css"/>

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/animate.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/jquery-ui.min.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/countdownTimer.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/slick.min.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/nouislider.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/bootstrap.css"/>

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/style.css"/>
    <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css"/>

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{asset('')}}assets/css/backgrounds/bg-4.css">

</head>
<body class="product_page">
<div id="ec-overlay"><span class="loader_img"></span></div>

<!-- Header start  -->
<header class="ec-header">
    <!--Ec Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Top social Start -->
                <div class="col text-left header-top-left d-none d-lg-block">
                    <div class="header-top-social">
                        <span class="social-text text-upper">Follow us on:</span>
                        <ul class="mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                        class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                        class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                        class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                        class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top social End -->
                <!-- Header Top Category Toggle Start -->
                <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                    <img src="{{ asset('') }}assets/images/icons/category-icon.svg" class="svg_img header_svg"
                         alt="icon"/>
                </a>
                <!-- Header Top Category Toggle End -->
                <!-- Header Top Message Start -->
                <div class="col text-center header-top-center">
                    <div class="header-top-message text-upper">
                        <span>Free Shipping</span>This Week Order Over - $75
                    </div>
                </div>
                <!-- Header Top Message End -->
                <!-- Header Top Language Currency -->
                <div class="col header-top-right d-none d-lg-block">
                    <div class="header-top-lan-curr d-flex justify-content-end">
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->

                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="assets/images/icons/user.svg" class="svg_img header_svg"
                                        alt=""/></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @if (Auth::check())
                                        <li><span class="dropdown-item">POIN SAYA : <br>
                                                {{ Auth::user()->membership->jumlah_poin }}</span></li>
                                        <li><a class="dropdown-item" href="{{ route('history') }}">History</a></li>
                                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                    @else
                                        <li><a class="dropdown-item" href="/register">Register</a></li>
                                        <li><a class="dropdown-item" href="/login">Login</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            {{-- <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon"><img src="assets/images/icons/wishlist.svg"
                                    class="svg_img header_svg" alt="" /></div>
                            <span class="ec-header-count">4</span>
                        </a> --}}
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a @auth href="#ec-side-cart" @else href="{{ route('login') }}" @endauth
                            class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{asset('')}}assets/images/icons/cart.svg"
                                                              class="svg_img header_svg" alt=""/></div>
                                {{-- <span class="ec-header-count ec-cart-count cart-count-lable">3</span> --}}
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <img src="{{asset('')}}assets/images/icons/menu.svg" class="svg_img header_svg"
                                     alt="icon"/>
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="/"><img src="{{asset('')}}assets/images/logo/logo-8.png"
                                                 alt="Site Logo"/><img class="dark-logo"
                                                                       src="{{asset('')}}assets/images/logo/dark-logo-8.png"
                                                                       alt="Site Logo"
                                                                       style="display: none;"/></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control" placeholder="Enter Your Product Name..."
                                           type="text">
                                    <button class="submit" type="submit"><img
                                            src="{{asset('')}}assets/images/icons/search.svg" class="svg_img header_svg"
                                            alt=""/></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">
                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                            src="{{asset('')}}assets/images/icons/user.svg" class="svg_img header_svg"
                                            alt=""/></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        @if (Auth::check())
                                            <li><span class="dropdown-item">POIN SAYA : <br>
                                                    {{ Auth::user()->membership->jumlah_poin }}</span></li>
                                            <li><a class="dropdown-item" href="{{ route('history') }}">History</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                        @else
                                            <li><a class="dropdown-item" href="/register">Register</a></li>
                                            <li><a class="dropdown-item" href="/login">Login</a></li>
                                        @endif
                                    </ul>
                                </div>
                                <a @auth href="#ec-side-cart" @else href="{{ route('login') }}" @endauth
                                class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon">
                                        <img src="{{asset('')}}assets/images/icons/cart.svg"
                                             class="svg_img header_svg" alt=""/>
                                        <span class="ec-header-count cart-count-lable"></span>
                                    </div>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->
    <!-- Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="/"><img src="{{asset('')}}assets/images/logo/logo-8.png" alt="Site Logo"/><img
                                class="dark-logo" src="{{asset('')}}assets/images/logo/dark-logo-8.png" alt="Site Logo"
                                style="display: none;"/></a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search Start -->
                <div class="col">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control" placeholder="Enter Your Product Name..."
                                   type="text">
                            <button class="submit" type="submit"><img src="{{asset('')}}assets/images/icons/search.svg"
                                                                      class="svg_img header_svg" alt="icon"/></button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->
    <!-- EC Main Menu Start -->
    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="ec-main-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Classic
                                                    Variation</a></li>
                                            <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3
                                                    column</a>
                                            </li>
                                            <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4
                                                    column</a>
                                            </li>
                                            <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3
                                                    column</a>
                                            </li>
                                            <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4
                                                    column</a>
                                            </li>
                                            <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Classic
                                                    Variation</a></li>
                                            <li><a href="shop-banner-left-sidebar-col-3.html">Banner left
                                                    sidebar 3
                                                    column</a></li>
                                            <li><a href="shop-banner-left-sidebar-col-4.html">Banner left
                                                    sidebar 4
                                                    column</a></li>
                                            <li><a href="shop-banner-right-sidebar-col-3.html">Banner right
                                                    sidebar
                                                    3 column</a></li>
                                            <li><a href="shop-banner-right-sidebar-col-4.html">Banner right
                                                    sidebar
                                                    4 column</a></li>
                                            <li><a href="shop-banner-full-width.html">Banner Full width 4
                                                    column</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">Columns
                                                    Variation</a></li>
                                            <li><a href="shop-full-width-col-3.html">3 Columns full width</a>
                                            </li>
                                            <li><a href="shop-full-width-col-4.html">4 Columns full width</a>
                                            </li>
                                            <li><a href="shop-full-width-col-5.html">5 Columns full width</a>
                                            </li>
                                            <li><a href="shop-full-width-col-6.html">6 Columns full width</a>
                                            </li>
                                            <li><a href="shop-banner-full-width-col-3.html">Banner 3
                                                    Columns</a>
                                            </li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="menu_title"><a href="javascript:void(0)">List
                                                    Variation</a>
                                            </li>
                                            <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a>
                                            </li>
                                            <li><a href="shop-list-banner-left-sidebar.html">Banner left
                                                    sidebar</a>
                                            </li>
                                            <li><a href="shop-list-banner-right-sidebar.html">Banner right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-full-col-2.html">Full width 2 columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="ec-main-banner w-100">
                                            <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img
                                                        class="img-responsive"
                                                        src="assets/images/menu-banner/1.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                        class="img-responsive"
                                                        src="assets/images/menu-banner/2.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                        class="img-responsive"
                                                        src="assets/images/menu-banner/3.jpg"
                                                        alt=""></a>
                                            </li>
                                            <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                        class="img-responsive"
                                                        src="assets/images/menu-banner/4.jpg"
                                                        alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)">Products</a>
                                <ul class="sub-menu">
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                            page
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-left-sidebar.html">Product left sidebar</a>
                                            </li>
                                            <li><a href="product-right-sidebar.html">Product right sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                            360
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-360-left-sidebar.html">360 left sidebar</a>
                                            </li>
                                            <li><a href="product-360-right-sidebar.html">360 right sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                            video
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-video-left-sidebar.html">Video left
                                                    sidebar</a>
                                            </li>
                                            <li><a href="product-video-right-sidebar.html">Video right
                                                    sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                            gallery
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="product-gallery-left-sidebar.html">Gallery left
                                                    sidebar</a>
                                            </li>
                                            <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                    sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="product-full-width.html">Product full width</a></li>
                                    <li><a href="product-360-full-width.html">360 full width</a></li>
                                    <li><a href="product-video-full-width.html">Video full width</a></li>
                                    <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="track-order.html">Track Order</a></li>
                                    <li><a href="terms-condition.html">Terms Condition</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                                       title="NEW"></span><a href="javascript:void(0)">Others</a>
                                <ul class="sub-menu">
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                            Confirmation
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a>
                                            </li>
                                            <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a>
                                            </li>
                                            <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a>
                                            </li>
                                            <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a>
                                            </li>
                                            <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                            Reset
                                            password
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="email-template-forgot-password-1.html">Reset password
                                                    1</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-2.html">Reset password
                                                    2</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-3.html">Reset password
                                                    3</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-4.html">Reset password
                                                    4</a>
                                            </li>
                                            <li><a href="email-template-forgot-password-5.html">Reset password
                                                    5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                            Promotional
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                            <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                            <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                            <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                            <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                            <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                            <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                            <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static">
                                        <span class="label-note-hot"></span>
                                        <a href="javascript:void(0)">Vendor account pages
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                            <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                            <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                            <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static">
                                        <span class="label-note-trending"></span>
                                        <a href="javascript:void(0)">User account pages
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="user-profile.html">User Profile</a></li>
                                            <li><a href="user-history.html">History</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="track-order.html">Track Order</a></li>
                                            <li><a href="user-invoice.html">Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static"><a
                                            href="javascript:void(0)">Construction
                                            pages
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="404-error-page.html">404 error page</a></li>
                                            <li><a href="under-maintenance.html">maintanence page</a></li>
                                            <li><a href="coming-soon.html">Coming soon page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown position-static">
                                        <span class="label-note-new"></span>
                                        <a href="javascript:void(0)">Vendor Catalog pages
                                            <i class="ecicon eci-angle-right"></i></a>
                                        <ul class="sub-menu sub-menu-child">
                                            <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a>
                                            </li>
                                            <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                    <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a>
                                    </li>
                                    <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a>
                                    </li>
                                    <li><a href="blog-full-width.html">Blog full width</a></li>
                                    <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                <ul class="sub-menu">
                                    <li><a href="elemets-products.html">Products</a></li>
                                    <li><a href="elemets-typography.html">Typography</a></li>
                                    <li><a href="elemets-title.html">Titles</a></li>
                                    <li><a href="elemets-categories.html">Categories</a></li>
                                    <li><a href="elemets-buttons.html">Buttons</a></li>
                                    <li><a href="elemets-tabs.html">Tabs</a></li>
                                    <li><a href="elemets-accordions.html">Accordions</a></li>
                                    <li><a href="elemets-blog.html">Blogs</a></li>
                                </ul>
                            </li>
                            <li><a href="offer.html">Hot Offers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Main Menu End -->
    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">My Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">Categories</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                    <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                    <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                    <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                    <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Classic Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                            column</a></li>
                                    <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                            column</a></li>
                                    <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                            column</a></li>
                                    <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                            column</a></li>
                                    <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Columns Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                    <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                    <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">List Variation</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                    <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a>
                                    </li>
                                    <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a>
                                    </li>
                                    <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                </ul>
                            </li>
                            <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img
                                        class="img-responsive" src="assets/images/menu-banner/1.jpg"
                                        alt=""></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Products</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Product page</a>
                                <ul class="sub-menu">
                                    <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                    <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product 360</a>
                                <ul class="sub-menu">
                                    <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                    <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product vodeo</a>
                                <ul class="sub-menu">
                                    <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                    <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Product gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a>
                                    </li>
                                    <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="product-full-width.html">Product full width</a></li>
                            <li><a href="product-360-full-width.html">360 full width</a></li>
                            <li><a href="product-video-full-width.html">Video full width</a></li>
                            <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Others</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Mail Confirmation</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                    <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                    <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                    <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                    <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Mail Reset password</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-forgot-password-1.html">Reset password 1</a>
                                    </li>
                                    <li><a href="email-template-forgot-password-2.html">Reset password 2</a>
                                    </li>
                                    <li><a href="email-template-forgot-password-3.html">Reset password 3</a>
                                    </li>
                                    <li><a href="email-template-forgot-password-4.html">Reset password 4</a>
                                    </li>
                                    <li><a href="email-template-forgot-password-5.html">Reset password 5</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Mail Promotional</a>
                                <ul class="sub-menu">
                                    <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                    <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                    <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                    <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                    <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                    <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                    <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                    <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                    <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                    <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                    <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">User Account Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="user-profile.html">User Profile</a></li>
                                    <li><a href="user-history.html">User History</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="track-order.html">Track Order</a></li>
                                    <li><a href="user-invoice.html">User Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Construction Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="404-error-page.html">404 Error Page</a></li>
                                    <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                    <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                    <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="track-order.html">Track Order</a></li>
                            <li><a href="terms-condition.html">Terms Condition</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                            <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                            <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                            <li><a href="blog-full-width.html">Blog full width</a></li>
                            <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                        <ul class="sub-menu">
                            <li><a href="elemets-products.html">Products</a></li>
                            <li><a href="elemets-typography.html">Typography</a></li>
                            <li><a href="elemets-title.html">Titles</a></li>
                            <li><a href="elemets-categories.html">Categories</a></li>
                            <li><a href="elemets-buttons.html">Buttons</a></li>
                            <li><a href="elemets-tabs.html">Tabs</a></li>
                            <li><a href="elemets-accordions.html">Accordions</a></li>
                            <li><a href="elemets-blog.html">Blogs</a></li>
                        </ul>
                    </li>
                    <li><a href="offer.html">Hot Offers</a></li>
                </ul>
            </div>
            <div class="header-res-lan-curr">
                <div class="header-top-lan-curr">
                    <!-- Language Start -->
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Italiano</a></li>
                        </ul>
                    </div>
                    <!-- Language End -->
                    <!-- Currency Start -->
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                            <li><a class="dropdown-item" href="#">EUR €</a></li>
                        </ul>
                    </div>
                    <!-- Currency End -->
                </div>
                <!-- Social Start -->
                <div class="header-res-social">
                    <div class="header-top-social">
                        <ul class="mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                        class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                        class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                        class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                        class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>
<!-- Header End  -->

<!-- ekka Cart Start -->
@auth
    <!-- Ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    @php
                        $subtotal = 0;
                    @endphp
                    @forelse ($carts as $cart)
                        @php
                            $subtotal += $cart->product->price * $cart->quantity;
                            $images = json_decode($cart->product->images);
                        @endphp
                        <li>
                            <a href="#" class="sidecart_pro_img"><img
                                    src="{{ isset($images) ? asset("$images[0]") : '' }}" alt="product"></a>
                            <div class="ec-pro-content">
                                <a href="#" class="cart_pro_title">{{ $cart->product->name }}</a>
                                <span class="cart-price"><span>Rp. {{ $cart->product->price }}</span> x
                                        {{ $cart->quantity }}</span>
                                {{-- <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                </div> --}}
                                <a href="{{ route('deleteCart', $cart->id) }}" class="remove">×</a>
                            </div>
                        </li>
                    @empty
                    @endforelse
                    {{-- <li>
                    <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                            src="assets/images/product-image/96_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Running & Trekking Shoes -
                            White</a>
                        <span class="cart-price"><span>$150.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                            src="assets/images/product-image/111_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                        <span class="cart-price"><span>$950.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="#" class="remove">×</a>
                    </div>
                </li> --}}
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    @php
                        $ppn = ($subtotal * 11) / 100;
                    @endphp
                    <table class="table cart-table">
                        <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">Rp. {{ $subtotal }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">PPN (11%) :</td>
                            <td class="text-right">Rp. {{ $ppn }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">Rp. {{ $subtotal + $ppn }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    {{-- <a href="{{route('cart.store')}}" class="btn btn-primary">Simpan Cart</a> --}}
                    <a href="{{ route('checkout') }}" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ekka Cart End -->
@endauth
<!-- ekka Cart End -->

<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">

                <!-- Single product content Start -->
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        @php
                                            $images = json_decode($data->images);
                                        @endphp
                                        @forelse ($images as $item)
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="{{asset($item)}}"
                                                     alt="">
                                            </div>
                                        @empty

                                        @endforelse
                                    </div>
                                    <div class="single-nav-thumb">
                                        @forelse ($images as $item)
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{asset($item)}}"
                                                     alt="">
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="single-pro-desc">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title">{{$data->name}}</h5>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </div>
                                        <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                                    review this product</a></span>
                                    </div>
                                    <div class="ec-single-desc">{{$data->description}}
                                    </div>

                                    <div class="ec-single-price-stoke">
                                        <div class="ec-single-price">
                                            <span class="ec-single-ps-title">As low as</span>
                                            <span class="new-price">Rp. {{$data->price}}</span>
                                        </div>
                                        <div class="ec-single-stoke">
                                            <span class="ec-single-ps-title">IN STOCK</span>
                                            <span class="ec-single-sku">SKU#: {{$data->id}}000{{$data->brand_id}}</span>
                                        </div>
                                    </div>

                                    <div class="ec-pro-variation">
                                        <div class="ec-pro-variation-inner ec-pro-variation-size">
                                            <span>SIZE</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    <li class="active"><span>S</span></li>
                                                    <li><span>M</span></li>
                                                    <li><span>L</span></li>
                                                    <li><span>XL</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ec-pro-variation-inner ec-pro-variation-color">
                                            <span>Color</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    <li class="active"><span
                                                            style="background-color:#1b4a87"></span></li>
                                                    <li><span style="background-color:#5f94d6"></span></li>
                                                    <li><span style="background-color:#72aea2"></span></li>
                                                    <li><span style="background-color:#c79782"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="ec_qtybtn" value="1"/>
                                        </div>
                                        <div class="ec-single-cart ">
                                            <a href="{{route('add.to.cart', $data->id)}}" class="btn btn-primary">Add To Cart</a>
{{--                                            <button class="btn btn-primary">Add To Cart</button>--}}
                                        </div>
                                        <div class="ec-single-quickview">
                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                    src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                    alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="ec-single-social">
                                        <ul class="mb-0">
                                            <li class="list-inline-item facebook"><a href="#"><i
                                                        class="ecicon eci-facebook"></i></a></li>
                                            <li class="list-inline-item twitter"><a href="#"><i
                                                        class="ecicon eci-twitter"></i></a></li>
                                            <li class="list-inline-item instagram"><a href="#"><i
                                                        class="ecicon eci-instagram"></i></a></li>
                                            <li class="list-inline-item youtube-play"><a href="#"><i
                                                        class="ecicon eci-youtube-play"></i></a></li>
                                            <li class="list-inline-item behance"><a href="#"><i
                                                        class="ecicon eci-behance"></i></a></li>
                                            <li class="list-inline-item whatsapp"><a href="#"><i
                                                        class="ecicon eci-whatsapp"></i></a></li>
                                            <li class="list-inline-item plus"><a href="#"><i
                                                        class="ecicon eci-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single product content End -->
                <!-- Single product tab start -->
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab"
                                       data-bs-target="#ec-spt-nav-details" role="tablist">Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                       role="tablist">More Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                       role="tablist">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    <p>
                                        {{$data->description}}
                                    </p>
                                </div>
                            </div>
                            <div id="ec-spt-nav-info" class="tab-pane fade">
                                <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        <li><span>Weight</span> 1000 g</li>
                                        <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                        <li><span>Color</span> Black, Pink, Red, White</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/1.jpg" alt=""/>
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Jeny Doe</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/2.jpg" alt=""/>
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Linda Morgus</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ec-ratting-content">
                                        <h3>Add a Review</h3>
                                        <div class="ec-ratting-form">
                                            <form action="#">
                                                <div class="ec-ratting-star">
                                                    <span>Your rating:</span>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-name" placeholder="Name" type="text"/>
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-email" placeholder="Email*" type="email"
                                                           required/>
                                                </div>
                                                <div class="ec-ratting-input form-submit">
                                                        <textarea name="your-commemt"
                                                                  placeholder="Enter Your Comment"></textarea>
                                                    <button class="btn btn-primary" type="submit"
                                                            value="Submit">Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>
        </div>
    </div>
</section>
<!-- End Single product -->

<!-- Footer Start -->
<footer class="ec-footer section-space-mt">
    <div class="footer-container">
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 ec-footer-contact">
                        <div class="ec-footer-widget">
                            <div class="ec-footer-logo"><a href="/"><img
                                        src="{{asset('')}}assets/images/logo/footer-logo.png"
                                        alt=""><img class="dark-footer-logo"
                                                    src="{{asset('')}}assets/images/logo/dark-logo.png"
                                                    alt="Site Logo"
                                                    style="display: none;"/></a></div>
                            <h4 class="ec-footer-heading">Contact us</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                    <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                            0123 456 789</a></li>
                                    <li class="ec-footer-link"><span>Email:</span><a
                                            href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-info">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Information</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                    <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                    <li class="ec-footer-link"><a href="#">Delivery Information</a></li>
                                    <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-account">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Account</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">My Account</a></li>
                                    <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                    <li class="ec-footer-link"><a href="#">Wish List</a></li>
                                    <li class="ec-footer-link"><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Services</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                    <li class="ec-footer-link"><a href="#">Policy & policy </a></li>
                                    <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                    <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-news">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Newsletter</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">Get instant updates about our new products and
                                        special promos!
                                    </li>
                                </ul>
                                <div class="ec-subscribe-form">
                                    <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                          action="#">
                                        <div id="ec_news_signup" class="ec-form">
                                            <input class="ec-email" type="email" required=""
                                                   placeholder="Enter your email here..." name="ec-email" value=""/>
                                            <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                                                                                 aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Footer social Start -->
                    <div class="col text-left footer-bottom-left">
                        <div class="footer-bottom-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                            class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                            class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                            class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                            class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer social End -->
                    <!-- Footer Copyright Start -->
                    <div class="col text-center footer-copy">
                        <div class="footer-bottom-copy ">
                            <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
                                                                          href="/">Hayo<span>.</span></a>. All Rights
                                Reserved
                            </div>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->
                    <!-- Footer payment -->
                    <div class="col footer-bottom-right">
                        <div class="footer-bottom-payment d-flex justify-content-end">
                            <div class="payment-link">
                                <img src="assets/images/icons/payment.png" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- Footer payment -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Modal -->
<div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- Swiper -->
                        <div class="qty-product-cover">
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                            </div>
                        </div>
                        <div class="qty-nav-thumb">
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="quickview-pro-content">
                            <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for
                                    women</a>
                            </h5>
                            <div class="ec-quickview-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>

                            <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s,
                            </div>
                            <div class="ec-quickview-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </div>

                            <div class="ec-pro-variation">
                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                    <span>Color</span>
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch">
                                            <li><span style="background-color:#696d62;"></span></li>
                                            <li><span style="background-color:#d73808;"></span></li>
                                            <li><span style="background-color:#577023;"></span></li>
                                            <li><span style="background-color:#2ea1cd;"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                    <span>Size</span>
                                    <div class="ec-pro-variation-content">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                  data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-quickview-qty">
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1"/>
                                </div>
                                <div class="ec-quickview-cart ">
                                    <button class="btn btn-primary"><img src="{{asset('')}}assets/images/icons/cart.svg"
                                                                         class="svg_img pro_svg" alt=""/> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Footer navigation panel for responsive display -->
<div class="ec-nav-toolbar">
    <div class="container">
        <div class="ec-nav-panel">
            <div class="ec-nav-panel-icons">
                <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                        src="assets/images/icons/menu.svg" class="svg_img header_svg" alt=""/></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                        src="assets/images/icons/cart.svg" class="svg_img header_svg" alt=""/><span
                        class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="/" class="ec-header-btn"><img src="{{asset('')}}assets/images/icons/home.svg"
                                                       class="svg_img header_svg" alt="icon"/></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="login.html" class="ec-header-btn"><img src="{{asset('')}}assets/images/icons/user.svg"
                                                                class="svg_img header_svg" alt="icon"/></a>
            </div>

        </div>
    </div>
</div>
<!-- Footer navigation panel for responsive display end -->

<!-- Recent Purchase Popup  -->
<div class="recent-purchase">
    <img src="{{asset('')}}assets/images/product-image/1.jpg" alt="payment image">
    <div class="detail">
        <p>Someone in new just bought</p>
        <h6>stylish baby shoes</h6>
        <p>10 Minutes ago</p>
    </div>
    <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
</div>
<!-- Recent Purchase Popup end -->

<!-- Cart Floating Button -->
<div class="ec-cart-float">
    <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
        <div class="header-icon"><img src="{{asset('')}}assets/images/icons/cart.svg" class="svg_img header_svg"
                                      alt=""/></div>
        <span class="ec-cart-count cart-count-lable">3</span>
    </a>
</div>
<!-- Cart Floating Button end -->

<!-- Vendor JS -->
<script src="{{asset('')}}assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="{{asset('')}}assets/js/vendor/popper.min.js"></script>
<script src="{{asset('')}}assets/js/vendor/bootstrap.min.js"></script>
<script src="{{asset('')}}assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="{{asset('')}}assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!--Plugins JS-->
<script src="{{asset('')}}assets/js/plugins/swiper-bundle.min.js"></script>
<script src="{{asset('')}}assets/js/plugins/countdownTimer.min.js"></script>
<script src="{{asset('')}}assets/js/plugins/scrollup.js"></script>
<script src="{{asset('')}}assets/js/plugins/jquery.zoom.min.js"></script>
<script src="{{asset('')}}assets/js/plugins/slick.min.js"></script>
<script src="{{asset('')}}assets/js/plugins/infiniteslidev2.js"></script>
<script src="{{asset('')}}assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="{{asset('')}}assets/js/plugins/jquery.sticky-sidebar.js"></script>
<!-- Google translate Js -->
<script src="{{asset('')}}assets/js/vendor/google-translate.js"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
@include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@11'])

@stack('scripts')
<!-- Main Js -->
<script src="{{asset('')}}assets/js/vendor/index.js"></script>
<script src="{{asset('')}}assets/js/main.js"></script>

</body>
</html>
