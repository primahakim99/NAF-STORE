@extends('layouts.indexOwner')
@section('content')
<div class="mx-5 my-5 mt-3">
    <a href="{{ route('product.create') }}" class="btn btn-success mb-3">Input Product Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Weight</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($product as $product)
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img class="img-fluid img-responsive"
                src="{{ asset('storage/'.$product->image) }}" style="height: 150px; width: 150px;"></td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->weight }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="/product/{{ $product->slug }}" class="btn bg-info">Show</a>
                    <a href="/product/{{ $product->slug }}/edit" class="btn bg-warning">Edit</a>
                    <form action="/product/{{ $product->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="alert('Delete Product?')">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection