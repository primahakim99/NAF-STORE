@extends('layouts.index')
@section('content')
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="Assets/images/banner-01.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> NAF STORE</strong></h1>
                        <p class="m-b-40">We collect a variety of typical Malang snacks from various sources of MSMEs throught Malang Raya</p>
                        <p><a class="btn hvr-hover" href="/shop">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="Assets/images/banner-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> NAF STORE</strong></h1>
                        <p class="m-b-40">We collect a variety of typical Malang snacks from various sources of MSMEs throught Malang Raya</p>
                        <p><a class="btn hvr-hover" href="/shop">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="Assets/images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> NAF STORE</strong></h1>
                        <p class="m-b-40">We collect a variety of typical Malang snacks from various sources of MSMEs throught Malang Raya</p>
                        <p><a class="btn hvr-hover" href="/shop">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{ $category->image }}" alt="" />
                    <a class="btn hvr-hover" href="/shop?category={{ $category->slug }}">{{ $category->name }}</a>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="Assets/images/add-img-01.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="Assets/images/add-img-02.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
