@include("main_theme.head")

<body>
@include("main_theme.header")



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
    <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg" data-overlay="dark" data-opacity="5">
        <div class="shape shape__1"><img src="{{asset('assets/images/shape/breadcrumb-shape-1.png')}}" alt=""></div>
        <div class="shape shape__2"><img src="{{asset('assets/images/shape/breadcrumb-shape-2.png')}}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title">Hakk??m??zda</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="/."><span>Anasayfa</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>Hakk??m??zda</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="about__area about__area--2 position-relative pt-125 pb-105">
        <span class="shape shape__1 position-absolute"><img src="{{asset('assets/images/shape/about-shape-2-1.png')}}" alt=""></span>
        <span class="shape shape__2 position-absolute"><img src="{{asset('assets/images/shape/about-shape-2-2.png')}}" alt=""></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-7">
                    <div class="about__left about__left--2 position-relative">
                        <img class="big" src="{{asset('assets/images/about/about-img-2-1.png')}}" alt="img">
                        <img class="small position-absolute" src="{{asset('assets/images/about/about-img-2-2.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1">
                    <div class="about__right about__right--2 pl-45 pt-45">
                        <div class="section-heading section-heading__black">
                            <span class="sub-title">Sabba Coffee</span>
                            <h2 class="title mb-25">Hakk??m??zda</h2>
                            <p>8 Sene ??nceki hayalimi ger??ekle??tirmek i??in yat??r??mc??lar??mla beraber bu yola ????kt??k. Nitelikli kahveyi insanlara ula??t??rmak ve bununla beraber bir??ok ??e??itli kahveyi kahve severlere anlatmak,konu??mak,tart????mak ve do??ru kahveyi nas??l yap??caklar??n?? elde etmek i??in do??ru bilgileri kahve severlere anlatmak birinci g??revimiz oldu. 2021 y??l??n??n mart ay??nda d??kkan??m??z?? a??t??k. Yat??r??mc??lar??mla beraber bir??ok bilgiyi payla??mak i??in ??stanbul Bebek???te ilk Take away al g??t??r kafemizi a??t??k. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 class="title mb-25" style="text-align: center; margin-top: 2em">Ba??ar??lar??m??z</h2>
                <div class="col-xl-6 col-lg-6">
                    <ul class="about__list list-unstyled mt-25">
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2007 T??rkiye Barista Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2007 T??rkiye Alkoll?? kahve Yar????mas?? birincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2008 T??rkiye Barista Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2009 T??rkiye Barista Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2010 T??rkiye Barista Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2011 T??rkiye Barista Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2011 T??rkiye Kahve Tad??m Yar????mas?? ikincili??i</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <ul class="about__list list-unstyled mt-25">
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2011 T??rkiye Alkoll?? kahve Yar????mas?? birincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2012 T??rkiye Barista Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2012 T??rkiye Kahve Tad??m  Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2013 T??rkiye Alkoll?? Kahve Yar????mas?? ikincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2013 T??rkiye Kahve Kavurma Yar????mas?? birincili??i</li>
                        <li><span class="icon"><i class="fal fa-check"></i></span> 2019 T??rkiye Kahve Tad??m Yar????mas?? Birincili??i.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- wcu section start -->
    <section class="wcu__area pb-120">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30 text-center">
                    <div class="wcu__item">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/wcu-1.png')}}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">testy coffee recipe</h2>
                            <p> En kaliteli kahve </p>
                            <a href="javascript:;" class="inline-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30 text-center">
                    <div class="wcu__item">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/wcu-2.png')}}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Great Location</h2>
                            <p>En kaliteli kahve</p>
                            <a href="javascript:;" class="inline-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30 text-center">
                    <div class="wcu__item">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/wcu-1.png')}}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title">Professional Chef</h2>
                            <p>??imdi siz kahve severleri kafemize bekliyoruz.</p>
                            <a href="javascript:;" class="inline-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wcu section end -->

    <!-- best-coffe section start -->
    <div class="best-coffe__area position-relative">
        <div class="best-coffe__bg">
            <img src="{{asset('assets/images/bg/best-coffe-1.jpeg')}}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 pl-35">
                    <div class="best-coffe__wrapper">
                        <div class="section-heading section-heading__black">
                            <h2 class="title mb-25">Misyonumuz ve Vizyonumuz</h2>
                            <p>Taze kahvenin nas??l olmas?? gerekti??ini kahve al??rken nelere dikkat etmemiz gerekti??ini insanlarla payla??arak kahve severleri bilgilendirmek i??in elimizden gelenin fazlas??n?? yapmak i??in ??al??????yor ve ??al????maya devam ediyoruz. </p>
                            <p>Her hafta taze kavrulmu?? kahveleri siz kahve severlerle payla??maktan gurur duyuyoruz. Bilgileri payla????rken e??timlerimizi aksatmadan do??ru bilgi payla????m?? yapt??k. ??imdi siz de??erli misafirlerimizi bekliyoruz. 2007 y??l??ndan beri T??rkiye???de kahve yar????malar??na girip, T??rkiye???yi d??nya kahve yar????malar??nda temsil ettik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best-coffe section end -->



</main>
@include("main_theme.footer")
