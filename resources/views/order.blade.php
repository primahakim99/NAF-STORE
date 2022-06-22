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
                                <th scope="col">No</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Tracking No</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Receive Order</th>
                            </tr>
                        </thead>
                        @foreach($orders as $order)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td scope="row">{{ date('d-m-Y'), strtotime($order->created_at) }}</td>
                                <td scope="row">{{ $order->tracking_no }}</td>
                                <td scope="row">{{ $order->grand_total }}</td>
                                @if ($order->status == 0)
                                <td scope="row">Process</td>
                                @elseif ($order->status == 1)
                                <td scope="row">Payment Verified</td>
                                @elseif ($order->status == 2)
                                <td scope="row">Shipping</td>
                                @elseif ($order->status == 3)
                                <td scope="row">Completed</td>
                                @else
                                <td scope="row">Order Reject</td>
                                @endif
                                <td>
                                    @if ($order->status == 2)
                                    <form action=" {{url('/update-order/'.$order->id.'/1')}} " method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary">Receive Order</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- End Wishlist -->

@endsection
