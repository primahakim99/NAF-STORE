@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<<<<<<< HEAD
<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="Assets/images/banner-01.jpg" alt="" />
                    <a class="btn hvr-hover" href="/shop">Chips</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="Assets/images/banner-02.jpg" alt="" />
                    <a class="btn hvr-hover" href="/shop">Snack</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="Assets/images/banner-03.jpg" alt="" />
                    <a class="btn hvr-hover" href="/shop">Beverage</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->
=======
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
>>>>>>> b0ea21a17274230cda42addcc4bff734aad238ad

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
