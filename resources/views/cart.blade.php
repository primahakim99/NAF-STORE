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
<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
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
                                Lorem ipsum dolor sit amet
                            </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ 80.0</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="total-pr">
                                    <p>$ 80.0</p>
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
                                Lorem ipsum dolor sit amet
                            </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ 60.0</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="total-pr">
                                    <p>$ 80.0</p>
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
                                Lorem ipsum dolor sit amet
                            </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ 30.0</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="total-pr">
                                    <p>$ 80.0</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="#">
                                <i class="fas fa-times"></i>
                            </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-lg-12 col-sm-6">
                        <div class="update-box">
                            <input value="Update Cart" type="submit">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-8 col-sm-12"></div> --}}
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold">  </div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold">  </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"> $ 388 </div>
                    </div>
                    <hr>
                    <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->
@endsection
