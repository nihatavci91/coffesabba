@include('main_theme.head')

<body class="dark-bg">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- preloader  -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
            </div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->
@include('main_theme.header')

<!-- side info for mobile view -->
<aside class="side-info-wrapper mm-only">
    <nav>
        <div class="nav" id="nav-tab" role="tablist">
            <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
               href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
               aria-selected="true">Menu</a>
            <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
               role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
        </div>
    </nav>
    <div class="side-info__wrapper d-flex align-items-center justify-content-between">
        <div class="side-info__logo">
            <a href="index.html">
                <img src="{{asset('assets/images/logo/logo-black.png')}}" alt="logo">
            </a>
        </div>
        <div class="side-info__close">
            <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
             aria-labelledby="menu-tab-1-tab">
            <div class="mobile-menu"></div>
        </div>
        <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
             aria-labelledby="menu-tab-2-tab">
            <div class="side-info">
                <div class="side-info__content mb-35">
                    <h4 class="title mb-5">About us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                    <a class="site-btn mt-20" href="contact.html">Contact us</a>
                </div>
                <div class="contact__info--wrapper mt-15">
                    <h4 class="title mb-10">Contact us</h4>
                    <ul class="contact__info list-unstyled">
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Bowery St., New York, NY 10013, USA</p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone"></i></span>
                            <p>+1255-568-6523</p>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-open-text"></i></span>
                            <p>information@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#0"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- side info for desktop view -->
<aside class="side-info-wrapper show-all">
    <div class="side-info__wrapper d-flex align-items-center justify-content-between">
        <div class="side-info__logo">
            <a href="index.html">
                <img src="assets/images/logo/logo-black.png" alt="logo">
            </a>
        </div>
        <div class="side-info__close">
            <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="side-info">
        <div class="side-info__content mb-35">
            <h4 class="title mb-5">About us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
            <a class="site-btn mt-20" href="contact.html">Contact us</a>
        </div>
        <div class="contact__info--wrapper mt-15">
            <h4 class="title mb-10">Contact us</h4>
            <ul class="contact__info list-unstyled">
                <li>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <p>Bowery St., New York, NY 10013, USA</p>
                </li>
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p>+1255-568-6523</p>
                </li>
                <li>
                    <span><i class="fas fa-envelope-open-text"></i></span>
                    <p>information@gmail.com</p>
                </li>
            </ul>
        </div>
        <div class="social-links mt-20 d-flex justify-content-start align-items-center">
            <a href="#0"><i class="fab fa-facebook-f"></i></a>
            <a href="#0"><i class="fab fa-twitter"></i></a>
            <a href="#0"><i class="fab fa-google-plus-g"></i></a>
            <a href="#0"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</aside>

<!-- cart list -->
<aside class="cart-bar-wrapper">
    <div class="cart-bar__close">
        <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>
    <div class="cart-bar">
        <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
        <div class="cart-bar__lists">
            <div class="cart-bar__item position-relative d-flex">
                <div class="thumb">
                    <img src="assets/images/top-grade/tg-1.png" alt="image_not_found">
                </div>
                <div class="content">
                    <h4 class="title">
                        <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                    </h4>
                    <span class="price">$19.00</span>
                    <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                </div>
            </div>
            <div class="cart-bar__item position-relative d-flex">
                <div class="thumb">
                    <img src="assets/images/top-grade/tg-2.png" alt="image_not_found">
                </div>
                <div class="content">
                    <h4 class="title">
                        <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                    </h4>
                    <span class="price">$36.00</span>
                    <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                </div>
            </div>
            <div class="cart-bar__item position-relative d-flex">
                <div class="thumb">
                    <img src="assets/images/top-grade/tg-3.png" alt="image_not_found">
                </div>
                <div class="content">
                    <h4 class="title">
                        <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                    </h4>
                    <span class="price">$20.00</span>
                    <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                </div>
            </div>
            <div class="cart-bar__item position-relative d-flex">
                <div class="thumb">
                    <img src="assets/images/top-grade/tg-4.png" alt="image_not_found">
                </div>
                <div class="content">
                    <h4 class="title">
                        <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                    </h4>
                    <span class="price">$20.00</span>
                    <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
            <span>Sub Total:</span>
            <span>$87.00</span>
        </div>
        <div class="btns d-flex align-items-center justify-content-center">
            <a href="cart.html" class="site-btn">View Cart</a>
            <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
        </div>
    </div>
