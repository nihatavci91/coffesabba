@include("main_theme.head")
<style>
    #radio-config{
        display: none;
    }

    .radio-type-button2.active label{
        border-color: #024;
        border: 1px solid #06bec7;
        background: rgb(27 49 47 / 30%);
    }
</style>
<body>
@include("main_theme.header")


<!-- cart list -->
<aside class="cart-bar-wrapper">
    <div class="cart-bar__close">
        <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i
                class="fal fa-times"></i></a>
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
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img"
             data-background="{{asset('assets/images/bg/breadcrumb-bg-1.jpeg')}}" data-overlay="dark" data-opacity="5">
        <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
        <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title">{{$product->name}}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- product details area start -->
    <div class="product-details__area pt-120 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="product-details__wrapper">
                        <div class="pd-img">
                            <div class="tab-content" id="pdContent">
                                <div class="tab-pane fade show active" id="pd-1" role="tabpanel"
                                     aria-labelledby="pd-1-tab">
                                    <div class="big-img">
                                        <img src="{{ asset('product_images/' . $product->images[0]->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pd-tab">
                            <nav>
                                <div class="nav" id="shop-filter-tab" role="tablist">
                                    @foreach($product->images as $index => $item)
                                        <a class="nav-link active" id="pd-1-tab" data-bs-toggle="tab" href="#pd-1"
                                           role="tab" aria-controls="pd-1" aria-selected="true">
                                            <img src="{{ asset('product_images/' . $item->image)}}" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="product-details__content">
                        <div class="tr-wrapper d-flex align-items-center justify-content-between">
                            <h2 class="title">{{$product->name}}</h2>

                        </div>
                        <p>{{$product->description}}</p>
                        <span class="in-stock">
                            <i class="fal fa-check"></i>Stokta
                        </span>

                        <!-- ÖĞÜTME DERECESİ BAŞLANGIÇ -->
                        <div style="margin: 1em 0em 1em 0em;">
                            <h4>Öğütme Derecesi</h4>
                        </div>

                        <div id="input-option3" class="d-flex flex-wrap">

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; " >
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="5">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/cekirdek.png')}}" alt=" +" width="60px" height="60px"> <p>Çekirdek </p>
			                         </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="12">
                                    <span>
			                             <img src="{{asset('assets/images/ogutme-derecesi/turk-kahvesi.png')}}" alt=" +" width="60px" height="60px"> <p>Türk Kahvesi</p>
                                    </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="6">
                                    <span>
                                        <img src="{{asset('assets/images/ogutme-derecesi/espresso.png')}}" alt=" +" width="60px" height="60px"> <p>Espresso</p>
			                         </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="11">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/mokapot.png')}}" alt=" +" width="60px" height="60px"> <p>Mokapot</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="8">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/aeropress.png')}}" alt=" +" width="60px" height="60px"> <p>Aeropress</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="7">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/filtrekahve.png')}}" alt=" +" width="60px" height="60px"> <p>Filtre Makinesi</p>
                                     </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="13">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/v60.png')}}" alt=" +" width="60px" height="60px"> <p>V60</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="15">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/syphon.png')}}" alt=" +" width="60px" height="60px"> <p>Syphon</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="14">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/chemex.png')}}" alt=" +" width="60px" height="60px"> <p>Chemex</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="16">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/metalfiltre.png')}}" alt=" +" width="60px" height="60px"> <p>Metal Filtre</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="10">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/percolator.png')}}" alt=" +" width="60px" height="60px"> <p>Percolator</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="9">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/french-press.png')}}" alt=" +" width="60px" height="60px"> <p>French Press</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2 active" style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" id="radio-config" name="option[3]" value="17">
                                    <span>
			                            <img src="{{asset('assets/images/ogutme-derecesi/coldbrew.png')}}" alt=" +" width="60px" height="60px"> <p>Cold Brew</p>
			                        </span>
                                </label>
                            </div>

                        </div>

                        <!-- ÖĞÜTME DERECESİ BİTİŞ -->

                        <!-- KAVURMA DERECESİ BAŞLANGIÇ -->

                        <div style="margin: 1em 0em 1em 0em;">
                            <h4>Kavurma Derecesi</h4>
                        </div>

                        <div id="input-option2" class="d-flex flex-wrap">

                            <div class="radio  radio-type-button2 " style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" name="option[2]" value="4" id="radio-config">
                                    <span>
			                            <img src="{{asset('assets/images/kavurma-derecesi/medium.png')}}" alt=" +" width="60px" height="60px"> <p>City Plus (Filtre)</p>
			                        </span>
                                </label>
                            </div>

                            <div class="radio  radio-type-button2 " style="margin:auto 11px auto 0px; font-size: 0.8em; text-align: center; ">
                                <label>
                                    <input type="radio" name="option[2]" value="3" id="radio-config">
                                    <span>
			                            <img src="{{asset('assets/images/kavurma-derecesi/dark.png')}}" alt=" +" width="60px" height="60px"> <p>Full City Plus (Espresso)</p>
			                        </span>
                                </label>
                            </div>

                        </div>

                        @foreach($product->stocks as $index => $item)
                            <input type="radio" id="price_{{$item->id}}" name="price_{{$item->id}}"
                                   value="price{{$item->id}}">
                            <label for="html"><b>{{$item->weight}}gr. Fiyat - </b><b class="price">{{$item->price}}
                                    ₺ </b></label><br>
                        @endforeach

                    </div>


                        <div class="product-quantity d-flex align-items-center">
                            <span>Adet</span>
                            <input type="number" placeholder="1">
                            <a class="site-btn" href="#">sepete ekle</a>
                        </div>
                        <div class="pd-social-wrapper">
                            <span class="share"><i class="fas fa-share"></i> Paylaş</span>
                            <div class="social-links d-flex align-items-center">
                                <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- product details area end -->


    <!-- releted products area start
        <div class="releted-product__area pt-100 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="rp-title mb-30">
                        Diğer Ürünler
                    </h2>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="pp__item pp__item--2 text-center pt-20 pb-20">
                        <div class="pp__action pp__action--2 d-flex align-items-center justify-content-center">
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
                        <div class="pp__thumb pp__thumb--2 mt-35">
                            <img class="default" src="assets/images/products/shop/s-p-1.png" alt="">
                            <img class="on-hover" src="assets/images/products/shop/s-p-2.png" alt="">
                        </div>
                        <div class="pp__content pp__content--2 mt-25">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat pp__cat--2">
                                    <a href="#0">Rosted Coffee</a>
                                </div>
                            </div>
                            <h4 class="pp__title pp__title--2">
                                <a href="product-details.html">vicaragua Coffee Beans</a>
                            </h4>
                            <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="pp__item pp__item--2 text-center pt-20 pb-20">
                        <div class="pp__action pp__action--2 d-flex align-items-center justify-content-center">
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
                        <div class="pp__thumb pp__thumb--2 mt-35">
                            <img class="default" src="assets/images/products/shop/s-p-2.png" alt="">
                            <img class="on-hover" src="assets/images/products/shop/s-p-3.png" alt="">
                        </div>
                        <div class="pp__content pp__content--2 mt-25">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat pp__cat--2">
                                    <a href="#0">Rosted Coffee</a>
                                </div>
                            </div>
                            <h4 class="pp__title pp__title--2">
                                <a href="product-details.html">CAFFÈ LATTE</a>
                            </h4>
                            <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="pp__item pp__item--2 text-center pt-20 pb-20">
                        <div class="pp__action pp__action--2 d-flex align-items-center justify-content-center">
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
                        <div class="pp__thumb pp__thumb--2 mt-35">
                            <img class="default" src="assets/images/products/shop/s-p-3.png" alt="">
                            <img class="on-hover" src="assets/images/products/shop/s-p-4.png" alt="">
                        </div>
                        <div class="pp__content pp__content--2 mt-25">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat pp__cat--2">
                                    <a href="#0">Rosted Coffee</a>
                                </div>
                            </div>
                            <h4 class="pp__title pp__title--2">
                                <a href="product-details.html">JAPANIS COFFEE GRED</a>
                            </h4>
                            <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="pp__item pp__item--2 text-center pt-20 pb-20">
                        <div class="pp__action pp__action--2 d-flex align-items-center justify-content-center">
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
                        <div class="pp__thumb pp__thumb--2 mt-35">
                            <img class="default" src="assets/images/products/shop/s-p-4.png" alt="">
                            <img class="on-hover" src="assets/images/products/shop/s-p-5.png" alt="">
                        </div>
                        <div class="pp__content pp__content--2 mt-25">
                            <div class="pp__c-top d-flex align-items-center justify-content-center">
                                <div class="pp__cat pp__cat--2">
                                    <a href="#0">Rosted Coffee</a>
                                </div>
                            </div>
                            <h4 class="pp__title pp__title--2">
                                <a href="product-details.html">AMERICANO COFFEE</a>
                            </h4>
                            <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                <h6 class="label">Price - </h6>
                                <span class="price"> $325.00 / <span class="regular"><del>$348</del></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     releted products area end -->

</main>

@include("main_theme.footer")
<script type="text/javascript">
    $(document).ready(function () {
        $('#input-option3').on('click', '.radio', function () {
            $('#input-option3 .radio').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#input-option2').on('click', '.radio', function () {
            $('#input-option2 .radio').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
