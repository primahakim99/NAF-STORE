@extends('layouts.indexOwner')
@section('content')
<div class="mx-5 my-5 mt-3">
    <div class="card px-3 py-3">
        <form action="/product/{{ $product->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="title">Product Name: </label>
                        <input type="text" class="form-control" required="required" name="name"
                            value="{{old('name', $product->name)}}"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="title">Product Slug: </label>
                        <input type="text" class="form-control" required="required" name="slug" value="{{old('slug', $product->slug)}}"></br>
                    </div>
                    <div class=" mb-3 col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                            @if(old('category_id',$product->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Store</label>
                        <select class="form-control" name="store_id">
                            @foreach ($stores as $store)
                            @if(old('store_id',$product->store_id) == $store->id)
                            <option value="{{ $store->id }}" selected>{{ $store->storeName }}</option>
                            @else
                            <option value="{{ $store->id }}">{{ $store->storeName }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="content">Description: </label>
                        <textarea type="text" class="form-control" required="required"
                            name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Stock</label>
                        <input type="number" name="stock" id="" class="form-control" value="{{old('stock', $product->stock)}}">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Weight</label>
                        <input type="text" name="weight" id="" class="form-control" value="{{old('weight', $product->weight)}}">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Price</label>
                        <input type="text" name="price" id="" class="form-control" value="{{old('price', $product->price)}}">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="image">Image: </label>
                        <input type="file" class="form-control" name="image"></br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection