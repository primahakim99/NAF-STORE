@extends('layouts.indexOwner')
@section('content')
<div class="mx-5 my-5 mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Order Date</th>
                <th scope="col">Tracking No</th>
                <th scope="col">Total Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
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
                    <a href="/orderOwner/{{ $order->id }}" class="btn bg-info">Show</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
