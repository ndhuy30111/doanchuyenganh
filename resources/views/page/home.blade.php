@extends('index')
@section('page')
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container-fluid">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="max-height: 500px;">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="{{asset('img/banner/banned-s1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{asset('img/banner/banned-s2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="20000">
                    <img src="{{asset('img/banner/banned-s3.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            @foreach ($new as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset("images/product/$item->imageurl")}}">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="{{asset("images/product/$item->imageurl")}}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>

                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{url("sanpham/$item->url")}}">{{$item->title}}</a></h6>

                        <div class="product__price">{{number_format($item->price,0,'','.')}} ₫</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Hot Trend</h4>
                    </div>
                    @foreach ($hot as $item)
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="{{asset("images/product/$item->imageurl")}}" alt="" style="height: 90px;
                           width: 90px;">
                        </div>
                        <div class="trend__item__text">
                            <a href="{{url("sanpham/$item->url")}}">  <h6>{{$item->title}}</h6></a>
                            <div class="product__price">{{number_format($item->price,0,'','.')}} ₫</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Best seller</h4>
                    </div>
                    @foreach ($best as $item)
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="{{asset("images/product/$item->imageurl")}}" alt="" style="height: 90px;
                           width: 90px;">
                        </div>
                        <div class="trend__item__text">
                            <a href="{{url("sanpham/$item->url")}}">  <h6>{{$item->title}}</h6></a>

                            <div class="product__price">{{number_format($item->price,0,'','.')}} ₫</div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Feature</h4>
                    </div>
                    @foreach ($feature as $item)
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="{{asset("images/product/$item->imageurl")}}" alt="" style="height: 90px;
                           width: 90px;">
                        </div>
                        <div class="trend__item__text">
                            <a href="{{url("sanpham/$item->url")}}">  <h6>{{$item->title}}</h6></a>
                            <div class="product__price">{{number_format($item->price,0,'','.')}} ₫</div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="img/discount.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>Summer 2019</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href="#">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
@endsection
