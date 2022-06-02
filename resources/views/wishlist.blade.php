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
<div class="all-title-box"></div>
<!-- End Top Search -->
@endsection
@section('content')
<!-- Start Wishlist  -->

@if(isset($errors)&& $errors != "[]")
<div style="background-color: rgb(233, 135, 135); text-align: center; font-size: 50px; padding: 50px">
    {{ $errors }}
</div>
@else
<div class="wishlist-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product Name</th>
                                <th>Unit Price </th>
                                <th>Stock</th>
                                <th>Add Item</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="Assets/images/img-pro-01.jpg" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        Apple Chips
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp 31.500</p>
                                </td>
                                <td class="quantity-box">In Stock</td>
                                <td class="add-pr">
                                    <a class="btn hvr-hover" href="#">Add</a>
                                </td>
                                <td class="remove-pr">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="Assets/images/img-pro-02.jpg" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        Bakpao Sayang
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp 30.000</p>
                                </td>
                                <td class="quantity-box">In Stock</td>
                                <td class="add-pr">
                                    <a class="btn hvr-hover" href="#">Add</a>
                                </td>
                                <td class="remove-pr">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="Assets/images/img-pro-03.jpg" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        Bayam Crispy
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp 8.700</p>
                                </td>
                                <td class="quantity-box">In Stock</td>
                                <td class="add-pr">
                                    <a class="btn hvr-hover" href="#">Add</a>
                                </td>
                                <td class="remove-pr">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- End Wishlist -->

@endsection