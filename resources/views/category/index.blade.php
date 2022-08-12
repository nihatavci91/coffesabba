@include('main_theme.head')
<body>
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
                    <img src="{{asset('assets/images/top-grade/tg-1.png')}}" alt="image_not_found">
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
                    <img src="{{asset('assets/images/top-grade/tg-2.png')}}" alt="image_not_found">
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
                    <img src="{{asset('assets/images/top-grade/tg-3.png')}}" alt="image_not_found">
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
                    <img src="{{asset('assets/images/top-grade/tg-4.png')}}" alt="image_not_found">
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
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="{{asset('assets/images/bg/breadcrumb-bg-1.jpeg')}}" data-overlay="dark" data-opacity="5">
        <div class="shape shape__1"><img src="{{asset('assets/images/shape/breadcrumb-shape-1.png')}}" alt=""></div>
        <div class="shape shape__2"><img src="{{asset('assets/images/shape/breadcrumb-shape-2.png')}}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title">{{$category->name}}</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="index.html"><span>Anasayfa</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>{{$category->name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- product popup start -->
    <div class="product-popup product-popup-1">
        <div class="view-background">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="quickview d-flex align-items-center justify-content-center">
                        <div class="quickview__thumb">
                            <img src="{{asset('assets/images/products/pp-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                @foreach($products as $index => $item)
                <div class="col-md-8">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2>{{$item->name}}</h2>
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
                            <p>{{$item->description}}</p>
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
                @endforeach
            </div>
        </div>
    </div>
    <!-- product popup end -->

    <!-- blog area start -->
    <div class="blog-area pt-120 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-filter-wrapper d-flex justify-content-between align-items-center mb-30">
                        <div class="sf-left">
                            <div class="show-text">
                                <span>{{$countproduct}} Ürün Gösteriliyor</span>
                            </div>
                        </div>
                        <div class="sf-right d-flex justify-content-end align-items-center">
                            <nav>
                                <div class="nav" id="shop-filter-tab" role="tablist">
                                    <a class="nav-link active" id="shop-tab-1-tab" data-bs-toggle="tab"
                                       href="#shop-tab-1" role="tab" aria-controls="shop-tab-1"
                                       aria-selected="true"><i class="fas fa-th"></i></a>
                                    <a class="nav-link" id="shop-tab-2-tab" data-bs-toggle="tab" href="#shop-tab-2"
                                       role="tab" aria-controls="shop-tab-2" aria-selected="false"><i class="fas fa-list-ul"></i></a>
                                </div>
                            </nav>
                            <div class="sort-wrapper ml-45">
                                <select name="select" id="select">
                                    <option value="1">Short By New</option>
                                    <option value="2">Short By New</option>
                                    <option value="3">Short By New</option>
                                    <option value="4">Short By New</option>
                                    <option value="5">Short By New</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="tab-content" id="shop-tabContent">
                        <div class="tab-pane fade show mt-none-30 active" id="shop-tab-1" role="tabpanel" aria-labelledby="shop-tab-1-tab">
                            <div class="row">
                                @foreach($products as $index => $item)
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                    <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                        <div class="pp__action pp__action--2 d-flex align-items-center justify-content-center">
                                            <div class="cart d-flex align-items-center justify-content-center">
                                                <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                            </div>
                                        </div>
                                        <div class="pp__thumb pp__thumb--2 mt-35">
                                            <a href="{{ route('product',$item->id) }}">
                                                <img class="default" style="width: 5em;" src="{{ asset('product_images/' . $item->images[0]->image)}}" alt="">
                                            </a>
                                            <a href="{{ route('product',$item->id) }}">
                                                <img class="on-hover" style="width: 7em;" src="{{ asset('product_images/' . $item->images[0]->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="pp__content pp__content--2 mt-25">
                                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                                <div class="pp__cat pp__cat--2">
                                                    <a href="javascript:void(0);">{{$category->name}}</a>
                                                </div>
                                            </div>
                                            <h4 class="pp__title pp__title--2">
                                                <a href="{{ route('product',$item->id) }}">{{$item->name}}</a>
                                            </h4>
                                            <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                                <h6 class="label">{{$item->stocks[0]->weight}}gr. Fiyat - </h6>
                                                <span class="price"> {{$item->stocks[0]->price}}₺ </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade mt-none-30" id="shop-tab-2" role="tabpanel" aria-labelledby="shop-tab-2-tab">
                            <div class="row">
                                @foreach($products as $index => $item)
                                    <div class="col-xl-12 mt-30">
                                    <div class="pp__item pp__item--2 pp__item--list active text-center pt-30 pb-25">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <div class="pp__thumb pp__thumb--2 pp__thumb--list m-0">
                                                    <a href="{{ route('product',$item->id) }}">
                                                        <img class="default" style="width: 5em;" src="{{ asset('product_images/' . $item->images[0]->image)}}" alt="">
                                                    </a>
                                                    <a href="{{ route('product',$item->id) }}">
                                                        <img class="on-hover" style="width: 7em;" src="{{ asset('product_images/' . $item->images[0]->image)}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8">
                                                <div class="pp__content pp__content--2 pp__content--list m-0">
                                                    <div class="pp__c-top d-flex align-items-center">
                                                        <div class="pp__cat pp__cat--2">
                                                            <a href="javascript:void(0);">{{$category->name}}</a>
                                                        </div>
                                                    </div>
                                                    <h4 class="pp__title pp__title--2 pp__title--list">
                                                        <a href="{{ route('product',$item->id) }}">{{$item->name}}</a>
                                                    </h4>
                                                    <div class="pp__price pp__price--2 pp__price--list d-flex align-items-center">
                                                        <h6 class="label">{{$item->stocks[0]->weight}}gr. Fiyat - </h6>
                                                        <span class="price"> {{$item->stocks[0]->price}}₺ </span>
                                                    </div>
                                                    <div class="pp__action pp__action--2 pp__action--list d-flex align-items-center mt-15">
                                                        <div class="cart d-flex align-items-center justify-content-center">
                                                            <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="cafena-pagination mt-60">
                        <ul>
                            <li><a href="#"><span><i class="far fa-angle-double-left"></i></span></a></li>
                            <li><a href="#"><span>01</span></a></li>
                            <li><a href="#"><span class="current">02</span></a></li>
                            <li><a href="#"><span>03</span></a></li>
                            <li><a href="#"><span>...</span></a></li>
                            <li><a href="#"><span>10</span></a></li>
                            <li><a href="#"><span><i class="far fa-angle-double-right"></i></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar blog__sidebar--shop mt-none-30">
                        <div class="widget mt-30">
                            <h2 class="title">Search Here</h2>
                            <form action="index.html" class="search-widget">
                                <input type="search" name="search" id="search" placeholder="Serach Product">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget mt-30">
                            <h2 class="title">Categories</h2>
                            <ul>
                                @foreach($categories as $index => $item)
                                    <li class="cat-item"><a href="{{ route('category',$item->id) }}">{{$item->name}}</a> <span>04</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget slider-range mt-30">
                            <h2 class="title">Price Filter</h2>
                            <div id="slider-range"></div>
                            <p class="d-flex justify-content-between align-items-center">
                                <input type="text" id="amount" readonly>
                                <label for="amount">Filter</label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->


</main>

@include('main_theme.footer')
