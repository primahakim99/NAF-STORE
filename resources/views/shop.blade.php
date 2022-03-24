@extends('layouts.index')
@section('title_bar')
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->
<!-- Start Top Search -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop</h2>
                <ul class="breadcrumb">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary " style="background: #14BFF4">search</button>
                      </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Search -->
@endsection
@section('content')
<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="Assets/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Apple Chips</h4>
                                                <h5> Rp 31.500</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Bakpao Sayang</h4>
                                                <h5> Rp 30.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="Assets/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Bayam Crispy</h4>
                                                <h5> Rp 8.700</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Broccoli Chips</h4>
                                                <h5> Rp 17.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="Assets/images/img-pro-05.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Chili Chips</h4>
                                                <h5> Rp 34.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="Assets/images/img-pro-06.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Cokelat Tempe Dekonco</h4>
                                                <h5> Rp 10.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="Assets/images/img-pro-07.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Gadung Chips</h4>
                                                <h5> Rp 13.500</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="Assets/images/img-pro-08.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Klanceng Honey</h4>
                                                <h5> Rp 110.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-09.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Jackfruit Chips</h4>
                                                <h5> Rp 22.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-10.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Pia Mangkok</h4>
                                                <h5> Rp 40.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-11.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Banana chips/h4>
                                                <h5> Rp 18.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-12.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4> Apple Cider Drink SIIPLAH</h4>
                                                <h5> Rp  32.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-13.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Veggie Chips</h4>
                                                <h5> Rp 20.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-14.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Soya Bean Chips</h4>
                                                <h5> Rp 5.500</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="Assets/images/img-pro-15.jpg" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Carrot Chips</h4>
                                                <h5> Rp 17.000</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="Assets/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> <del>$ 60.00</del> $40.79</h5>
                                                <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                    sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                    Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                <a class="btn hvr-hover" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="Assets/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> <del>$ 60.00</del> $40.79</h5>
                                                <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                    sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                    Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                <a class="btn hvr-hover" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="Assets/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> <del>$ 60.00</del> $40.79</h5>
                                                <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                    sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                    Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                <a class="btn hvr-hover" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->
@endsection
