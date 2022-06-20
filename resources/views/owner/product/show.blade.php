@extends('layouts.indexOwner')
@section('content')
<div class="container">
    <h1 class="mt-3 text-center" style="text-transform: uppercase"><b> Product {{ $product->name }} Detail </b></h1>
    <div class="mt-3 mb-5">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Name:</th>
                <td> {{ $product->name }} </td>
            </tr>
            <tr>
                <th>Store:</th>
                <td> {{ $product->store->storeName }} </td>
            </tr>
            <tr>
                <th>Category:</th>
                <td> {{ $product->category->name }} </td>
            </tr>
            <tr>
                <th>Description:</th>
                <td> {{ $product->description }} </td>
            </tr>
            <tr>
                <th>Stock:</th>
                <td> {{ $product->stock }} </td>
            </tr>
            <tr>
                <th>Weight:</th>
                <td> {{ $product->weight }} </td>
            </tr>
            <tr>
                <th>Price:</th>
                <td> {{ $product->price }} </td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><img class="img-fluid img-responsive"
                src="{{ asset('storage/'.$product->image) }}" style="height: 300px;"></td>
            </tr>
        </table>
    </div>
</div>
@endsection