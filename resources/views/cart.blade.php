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
            <div class="col-lg-8">
                <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach ($carts as $cart)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img class="img-fluid" src="{{$cart->image}}" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            {{$cart->name}}
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rp {{$cart->price}}</p>
                                    </td>
                                    <td class="quantity-box">
                                        <input type="number" size="4" value="{{$cart->product_qty}}" min="0" step="1" class="c-input-text qty text" name="qty" id="qty">

                                        {{-- <div class="input-grouptext-center mb-3" style="width: 50px">
                                            <form action="/update_qty_-" method="PUT">
                                                @csrf
                                                <input type="hidden" name="cart_id" value="{{$cart->id}}">
                                                <button class="input-group-text decrement-btn" name="decrement" id="decrement">-</button>
                                            </form>

                                            <input type="text" name="qty" class="form-control qty-input text-center" value="{{$cart->product_qty}}">

                                            <form action="/update_qty_+" method="PUT">
                                                @csrf
                                                <input type="hidden" name="cart_id" value="{{$cart->id}}">
                                                <input type="hidden" name="cart_qty" value="{{$cart->product_qty +1}}">
                                                <button class="input-group-text increment-btn" name="increment" id="increment">+</button>
                                            </form>
                                        </div> --}}

                                        {{-- <button class="btn btn-primary" wire:click.prevent="decrement('{{$cart->id}}')" >-</button>
                                        <input type="text" name="qty" class="form-control qty-input text-center" value="{{$cart->product_qty}}">
                                        <button class="btn btn-primary" wire:click.prevent="increment('{{$cart->id}}')" >+</button> --}}
                                    </td>
                                    <td class="total-pr">
                                        <p>Rp {{$cart->product_qty*$cart->price}}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php $total += $cart->product_qty*$cart->price; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-lg-12 col-sm-6">
                            <div class="update-box">

                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>

                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="{{$cart->image}}" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        {{$cart->name}}
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp {{$cart->price}}</p>
                                </td>
                                <td class="quantity-box">
                                <div class="input-group text-center mb-3">
                                    @if($cart->product_qty > 1)
                                    <a href="{{url('/updatecart/'.$cart->id.'/-1')}}"
                                        class="btn btn-sm bg-primary">-</a>
                                    @endif
                                    <input type="text" value="{{$cart->product_qty}}" name="qty"
                                        class="form-control qty-input text-center" style="width:50px; height:35px">
                                    <a href="{{url('/updatecart/'.$cart->id.'/1')}}"
                                        class="btn btn-sm bg-primary">+</a>
                                </div>

                                </td>
                                <td class="total-pr">
                                    <p>Rp {{$cart->product_qty*$cart->price}}</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="{{ url('deletecart/'.$cart->id) }}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            {{-- <div class="col-lg-8 col-sm-12"></div> --}}
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold">Rp {{$total}}</div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold">Rp 0</div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Total</h5>
                        <div class="ml-auto h5">Rp {{$total-0}}</div>
                    </div>
                    <hr>
                    <div class="col-12 d-flex shopping-box"><a href="checkout.html"
                            class="ml-auto btn hvr-hover">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endIf
<!-- End Cart -->
@endsection
