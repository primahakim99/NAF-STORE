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
@if(isset($errors)&& $errors != "[]")
<div style="background-color: rgb(233, 135, 135); text-align: center; font-size: 50px; padding: 50px">
    {{ $errors }}
</div>
@else
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="checkout-address">
                    <div class="title-left">
                        <h3>Billing address</h3>
                    </div>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name *</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback"> Valid first name is required. </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name *</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback"> Valid last name is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <input type="text" class="form-control" id="address" placeholder="" required>
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country *</label>
                                <input type="text" class="form-control" id="country" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping Country. </div>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Postal Code *</label>
                                <input type="text" class="form-control" id="postalCode" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping Postal Code. </div>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="state">Island *</label>
                                <input type="text" class="form-control" id="island" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping Island. </div>
                            </div>
                        </div>
                        <div class="title-left">
                            <h3>Shipping Method</h3>
                        </div>
                        <div class="title"> <span>Expedition by J&T</span> </div>
                        <div class="d-block my-3">
                            <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input id="shippingOption1" name="shipping-option" class="custom-control-input"
                                        checked="checked" type="radio">
                                    <label class="custom-control-label" for="shippingOption1">Standard Delivery</label>
                                    <span class="float-right font-weight-bold">Rp 5.000,00 - Rp 10.000,00</span>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input id="shippingOption2" name="shipping-option" class="custom-control-input"
                                        type="radio">
                                    <label class="custom-control-label" for="shippingOption2">Express Delivery</label>
                                    <span class="float-right font-weight-bold">Rp 7.000,00 - Rp 15.000,00</span>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input id="shippingOption3" name="shipping-option" class="custom-control-input"
                                        type="radio">
                                    <label class="custom-control-label" for="shippingOption3">Next Business day</label>
                                    <span class="float-right font-weight-bold">Rp 10.000,00 - Rp 20.000,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="title-left">
                            <h3>Payment</h3>
                        </div>
                        <div class="mb-4">
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" class="custom-control-input"
                                        checked="checked" type="radio">
                                    <label class="custom-control-label" for="debit">Debit Card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input">
                                    <label class="custom-control-label" for="credit">Credit Card</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required> <small
                                    class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback"> Name on card is required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback"> Credit card number is required </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback"> Expiration date required </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback"> Security code required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="payment-icon">
                                    <ul>
                                        <li><img class="img-fluid" src="Assets/images/payment-icon/1.png" alt=""></li>
                                        <li><img class="img-fluid" src="Assets/images/payment-icon/2.png" alt=""></li>
                                        <li><img class="img-fluid" src="Assets/images/payment-icon/3.png" alt=""></li>
                                        <li><img class="img-fluid" src="Assets/images/payment-icon/5.png" alt=""></li>
                                        <li><img class="img-fluid" src="Assets/images/payment-icon/7.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <div class="odr-box">
                            <div class="title-left">
                                <h3>Shopping cart</h3>
                            </div>
                            <div class="rounded p-2 bg-light">
                                <div class="media mb-2 border-bottom">
                                    <div class="media-body"> <a href="detail.html">Apple Chips</a>
                                        <div class="medium">Rp 31.500<span class="mx-2">|</span> Qty: 1 <span
                                                class="mx-2">|</span> Subtotal: Rp 31.500</div>
                                        <label for="cc-name">Store account number:</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    </div>
                                </div>
                                <div class="media mb-2 border-bottom">
                                    <div class="media-body"> <a href="detail.html">Bakpao Sayang</a>
                                        <div class="medium">Price: Rp 30.000<span class="mx-2">|</span> Qty: 1 <span
                                                class="mx-2">|</span> Subtotal: Rp 30.000</div>
                                        <label for="cc-name">Store account number:</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <div class="media-body"> <a href="detail.html">Bayam Crispy</a>
                                        <div class="medium">Price: Rp 8.700<span class="mx-2">|</span> Qty: 1 <span
                                                class="mx-2">|</span> Subtotal: Rp 8.700</div>
                                        <label for="cc-name">Store account number:</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Your order</h3>
                            </div>
                            <div class="d-flex">
                                <h4>Sub Total</h4>
                                <div class="ml-auto font-weight-bold">Rp 70.200</div>
                            </div>
                            <div class="d-flex">
                                <h4>Discount</h4>
                                <div class="ml-auto font-weight-bold">Rp 0</div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <h4>Shipping Cost</h4>
                                <div class="ml-auto font-weight-bold">Rp 10.000</div>
                            </div>
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Grand Total</h5>
                                <div class="ml-auto h5">Rp 70.200</div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-12 d-flex shopping-box"> <a href="checkout.html" class="ml-auto btn hvr-hover">Place
                            Order</a> </div>
                </div>
                <label for="cc-name">This is your delivery receipt number:</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
            </div>
        </div>

    </div>
</div>
@endif
<!-- End Cart -->
@endsection