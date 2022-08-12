<!-- header start -->
<header class="site-header site-header__3 position-absolute">
    <div class="menu-area menu-area__3">
        <div class="container-fluid custom-width custom-width__2">
            <div class="row d-none d-xl-flex">
                <div class="col-xl-5 col-lg-4 col-md-5 align-self-center">
                    <div class="main-menu main-menu__3">
                        <nav>
                            <ul>
                                <li class="menu-item-has-children active"><a href="javascript:;">Kahve</a>
                                    <ul class="sub-menu">
                                        <li class="active"><a href="{{ route('category',1) }}">Harman Kahveler</a></li>
                                        <li><a href="{{ route('category',2) }}">Kafeinsiz Kahveler</a></li>
                                        <li><a href="{{ route('category',3) }}">Yöresel Kahveler</a></li>
                                        <li><a href="{{ route('category',4) }}">Tadım Paketi</a></li>
                                        <li><a href="{{ route('category',5) }}">Kahve Aboneliği</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('about')}}">Hakkımızda</a></li>
                                <li><a href="menu.html">Menu</a></li>
                                <li><a href="reservation.html">Reservation</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 d-none d-lg-block text-center align-self-center">
                    <div class="logo">
                        <a href="/.">
                            <img src="{{asset('assets/images/logo/logo.png')}}" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-7 align-self-center">
                    <div class="menu-area__right menu-area__right--3 d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu__3">
                            <nav>
                                <ul>
                                    <li><a href="#0">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="chefs.html">Chefs</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="story.html">Story</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Shop Cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">İletişim</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="wrapper pl-50 d-flex justify-content-end align-items-center">
                            <div class="search">
                                <div class="search__trigger item">
                                    <span class="open"><i class="far fa-search"></i></span>
                                    <span class="close"><i class="fal fa-times"></i></span>
                                </div>
                                <div class="search__form">
                                    <form role="search" method="get" action="index.html">
                                        <input type="search" name="s" value="" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="item">
                                <a href="{{route('login')}}"> <i class="far fa-user"></i></a>
                            </div>
                            <div class="cart cart-trigger item position-relative">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="cart__count">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-lg-flex d-xl-none">
                <div class="col-xl-9 col-lg-10 col-6">
                    <div class="wrapper-for-lg d-flex align-items-center">
                        <div class="logo d-lg-none">
                            <a href="index.html">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="img">
                            </a>
                        </div>
                        <div class="main-menu main-menu__3">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="menu-item-has-children active"><a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Home 01</a></li>
                                            <li><a href="home-2.html">Home 02</a></li>
                                            <li><a href="home-3.html">Home 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="menu.html">Menu</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="#0">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="chefs.html">Chefs</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="story.html">Story</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Shop Cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-6 align-self-center">
                    <div class="menu-area__right d-flex justify-content-end align-items-center">
                        <div class="search">
                            <div class="search__trigger item">
                                <span class="open"><i class="far fa-search"></i></span>
                                <span class="close"><i class="fal fa-times"></i></span>
                            </div>
                            <div class="search__form">
                                <form role="search" method="get" action="index.html">
                                    <input type="search" name="s" value="" placeholder="Search Keywords">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="hamburger-trigger item">
                            <i class="far fa-bars"></i>
                        </div>
                        <div class="cart cart-trigger item position-relative">
                            <i class="fa fa-shopping-basket"></i>
                            <span class="cart__count">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