</aside>
<div class="overlay"></div>

<main>
    <!-- hero area start -->
    <section class="hero__area hero__area--3 bg_img" data-overlay="dark" data-opacity="4" data-background="assets/images/hero/hero-img-3-1.jpeg">
        <div class="container-fluid custom-width custom-width__2">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8 align-self-center">
                    <div class="hero__content hero__content--3 position-relative">
                        <h1 class="title mb-20">rosted coffee <br>
                            for you </h1>
                        <p>The coffee is brewed by first roasting the green coffee beans over hot <br> coals in a brazier. given an opportunity to sample.</p>
                        <div class="btns mt-45 d-flex align-items-center justify-content-start">
                            <a href="about.html" class="site-btn">testy Coffee</a>
                            <a href="contact.html" class="site-btn site-btn__borderd site-btn__borderd--double">Read More</a>
                        </div>
                        <div class="social-links mt-60 d-flex justify-content-start align-items-center">
                            <a href="#0"><i class="fab fa-facebook"></i> <span>Facebook</span></a>
                            <a href="#0"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
                            <a href="#0"><i class="fab fa-youtube"></i> <span>youtube</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-4">
                    <div class="vide-wrapper">
                        <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection" data-animation="fadeInLeft" class="video-btn video-btn__2 video-btn__2--white d-flex align-items-center"><i class="fas fa-play"></i><span class="border-effect">play video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- feature slider start -->
    <div class="feature__area feature__area--3 dark-bg pt-120" data-overlay="dark" data-opacity="9">
        <div class="container-fluid custom-width custom-width__2">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                    <div class="feature__item feature__item--3 bg_img" data-background="assets/images/products/f-1.jpeg">
                        <div class="shape"><img src="assets/images/shape/f-shape-1.png" alt=""></div>
                        <div class="content">
                            <span class="count">01</span>
                            <h2 class="title mb-10">Best Coffee flavour</h2>
                            <p>Curabitur semper erat a lacusey sedn consequat, sit ametey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                    <div class="feature__item feature__item--3 bg_img" data-background="assets/images/products/f-2.jpeg">
                        <div class="shape"><img src="assets/images/shape/f-shape-1.png" alt=""></div>
                        <div class="content">
                            <span class="count">02</span>
                            <h2 class="title mb-10">Place to Get Lost</h2>
                            <p>Curabitur semper erat a lacusey sedn consequat, sit ametey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                    <div class="feature__item feature__item--3 bg_img" data-background="assets/images/products/f-3.jpeg">
                        <div class="shape"><img src="assets/images/shape/f-shape-1.png" alt=""></div>
                        <div class="content">
                            <span class="count">03</span>
                            <h2 class="title mb-10">Proper Roesting</h2>
                            <p>Curabitur semper erat a lacusey sedn consequat, sit ametey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature slider end -->

    <!-- history area start -->
    <section class="about__area about__area--3 dark-bg position-relative pt-120">
        <div class="container-fluid custom-width custom-width__2">
            <div class="row g-0">
                <div class="col-xl-6 d-flex">
                    <div class="about__left about__left--3 d-flex align-items-stretch">
                        <img src="assets/images/about/about-bg-3-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about__right about__history">
                        <div class="section-heading">
                            <span class="sub-title">our history</span>
                            <h2 class="title mb-25">Create a new story with us</h2>
                            <p>Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus. Cras massa nibhtincidunt.</p>
                            <p>Donec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- history area end -->

    <!-- populer product area start -->
    <section class="pp__area pp__area--2 dark-bg position-relative pt-120 bg_img" data-opacity="6" data-overlay="dark" data-background="assets/images/bg/pp-bg-3-1.jpeg">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <span class="sub-title">Popular Product</span>
                        <h2 class="title">cafena Popular Product</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="btns-wrapper text-center text-lg-end">
                        <a href="shop.html" class="site-btn mt-none-10">View all Product</a>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="pp__item pp__item--3 active text-center pt-30 pb-25">
                        <div class="pp__action d-flex align-items-center justify-content-center">
                            <div class="cart d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                            </div>
                            <div class="wishlist d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-heart"></i></a>
                            </div>
                            <div class="view d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="pp__thumb mt-30">
                            <img class="default" src="assets/images/products/pp-1.png" alt="">
                            <img class="on-hover" src="assets/images/products/pp-2.png" alt="">
                        </div>
                        <div class="pp__content mt-40">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat">
                                    <a href="#0">Coffee</a>
                                </div>
                                <div class="pp__rating d-flex align-items-center justify-content-center">
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fal fa-star"></i></a>
                                    <a href="#0"><i class="fal fa-star"></i></a>
                                </div>
                            </div>
                            <h4 class="pp__title mt-10">
                                <a href="product-details.html">BRAZIL COFFEE GRED</a>
                            </h4>
                            <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="pp__item pp__item--3 text-center pt-30 pb-25">
                        <div class="pp__action d-flex align-items-center justify-content-center">
                            <div class="cart d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                            </div>
                            <div class="wishlist d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-heart"></i></a>
                            </div>
                            <div class="view d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="pp__thumb mt-30">
                            <img class="default" src="assets/images/products/pp-2.png" alt="">
                            <img class="on-hover" src="assets/images/products/pp-1.png" alt="">
                        </div>
                        <div class="pp__content mt-40">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat">
                                    <a href="#0">Coffee</a>
                                </div>
                                <div class="pp__rating d-flex align-items-center justify-content-center">
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fal fa-star"></i></a>
                                    <a href="#0"><i class="fal fa-star"></i></a>
                                </div>
                            </div>
                            <h4 class="pp__title mt-10">
                                <a href="product-details.html">vicaragua Coffee Beans</a>
                            </h4>
                            <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="pp__item pp__item--3 text-center pt-30 pb-25">
                        <div class="pp__action d-flex align-items-center justify-content-center">
                            <div class="cart d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                            </div>
                            <div class="wishlist d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-heart"></i></a>
                            </div>
                            <div class="view d-flex align-items-center justify-content-center">
                                <a href="#0"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="pp__thumb mt-30">
                            <img class="default" src="assets/images/products/pp-3.png" alt="">
                            <img class="on-hover" src="assets/images/products/pp-2.png" alt="">
                        </div>
                        <div class="pp__content mt-40">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat">
                                    <a href="#0">Coffee</a>
                                </div>
                                <div class="pp__rating d-flex align-items-center justify-content-center">
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fas fa-star"></i></a>
                                    <a href="#0"><i class="fal fa-star"></i></a>
                                    <a href="#0"><i class="fal fa-star"></i></a>
                                </div>
                            </div>
                            <h4 class="pp__title mt-10">
                                <a href="product-details.html">AMERICANO COFFEE</a>
                            </h4>
                            <div class="pp__price mt-10 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonail area start -->
        <div class="testimonial__area testimonial__area--2 pt-115 pb-115 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading mb-40">
                            <h2 class="title">Biz Kimiz ?</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-xl-12">
                        <div class="testimonial__active owl-carousel slider-nav">
                            <div class="testimonial__item text-center">
                                <div class="row g-0 justify-content-center">
                                    <div class="col-xl-8">
                                            <span class="quote mb-20">
                                                <img src="assets/images/logo/logo.png" alt="" style="width: 5em">
                                            </span>
                                        <p>Her hafta taze kavrulmuş kahveleri siz kahve severlerle paylaşmaktan gurur duyuyoruz. Bilgileri paylaşırken eğtimlerimizi aksatmadan doğru bilgi paylaşımı yaptık. Şimdi siz değerli misafirlerimizi bekliyoruz. 2007 yılından beri Türkiye’de kahve yarışmalarına girip, Türkiye’yi dünya kahve yarışmalarında temsil ettik. </p>

                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item text-center">
                                <div class="row g-0 justify-content-center">
                                    <div class="col-xl-8">
                                            <span class="quote mb-20">
                                                <img src="assets/images/logo/logo.png" alt="" style="width: 5em">
                                            </span>
                                        <p>8 Sene önceki hayalimi gerçekleştirmek için yatırımcılarımla beraber bu yola çıktık. Nitelikli kahveyi insanlara ulaştırmak ve bununla beraber birçok çeşitli kahveyi kahve severlere anlatmak,konuşmak,tartışmak ve doğru kahveyi nasıl yapıcaklarını elde etmek için doğru bilgileri kahve severlere anlatmak birinci görevimiz oldu. 2021 yılının mart ayında dükkanımızı açtık. Yatırımcılarımla beraber birçok bilgiyi paylaşmak için İstanbul Bebek’te ilk Take away al götür kafemizi açtık. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonail area end -->
    </section>
    <!-- populer product area end -->

    <!-- product popup start -->
    <div class="product-popup product-popup-1">
        <div class="view-background">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="quickview d-flex align-items-center justify-content-center">
                        <div class="quickview__thumb">
                            <img src="assets/images/products/pp-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2>VICARAGUA COFFEE BEANS</h2>
                            <a class="view_close product-p-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="viewcontent__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="viewcontent__price">
                            <h4><span>$</span>99.00</h4>
                        </div>
                        <div class="viewcontent__stock">
                            <h4>Available :<span> In stock</span></h4>
                        </div>
                        <div class="viewcontent__details">
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium risus lacinia vel. Fusce eget turpis orci.</p>
                        </div>
                        <div class="viewcontent__action">
                            <span>Qty</span>
                            <input type="number" placeholder="1">
                            <a class="site-btn" href="#">add to cart</a>
                        </div>
                        <div class="viewcontent__footer">
                            <ul class="list-unstyled">
                                <li>Category:</li>
                                <li>SKU:</li>
                                <li>Brand:</li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>Watches</li>
                                <li>2584-MK63</li>
                                <li>Brenda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product popup end -->

    <!-- product popup start -->
    <div class="product-popup popup-coffe-mechine">
        <div class="view-background">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="quickview d-flex align-items-center justify-content-center">
                        <div class="quickview__thumb">
                            <img src="assets/images/products/product-big.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2>VICARAGUA COFFEE BEANS</h2>
                            <a class="view_close product-p-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="viewcontent__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="viewcontent__price">
                            <h4><span>$</span>99.00</h4>
                        </div>
                        <div class="viewcontent__stock">
                            <h4>Available :<span> In stock</span></h4>
                        </div>
                        <div class="viewcontent__details">
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium risus lacinia vel. Fusce eget turpis orci.</p>
                        </div>
                        <div class="viewcontent__action">
                            <span>Qty</span>
                            <input type="number" placeholder="1">
                            <a class="site-btn" href="#">add to cart</a>
                        </div>
                        <div class="viewcontent__footer">
                            <ul class="list-unstyled">
                                <li>Category:</li>
                                <li>SKU:</li>
                                <li>Brand:</li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>Watches</li>
                                <li>2584-MK63</li>
                                <li>Brenda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product popup end -->

    <!-- reservation area start -->
    <section class="reservation__area pt-120 pb-120 dark-bg">
        <div class="container-fluid custom-width">
            <div class="row g-0">
                <div class="col-xl-6">
                    <div id="reservemap"></div>
                </div>
                <div class="col-xl-6">
                    <div class="reservation__wrapper">
                        <div class="section-heading text-center mb-50">
                            <span class="sub-title">Reservation</span>
                            <h2 class="title">booking a table</h2>
                        </div>
                        <div class="reservation__form mt-none-20 text-center">
                            <form action="index.html">
                                <div class="from-group position-relative mt-20">
                                    <input type="text" name="name" placeholder="4 Person">
                                    <span class="icon"><i class="fal fa-user-alt"></i></span>
                                </div>
                                <div class="from-group position-relative mt-20">
                                    <input type="text" name="name" placeholder="12,2,2021">
                                    <span class="icon"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <div class="from-group position-relative mt-20">
                                    <input type="text" name="name" placeholder="11:00 PM">
                                    <span class="icon"><i class="fal fa-clock"></i></span>
                                </div>
                                <button type="submit" class="site-btn mt-40">Book A Table</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reservation area end -->
</main>

@include("main_theme.footer")
